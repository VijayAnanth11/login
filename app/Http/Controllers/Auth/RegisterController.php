<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request){
        $request ->validate(
            [
                'name'=>'required',

                'lastname'=>'required',
                'date'=>'required',

                'email'=>'required',

                'number'=>'required',
                'password'=>'required|confirmed'
            ]
            );

          $user = new User;
          $user ->name=$request->input('name');
          $user ->lastname=$request->input('lastname');
          $user ->date=$request->input('date');
          $user ->email=$request->input('email');
          $user ->number=$request->input('number');
          $user ->password= Hash::make($request->input('password'));
          $user->save();

          Auth::login($user);

          return redirect('/home');

    } 
    public function reg(){
        return redirect('/register');
    
       }
    

    
}
