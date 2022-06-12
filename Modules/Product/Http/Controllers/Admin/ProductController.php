<?php

namespace Modules\Product\Http\Controllers\Admin;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Interfaces\Services\ProductServiceInterface;
use Modules\Product\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->all();

        return view('product::product.index');
    }

    public function create()
    {
        return view('product::product.form', [
            'form'  => 'create',
        ]);
    }

    public function store(ProductRequest $request)
    {
        $this->productService->create($request);

        return redirect('product.index');
    }

    public function show($id)
    {
        return view('product::show');
    }

    public function edit($id)
    {
        $product = $this->productService->find($id);
        return view('product::product.form', [
            'form'      => 'update',
            'product'   => $product,
        ]);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
