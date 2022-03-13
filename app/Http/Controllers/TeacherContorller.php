<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Students;
use App\Models\Teachers;

class TeacherContorller extends Controller
{
    public function index()
    {
        return view('teachers.add');
    }
        //savinf users infos
        public function store(Request $request)
        {
            $name = $request->input('name');
            $phone = $request->input('phone');
            $town = $request->input('town');
            $address = $request->input('address');
            $email = $request->input('email');
            $password = $request->input('password');
    
            dd($name, $phone, $town, $address, $email, $password);
            $user = User::create(['name'=>$name, 'phone'=>$phone, 'town'=>$town, 'address'=>$address, 'email'=>$email, 'password'=>$password]);
            
            $user->save();
    
            $tman = $request->input('teachMatricle');
            $status = 'active';
            $idt = $user->id;
    
            $teach = Teachers::create(['teachMatricle'=>$tman, 'status'=>$status, 'iduser'=>$idt]);
            $teach->save();
    
            return redirect()->route('add-teacher');
        }
}
