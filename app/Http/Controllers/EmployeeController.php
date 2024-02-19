<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class EmployeeController extends Controller
{
    public function index(){
        $showEmployee = Data::all();
        return view('employees.index', ['employees' => $showEmployee]);
    }

    public function create(){
        return view('employees.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|string',
            'age' => 'required|integer',
            'address' => 'required|string',
            'number' => 'required|string'
        ]);

        $newEmployee = Data::create($validated);
        return redirect(route('employee.index'));
    } 

    public function edit(Data $employee){
        return view('employees.edit', ['employee' => $employee]);
    }

    public function update(Data $employee, Request $request){
        $updated = $request->validate([
            'name' => 'required|string',
            'age' => 'required|integer',
            'address' => 'required|string',
            'number' => 'required|string'
        ]);

        $employee->update($updated);
        return redirect(route('employee.index'));
    }

    public function annihilate(Data $employee){
        $employee->delete();
        return redirect(route('employee.index'));
    }
}
