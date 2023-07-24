<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subject;

class StudentController extends Controller
{
    public function index(Student $student){
        return view('students.index')->with(['students'=>$student->get()]);
    }
    public function create(Subject $subject){
        return view('students.create')->with(['subjects'=>$subject->get()]);
    }
    public function store(Request $request, Student $student)
    {
        $input_student = $request['student'];
        $input_subjects = $request->subjects_array;  //subjects_arrayはnameで設定した配列名
        
        //先にstudentsテーブルにデータを保存
        $student->fill($input_student)->save();
        
        //attachメソッドを使って中間テーブルにデータを保存
        $student->subjects()->attach($input_subjects); 
        return redirect('/student');
    }
}
