<?php

namespace Modules\Product\Http\Controllers\Admin;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Interfaces\Services\BrandServiceInterface;

class BrandController extends Controller
{
    protected $brandService;

    public function __construct(BrandServiceInterface $brandService)
    {
        $this->brandService = $brandService;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $brands = $this->brandService->all();

        return view('product::brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('product::brand.create', [
            'form'      => 'create',
            'brand'    => null,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $this->brandService->create($request);
        session()->flash('success', 'create new brand successfully'); // todo: use locale translate languages

        return redirect()->route('brands.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('product::brand.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Request $request, $id)
    {
        $brand = $this->brandService->find($id);
        $brandLogs = $this->brandService->getLogs($id, $request);
        $users = config('dummy.users');

        return view('product::brand.update', [
            'form'          => 'update',
            'brand'         => $brand,
            'brandLogs'     => $brandLogs,
            'inputLogs'     => $request->all(),
            'users'         => $users,
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $this->brandService->update($id, $request);
        session()->flash('success', 'edit brand successfully'); // todo: add name or id to message, use lang

        return redirect()->route('brands.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
