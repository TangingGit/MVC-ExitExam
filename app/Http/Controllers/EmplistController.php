<?php

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Http\Request;

class EmplistController extends Controller
{
    public function index() {
        $emp = Employee::all();
        return view('employee/emplist', compact('emp')); 
    }
}
