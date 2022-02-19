<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return view('product::index');
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
