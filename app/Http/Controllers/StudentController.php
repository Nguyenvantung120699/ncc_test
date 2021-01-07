<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::orderBy('created_at','asc')->paginate(10);
        return view('student.index',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string:student",
            "age" => "required|integer",
            "gender" => "required|string",
            "birth" => "string",
            "country" => "string"
        ]);
        Student::create([
            "name" => $request->get("name"),
            "age" => $request->get("age"),
            "gender" => $request->get("gender"),
            "birth" => $request->get("birth"),
            "country" => $request->get("country")
        ]);
        return redirect()->to("student/index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students = Student::find($id);
        return view('student.detail_student',['students'=>$students]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Student::find($id);
        return view('student.edit_student',['students'=>$students]);
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
        $request->validate([
            "name" => "string:student,name,".$id,
            "age" => "integer",
            "gender" => "string",
            "birth" => "string",
            "country" => "string"
        ]);
        $students = Student::find($id);
        $students->name = $request->get('name');
        $students->age = $request->get('age');
        $students->gender = $request->get('gender');
        $students->birth = $request->get('birth');
        $students->country = $request->get('country');

        $students->save();

        return redirect()->to("student/detail/$id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        try {
            $student->delete();

        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("student/index");
    }
}
