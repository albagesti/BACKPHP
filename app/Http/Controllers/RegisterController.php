<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\students;
use Carbon\Carbon;
use DB;

class RegisterController extends Controller {

    public function create() {

        return view('auth.register');
    }

    public function index()
    {



        if(auth()->user()->role == 'admin'){
            return redirect()->to('admin');
        }else{
            return redirect()->to('alumno');
        }
    }

    public function store() {

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $user = User::create(request(['name', 'email', 'password']));
        $student = new students;
        $student->id=$user->id;
        $student->username=$user->name;
        $student->name=$user->name;
        $student->email=$user->email;
        $student->pass=$user->password;
        $student->date_registered=Carbon::now();
        $student->save();


        auth()->login($user);
        return redirect()->to('/');
    }
}
