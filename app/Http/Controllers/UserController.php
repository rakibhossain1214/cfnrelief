<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
   
    public function verify(Request $request)
    {
        //
        $username = $request->input('username');
        $password = $request->input('password');

        $user = DB::table('users')
        ->where('username', $username)
        ->where('password', $password)
        ->first();

        if($user != null){
            $role = $user->role;
            if($role=='admin'){
                return view('home/home', ['layout'=>'admin']);
            }else if($role=='wardmember'){
                return view('home/home', ['layout'=>'wardmember']);
            }else if($role=='unionchairman'){
                return view('home/home', ['layout'=>'unionchairman']);
            }else if($role=='upazillachairman'){
                return view('home/home', ['layout'=>'upazillachairman']);
            }else{
                return view('home/home', ['layout'=>'other']);
            }
        }else{
            return redirect('/login');
        }
       
    }

}
