<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index');
    }

    public function flot()
    {
        return view('admin.pages.charts.flot-chart');
    }

    public function morris()
    {
        return view('admin.pages.charts.morris-chart');
    }

    public function tables()
    {
        return view('admin.pages.tables.table');
    }

}
