<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Employee;

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
        $employees = Employee::all()->toArray();
        return view('employees.index', ['employees' => Employee::orderBy('name')->get()]);
    }
}
