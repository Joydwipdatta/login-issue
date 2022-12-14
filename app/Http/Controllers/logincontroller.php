<?php

namespace App\Http\Controllers;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

use session;


class logincontroller extends Controller
{
    public function Registerview()
    {
        return view ('register');
    }
    public function Register(Request $req)
    {
       $user =new Login;
       $user->name=$req['name'];
       $user->email=$req['email'];
       $user->password=$req['password'];
       $user->save();

       return redirect ('login');

    }
    public function loginview(){
        return  view('login');
    }
   
    
    public function new(Request $req)
    {
       // return $req->input();
       $data=Login::all();
       
       
       $req->validate([
            'email'=>'required',
            'password' => 'required',
         ]);


         $credentials= $req->only('email','password');
            
         if (Auth::attempt($credentials))
         {
            return redirect()->intended('home')->withSuccess('you have logged  in');

         }
         return redirect("register")->withSuccess('oops not one');
        
        

    }
    public function auth()
    {
        if (Auth::check()){
            return redirect('home');
        }
        return redirect('login');
    }

}

