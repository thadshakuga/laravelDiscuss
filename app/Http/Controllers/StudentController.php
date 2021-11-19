<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Carbon\Carbon;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('student.index');
        $students=Student::all();
        return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$data=$request->all();
        $fna=$request->input('first_name');
        $lna=$request->input('last_name');
        $gender=$request->input('gender');
        $grade=$request->input('grade');
        $address=$request->input('address');
        if(!empty($request->input('subject'))){
            $subject=implode(',',$request->input('subject'));
        }
        else{
            $subject="";
        }
        $date_of_birth=$request->input('date_of_birth');
        $age = Carbon::parse($request->date_of_birth)->diff(Carbon::now())->y;
        $validated = $request->validate([
            'date_of_birth' => 'date|before:-18 years',
        ]);
        
        $email=$request->input('email');
        $mobile=$request->input('mobile_no');

        $student=new Student();
        $student->first_name=$fna;
        $student->last_name=$lna;
        $student->gender=$gender;
        $student->grade=$grade;
        $student->address=$address;
        $student->subject=$subject;
        $student->date_of_birth=$date_of_birth;
        $student->email_address=$email;
        $student->mobile_no=$mobile;
        $student->save();
        $students=Student::all();
        return view('student.index',compact('students'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $student=Student::find($id);
        return view('student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $student=Student::find($id);
        return view('student.edit',compact('student'));
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
        $gender=$request->input('gender');
        $grade=$request->input('grade');
        $address=$request->input('address');
        if(!empty($request->input('subject'))){
            $subject=implode(',',$request->input('subject'));
        }
        $date_of_birth=$request->input('date_of_birth');
        $age = Carbon::parse($request->date_of_birth)->diff(Carbon::now())->y;
        $validated = $request->validate([
            'age' => 'required|date|before:-18 years',
        ]);
        $email=$request->input('email');
        $mobile=$request->input('mobile');

        $student=Student::find($id);
        $student->first_name=$fna;
        $student->last_name=$lna;
        $student->gender=$gender;
        $student->grade=$grade;
        $student->address=$address;
        $student->subject=implode(',',$request->subject);
        $student->date_of_birth=$date_of_birth;
        $student->email_address=$email;
        $student->mobile_no=$mobile;
        $student->save();
        $students=Student::all();
        return view('student.index',compact('students'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student=Student::find($id);
        $student->delete();
        $students=Student::all();
        return view('student.index',compact('students'));
    }
}
