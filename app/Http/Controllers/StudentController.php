<?php

namespace App\Http\Controllers;

use App\Models\Student;
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
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Student;
        $post->studname=$request->get('name');
        $post->course=$request->get('course');
        $post->fees=$request->get('fees');
        $post->save();

        return redirect('show');
        // echo "Saved</h1>";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $posts = Student::all();
        return view('show',['posts'=>$posts]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response 
     */
    public function edit(Student $student, $id)
    {
        $posts = Student::find($id);
        return view('edit',['posts'=>$posts]);
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student, $id)
    {
        $posts = Student::find($id);
        $posts->studname=$request->get('name');
        $posts->course=$request->get('course');
        $posts->fees=$request->get('fees');
        $posts->save();

        return redirect('show');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student, $id)
    {
        $post = Student::find($id);
        $post->delete();
        return redirect('show');
    }
}





