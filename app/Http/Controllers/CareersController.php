<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Careers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;

class CareersController extends Controller {

    //
    public function index() {
        $careers = Careers::all();
        return view("pages.career", compact("careers"));
    }

    public function show($id) {
        $career = Careers::find($id);
        return view("pages.career_1", compact("career"));
    }

    public function apply($id) {
        $career = Careers::find($id);
        return view('pages.career-apply')->with(['career' => $career]);
    }

    public function applyJob(Request $request) {
        $validator = Validator::make($request->all(), [
                    'name' => 'required',
                    'email' => 'required',
                    'mobile' => 'required',
                    'address' => 'required',
                    'resume' => 'required',
                    'school' => 'required',
                    'qualification' => 'required',
                    'is_first_job' => 'required',
                    'career_id' => 'required'
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->errors())->withInput();
        }
        $is_first_job = true;
        $current_job = true;
        if ($request->get('is_first_job') == "2") {
            $validator1 = Validator::make($request->all(), [
                        'emp_name' => 'required',
                        'job_title' => 'required',
                        'start_date' => 'required',
            ]);
            if ($validator1->fails()) {
                return Redirect::back()->withErrors($validator1->errors())->withInput();
            }
            $is_first_job = false;
        }
        if ($request->get('last_job') == "1") {
            $validator2 = Validator::make($request->all(), [
                        'end_date' => 'required',
            ]);
            if ($validator2->fails()) {
                return Redirect::back()->withErrors($validator2->errors())->withInput();
            }
            $current_job = false;
        }
        $image = $request->file('resume')->store('careers_applied', 'public');
        $apply = \App\ApplyCareer::create([
                    'career_id' => $request->get('career_id'),
                    'name' => $request->get('name'),
                    'resume' => $image,
                    'email' => $request->get('email'),
                    'mobile' => $request->get('mobile'),
                    'address' => $request->get('address'),
                    'school' => $request->get('school'),
                    'qualification' => $request->get('qualification'),
                    'is_first_job' => $is_first_job,
                    'emp_name' => $request->get('emp_name'),
                    'job_title' => $request->get('job_title'),
                    'start_date' => $request->get('start_date'),
                    'current_job' => $current_job,
                    'end_date' => $request->get('end_date')
        ]);
        if ($apply->save()) {
            return Redirect::to('apply-thanks/' . $request->name);
        }
        return Redirect::back()->withErrors('Opps! Something went wrong');
    }

    public function applyThanks($name) {
        return view('apply-thanks')->with(['name' => $name]);
    }

    public function teamDetails(\App\Team $team) {
        return view('pages.team_1')->with(['data' => $team]);
    }

}
