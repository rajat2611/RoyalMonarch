<?php

namespace App\Http\Controllers;
use App\Referrals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ReferralsController extends Controller
{
    //

    public function index(){
        $referrals = Auth::user()->referrals;
        return view('dashboard.referrals',compact("referrals"));
    }

    public function Store()
    {
        $attrb=request()->validate(["name"=>"required|string","email"=>"required|email",
        "phone"=>"required|numeric","user_id"=>"required"]);
      

        Referrals::create([
            "name"=>$attrb["name"],
            "email"=>$attrb["email"],
            "phone"=>$attrb["phone"],
            "user_id"=>$attrb["user_id"]]);

        return view("thanks_referring");

        }

        
}
