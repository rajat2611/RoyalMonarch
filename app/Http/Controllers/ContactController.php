<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    //
     public function index()
    {
      
        return view("pages.support");

        }
    

    public function Store()
    {
        $attrb=request()->validate(["first_name"=>"required|string","last_name"=>"required|string","email"=>"required|email",
        "phone"=>"required|numeric",
        "message"=>"required|string"]);
      

        Contact::create([
            "first_name"=>$attrb["first_name"],
            "last_name"=>$attrb["last_name"],
            "email"=>$attrb["email"],
            "phone"=>$attrb["phone"],
            "message"=>$attrb["message"]]);
        return view("thanks_contact");

        }

}