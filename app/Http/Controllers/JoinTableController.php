<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoinTableController extends Controller
{
    function index()
    {
        $data = DB::table('employees')
            ->join('projects', 'projects.id', '=', 'employees.project_id')
            ->select('employees.name', 'projects.title')
            ->get();
        return view('join_table', compact('data'));
    }
}
