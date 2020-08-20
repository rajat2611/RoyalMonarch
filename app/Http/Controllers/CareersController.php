<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Careers;

class CareersController extends Controller
{
    //
    public function index(){
        $careers = Careers::all();
        return view("pages.career",compact("careers"));

    }

    public function show($id){
        $career = Careers::find($id);
        return view("pages.career_1",compact("career"));

    }
}
