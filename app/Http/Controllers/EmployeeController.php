<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index() {
        return view('employees.index', ['employees' => Employee::orderBy('name')->get()]);
    }
    public function create() {
        return view('employees.create');
    }
    public function store(Request $request) {
        $employee = new Employee();

        $employee->fill($request->all());
        $employee->save();
        return redirect()->route('employees.index');
    }
 
    public function edit(Employee $employee){
        return view('employees.edit', ['employee' => $employee]);
    }
 
    public function update(Request $request, Employee $employee){
        $employee->fill($request->all());
        $employee->save();
        return redirect()->route('employees.index');
    }
 
     public function destroy(Employee $employee){
         $employee->delete();
         return redirect()->route('employees.index');
     }
}


