<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function register(Request $request){
        $incomingFields=$request->validate(
            // // Method 1
            // [
            //     'name'=>'required|min:2|max:20',
            //     'email'=>'required|email',
            //     'password'=>'required|min:8|max:20'
            // ]
            //  Method 2
            [
                'name'=>['required','min:2','max:20'],
                'email'=>'required|email',
                'password'=>'required|min:8|max:20'
            ]
        );
        return 'Thank You<br/> From User Controller';
    }
}
