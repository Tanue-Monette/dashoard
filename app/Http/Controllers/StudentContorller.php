<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\User;

class StudentContorller extends Controller
{

    public function index()
    {
        return view('students.add');
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
    
            $man = $request->input('studmatricle');
            $ids = $user->id;
            $stud = Students::create(['studMatricle'=>$man, 'iduser'=>$ids]);
            
            $stud->save();
    
            return redirect()->route('add-student');
        }
}
