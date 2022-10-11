<?php

namespace Modules\Product\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Modules\Product\Interfaces\Services\ProductServiceInterface;
use Modules\Product\Http\Requests\ProductRequest;

class ProductController extends BaseController
{
    protected $productService;

    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }

    public function index(Request $request)
    {
        $data = $request->only(['name', 'brand_id', 'category_id', 'is_show', 'is_lock', 'created_by', 'created_at']);
        if (empty($data)) {
            $products = $this->productService->all();
        } else {
            $products = $this->productService->search($request);
        }

        return view('product::product.index', compact('products'));
    }

    public function create()
    {
        return view('product::product.create', [
            'form'  => 'create',
            'product'   => null,
        ]);
    }

    public function store(ProductRequest $request)
    {
        $this->productService->create($request);
        session()->flash('success', 'create new product successfully'); // todo: use locale translate languages

        return redirect()->route('products.index');
    }

    public function show($id)
    {
        $product = $this->productService->find($id);

        return view('product::product.detail', compact('product'));
    }

    public function edit(Request $request, $id)
    {
        $product = $this->productService->find($id);
        $productLogs = $this->productService->getLogs($id, $request);

        return view('product::product.update', [
            'form'          => 'update',
            'product'       => $product,
            'productLogs'   => $productLogs,
            'inputLogs'     => $request->all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->productService->update($id, $request);
        session()->flash('success', 'edit product successfully'); // todo: add name or id to message, use lang

        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $this->productService->delete($id);
        session()->flash('success', 'delete product successfully'); // todo: add name or id to message, use lang

        return redirect()->route('products.index');
    }

    public function search(Request $request)
    {
        $products = $this->productService->search($request);

        return view('product::product.index', compact('products'));
    }
}
