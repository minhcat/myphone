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

    public function index()
    {
        $products = $this->productService->all();
        $formatDate = 'H:i:s d-m-Y';

        return view('product::product.index', compact('products', 'formatDate'));
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
        return view('product::show');
    }

    public function edit($id)
    {
        $product = $this->productService->find($id);

        return view('product::product.update', [
            'form'      => 'update',
            'product'   => $product,
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->productService->update($id, $request);
        session()->flash('success', 'edit product successfully'); // todo: add name or id to message

        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        //
    }
}
