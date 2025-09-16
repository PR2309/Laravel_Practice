<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamedRouteController extends Controller
{
    //
    public function namedShow(){
        // return redirect()->to('/namedRoute-home');
        // // Method 1
        // return redirect()->to(route('namedHome'));
        // Method 2
        // return to_route('namedHome');
        // shows route
        // return route('namedHome');
    }
    public function user($user){
        return 'Hello from Named Route Controller '.$user;
    }
}
