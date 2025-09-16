<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // this class helps to send the mail
class EmailController extends Controller
{
    //
    public function sendemail(){
        $to="piyushanand2309@gmail.com";
        $sub="Test Email";
        $msg="This is a test email";

        Mail::to($to)->send(new WelcomeEmail($sub,$msg)); 

        return "Email sent!!!";
    }
}
