<?php

namespace App\Http\Controllers;
use App\Join;

use Illuminate\Http\Request;

class JoinController extends Controller
{
    public function Store()
    {
        $attrb=request()->validate(["first_name"=>"required|string","last_name"=>"required|string","email"=>"required|email",
        "phone"=>"required|numeric",
        "gender"=>"required|string",
        "date"=>"required|date",
        "occup"=>"required",
        "dependants"=>"required", 
        "M-status"=>"required",
        "goals"=>"required"]);
      

        Join::create([
            "first_name"=>$attrb["first_name"],
            "last_name"=>$attrb["last_name"],
            "email"=>$attrb["email"],
            "phone"=>$attrb["phone"],
            "gender"=>$attrb["gender"],
            "creation"=>$attrb["date"],
            "occupation"=>$attrb["occup"],
            "M-status"=>$attrb["M-status"],
            "goals"=>$attrb["goals"],
            "dependants"=>$attrb["dependants"]
        ]);
        return view("thanks");

        }
        public function thanks(){
            return view("thanks");
        }
    }
