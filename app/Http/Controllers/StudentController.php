<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Http;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return view('students.index',['student'=>$student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $student = new Student();
        $student->nama = $request->nama;
        $student->npm = $request->npm;
        $student->email = $request->email;
        $student->fakultas = $request->fakultas;
        $student->prodi = $request->prodi;
        $student->password = "";
        $student->image_profile = "";

        $student->save();

        Http::get('https://api.thingspeak.com/update?api_key=L5R28TI8TK3RVE6W&field1=+1&field2=-1');

        return redirect('/student')->with('status', 'Data Telah Ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show',['student'=>$student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit',['student'=>$student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        Student::where('id',$student->id)
            ->update([
                'nama' => $request->nama,
                'npm' => $request->npm,
                'email' => $request->email,
                'fakultas' => $request->fakultas,
                'prodi' => $request->prodi
            ]);
        return redirect('/student')->with('status', 'Data Telah Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        Http::get('https://api.thingspeak.com/update?api_key=L5R28TI8TK3RVE6W&field1=-1&field2=+1');
        return redirect('/student')->with('status', 'Data Telah Dihapus!');
    }
}
