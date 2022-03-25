<?php

namespace Modules\Product\Http\Controllers\Admin;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Interfaces\Services\ProductServiceInterface;

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
        return view('product::create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('product::show');
    }

    public function edit($id)
    {
        return view('product::edit');
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
