<?php

namespace Modules\System\Http\Controllers\Admin;

use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('Adminlte.index');
    }
}
