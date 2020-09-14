<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = DB::table('employees')
            ->join('projects', 'projects.id', '=', 'employees.project_id')
            ->select('employees.name', 'projects.title')
            ->get();
        return view('home', compact('data'));
    }
}
