<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Teachers;

class CoursesController extends Controller
{
    public function index()
    {
        return view('courses.add');
    }

    public function store(Request $request)
    {
        $name = $request->input('courseName');
        $start = $request->input('startTime');
        $end = $request->input('endTime');
        $content = $request->input('content');

        if (Teachers::where('id')->get()->is_null()) {
            
            return redirect()->route('add-teacher');
        }else{
            $idteach = Teachers::get()->id;
        }
        dd($name, $start, $end, $content, $idteach);

        $course = Course::create(['courseName'=>$name, 'idTeacher'=>$idteach, 'startTime'=>$start, 'endTime'=>$end, 'content'=>$content]);

        $course->store();

        return redirect()->route('add-course');

    }
}
