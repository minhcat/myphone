<?php

namespace Modules\Product\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Modules\Product\Interfaces\Services\ProductServiceInterface;
use Modules\Product\Http\Requests\ProductRequest;
use Modules\Product\Interfaces\Services\BrandServiceInterface;

class ProductController extends BaseController
{
    protected $productService;
    protected $brandService;

    public function __construct(ProductServiceInterface $productService, BrandServiceInterface $brandService)
    {
        $this->productService = $productService;
        $this->brandService = $brandService;
    }

    public function index(Request $request)
    {
        $data = $request->only(['name', 'brand_id', 'category_id', 'is_show', 'is_lock', 'created_by', 'created_at', 'trashed']);
        if (empty($data)) {
            $products = $this->productService->all();
            $isSearch = false;
        } else {
            $products = $this->productService->search($request);
            $isSearch = true;
        }

        $users = config('dummy.users');
        $brands = $this->brandService->all(false);
        $categories = config('dummy.categories');

        return view('product::product.index', compact('products', 'isSearch', 'users', 'brands', 'categories'));
    }

    public function create()
    {
        return view('product::product.create', [
            'form'      => 'create',
            'product'   => null,
            'brands'    => $this->brandService->all(false),
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
        $brands = $this->brandService->all(false);

        return view('product::product.detail', compact('product', 'brands'));
    }

    public function edit(Request $request, $id)
    {
        $product = $this->productService->find($id);
        $productLogs = $this->productService->getLogs($id, $request);
        $users = config('dummy.users');
        $brands = $this->brandService->all(false);

        return view('product::product.update', [
            'form'          => 'update',
            'product'       => $product,
            'productLogs'   => $productLogs,
            'inputLogs'     => $request->all(),
            'users'         => $users,
            'brands'        => $brands
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

    public function ban($id)
    {
        $this->productService->forceDelete($id);
        session()->flash('success', 'ban product successfully'); // todo: add name or id to message, use lang

        return redirect()->route('products.index');
    }

    public function restore($id)
    {
        $this->productService->restore($id);
        session()->flash('success', 'restore product successfully'); // todo: add name or id to message, use lang

        return redirect()->route('products.index');
    }
}
