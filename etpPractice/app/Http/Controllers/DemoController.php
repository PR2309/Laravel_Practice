<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DemoController extends Controller
{
    //
    public function index(){
        return view('defaultWelcome');
    }
    public function demo(){
        return 'Hello from Demo Controller';
    }
    public function user($x){
        return 'Hello from User Controller '.$x;
    }
    public function getUserName($name="Guest"){
        echo "Name is: ".$name;
        return view('dataPassUsingController',["name"=>$name]);
    }
    public function adminLogin(){
        if(View::exists('admin.login')){ //checking if view exists
            return view('admin.login');
        }
        else{
            return 'admin.login View not found';
        }
        if(View::exists('admin.signup')){ //checking if view exists
            return view('admin.signup');
        }
        else{
            return 'admin.signup View not found';
        }
        // return view('admin.login');
    }
}
