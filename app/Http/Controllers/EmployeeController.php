<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Student;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees=Employee::all();
        return view('employee.index',compact('employees'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fna=$request->input('first_name');
        $lna=$request->input('last_name');
        $dob=$request->input('date_of_birth');
        $basic=$request->input('basic_salary');

        $employee=new Employee();
        $employee->first_name=$fna;
        $employee->last_name=$lna;
        $employee->date_of_birth=$dob;
        $employee->basic_salary=$basic;
        $employee->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee=Employee::find($id);
        return view('employee.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee=Employee::find($id);
        return view('employee.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fna=$request->input('first_name');
        $lna=$request->input('last_name');
        $dob=$request->input('date_of_birth');
        $basic=$request->input('basic_salary');

        $employee=Employee::find($id);
        $employee->first_name=$fna;
        $employee->last_name=$lna;
        $employee->date_of_birth=$dob;
        $employee->basic_salary=$basic;
        $employee->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
