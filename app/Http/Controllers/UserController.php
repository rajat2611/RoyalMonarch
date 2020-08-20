<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\New_Goal;


class UserController extends Controller
{
    //
    public function index(){
        $user = Auth::user()->join;
        $goals = Auth::user()->newGoals;

        return view('dashboard.index',compact('user','goals'));
    }

    public function Store()
    {
        $attrb=request()->validate(["new_goal"=>"required|string","inception"=>"required|date","fund_invested"=>"required|numeric",
        "total_fund_required"=>"required|numeric",
        "allocation"=>"required|string",
        "end_date"=>"required|date",
        "status"=>"required|string",
        "goal_details"=>"required|string", 
        "people_involved"=>"required|string","user_id"=>"required"]);
      

        New_Goal::create([
            "new_goal"=>$attrb["new_goal"],
            "inception"=>$attrb["inception"],
            "fund_invested"=>$attrb["fund_invested"],
            "total_fund_required"=>$attrb["total_fund_required"],
            "allocation"=>$attrb["allocation"],
            "end_date"=>$attrb["end_date"],
            "status"=>$attrb["status"],
            "goal_details"=>$attrb["goal_details"],
            "people_involved"=>$attrb["people_involved"],
            "user_id"=>$attrb["user_id"]

        ]);
        return view("thanks_new_goal");

        }
}
