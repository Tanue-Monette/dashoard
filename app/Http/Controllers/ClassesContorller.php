<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classe;

class ClassesContorller extends Controller
{
    public function index()
    {
        return view('classes.add');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $start = $request->input('startTime');
        $end = $request->input('endTime');
        // dd($name, $start, $end);
        $clas = Classe::create(['name'=>$name, 'startTime'=>$start, 'endTime'=>$end]);

        // dd($clas);

        $clas->save();

        return redirect()->route('add-classe');
    }

    public function show()
    {
        return view('classes.show')->with('classes', Classe::orderBy('id', 'DESC')->get());
    }
}
