<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reports;

class ReportsController extends Controller
{
    //
    public function index(){
        return view('dashboard.tradebook');
        }

    public function index_1(){
        return view('dashboard.p&l');
            }

    public function index_2(){
            return view('dashboard.tax&pl');
                }


    public function Store()
                {
                    $attrb=request()->validate(["user_id"=>"required"]);
                  
            
                    Reports::create([
                        "user_id"=>$attrb["user_id"]]);
            
                    return view("thanks_file_return");
            
                    }

}
