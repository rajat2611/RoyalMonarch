<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AdminController extends Controller {

    //
    public function __construct() {
        
    }

    public function category() {
        $allCategory = \App\Category::all();
        return view('admin.category.index')->with(['category' => $allCategory]);
    }

    public function addCategory(Request $request) {
        $validator = Validator::make($request->all(), [
                    'title' => 'required',
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->errors())->withInput();
        }
        $model = new \App\Category();
        $model->title = $request->title;
        $model->slug = Str::slug($request->title);
        if ($model->save()) {
            return Redirect::back()->withSuccess('Category successfully addedd');
        }
        return Redirect::back()->withErrors('Opps! something went wrong');
    }

    public function updateCategory(Request $request) {
        $model = \App\Category::find($request->get('id'));
        $model->title = $request->title;
        if ($model->save()) {
            return Redirect::back()->withSuccess('Category successfully updated');
        }
        return Redirect::back()->withErrors('Opps! something went wrong');
    }

    public function deleteCategory(Request $request) {
        $id = $request->get('id');
        $user = \App\Category::find($id);
        if ($user->delete()) {
            return Response(['status' => 200, 'msg' => 'Category successfully deleted']);
        }
        return Response(['status' => 400, 'msg' => 'Opps! Something went wrong.try again']);
    }

    public function index() {
        return view('admin.home');
    }

    public function blogs() {
        $blog = \App\Blog::select('blogs.*', 'categories.title as category_title')
                ->join('categories', 'blogs.category', '=', 'categories.id')
                ->get();
        return view('admin.blogs.index')->with(['blogs' => $blog]);
    }

    public function blogAdd() {
        $allCategory = \App\Category::all();
        return view('admin.blogs.add')->with(['category' => $allCategory]);
    }

    public function blogPost(Request $request) {
        $validator = Validator::make($request->all(), [
                    'title' => 'required',
                    'image' => 'required',
                    'description' => 'required',
                    'category' => 'required'
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->errors())->withInput();
        }
        $image = $request->file('image')->store('blogs', 'public');
        $request->merge([
            'imagefile' => $image
        ]);
        $blogModel = \App\Blog::saveData($request);
        if ($blogModel) {
            return Redirect::to('admin/blogs')->withSuccess('Blog successfully added');
        }
        return Redirect::back()->withSuccess('Opps! something went wrong');
    }

    public function blogEdit(\App\Blog $blog) {
        $allCategory = \App\Category::all();
        return view('admin.blogs.edit')->with(['data' => $blog, 'category' => $allCategory]);
    }

    public function blogUpdate(Request $request) {
        $validator = Validator::make($request->all(), [
                    'title' => 'required',
                    'blog_id' => 'required',
                    'description' => 'required',
                    'category' => 'required'
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->errors())->withInput();
        }

        $model = \App\Blog::find($request->blog_id);
        if ($model) {
            if ($model->image && $request->hasFile('image')) {
                $url = storage_path("app/public/" . $model->image);
                if (File::exists($url)) {
                    File::delete($url);
                }
            }
            if ($request->hasFile('image')) {
                $image = $request->file('image')->store('blogs', 'public');
                $model->image = $image;
            }

            $model->title = $request->title;

            $model->resume = $request->description;
            $model->category = $request->category;
            if ($model->save()) {
                return Redirect::to('admin/blogs')->withSuccess('Blog successfully updated');
            }
        }
    }

    public function deleteBlog(Request $request) {
        $id = $request->get('blog_id');
        $user = \App\Blog::find($id);
        if ($user->delete()) {
            return Redirect::back()->withSuccess('Blog successfully deleted');
        }
    }

    public function changeStatus(Request $request) {
        $model = \App\Blog::find($request->get('blog_id'));
        if ($model->status == 1) {
            $model->status = false;
        } else {
            $model->status = true;
        }
        if ($model->save()) {
            return Response(['status' => 200, 'msg' => 'Status changed successfully']);
        }
        return Response(['status' => 400, 'error' => 'Opps! Something went wrong.try again']);
    }

    public function changeCateStatus(Request $request) {
        $model = \App\Category::find($request->get('id'));
        if ($model->status == 1) {
            $model->status = false;
        } else {
            $model->status = true;
        }
        if ($model->save()) {
            return Response(['status' => 200, 'msg' => 'Status changed successfully']);
        }
        return Response(['status' => 400, 'error' => 'Opps! Something went wrong.try again']);
    }

    public function teams() {
        $allTeams = \App\Team::all();
        return view('admin.team.index')->with(['data' => $allTeams]);
    }

    public function teamAdd() {
        return view('admin.team.add');
    }

    public function teamPostAdd(Request $request) {
        $validator = Validator::make($request->all(), [
                    'name' => 'required',
                    'designation' => 'required',
                    'image' => 'required',
                    'cover_image' => 'required',
                    'profile_image' => 'required',
                    'address' => 'required',
                    'bio' => 'required',
                    'personal_info' => 'required',
                    'facebook' => 'required',
                    'twitter' => 'required',
                    'instagram' => 'required',
                    'skype' => 'required',
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->errors())->withInput();
        }
        $model = new \App\Team();
        $image = $request->file('image')->store('team', 'public');
        $model->image = $image;

        $profile_image = $request->file('profile_image')->store('team', 'public');
        $model->profile_image = $profile_image;

        $cover_image = $request->file('cover_image')->store('team', 'public');
        $model->cover_image = $cover_image;

        $model->name = $request->get('name');
        $model->designation = $request->get('designation');
        $model->address = $request->get('address');
        $model->bio = $request->get('bio');
        $model->personal_info = $request->get('personal_info');
        $model->facebook = $request->get('facebook');
        $model->twitter = $request->get('twitter');
        $model->instagram = $request->get('instagram');
        $model->skype = $request->get('skype');
        $model->status = true;
        if ($model->save()) {
            return Redirect::to("/admin/teams")->withSuccess('Team successfully addedd');
        }
        return Redirect::back()->withErrors('Opps! Something went wrong.')->withInput();
    }

    public function teamEdit(\App\Team $team) {
        return view('admin.team.edit')->with(['data' => $team]);
    }

    public function teamUpdate(Request $request) {
        $validator = Validator::make($request->all(), [
                    'team_id' => 'required',
                    'name' => 'required',
                    'designation' => 'required',
                    'address' => 'required',
                    'bio' => 'required',
                    'personal_info' => 'required',
                    'facebook' => 'required',
                    'twitter' => 'required',
                    'instagram' => 'required',
                    'skype' => 'required',
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->errors())->withInput();
        }
        $model = \App\Team::find($request->get('team_id'));
        if ($model->image && $request->hasFile('image')) {
            $url = storage_path("app/public/" . $model->image);
            if (File::exists($url)) {
                File::delete($url);
            }
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('team', 'public');
            $model->image = $image;
        }

        if ($model->profile_image && $request->hasFile('profile_image')) {
            $url = storage_path("app/public/" . $model->profile_image);
            if (File::exists($url)) {
                File::delete($url);
            }
        }
        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image')->store('team', 'public');
            $model->profile_image = $image;
        }

        if ($model->cover_image && $request->hasFile('cover_image')) {
            $url = storage_path("app/public/" . $model->cover_image);
            if (File::exists($url)) {
                File::delete($url);
            }
        }
        if ($request->hasFile('cover_image')) {
            $image = $request->file('cover_image')->store('team', 'public');
            $model->cover_image = $image;
        }

        $model->name = $request->get('name');
        $model->designation = $request->get('designation');
        $model->address = $request->get('address');
        $model->bio = $request->get('bio');
        $model->personal_info = $request->get('personal_info');
        $model->facebook = $request->get('facebook');
        $model->twitter = $request->get('twitter');
        $model->instagram = $request->get('instagram');
        $model->skype = $request->get('skype');
        if ($model->save()) {
            return Redirect::to("/admin/teams")->withSuccess('Team successfully updated');
        }
        return Redirect::back()->withErrors('Opps! Something went wrong.')->withInput();
    }

    public function teamStatus(Request $request) {
        $model = \App\Team::find($request->get('id'));
        if ($model->status == 1) {
            $model->status = false;
        } else {
            $model->status = true;
        }
        if ($model->save()) {
            return Response(['status' => 200, 'msg' => 'Status changed successfully']);
        }
        return Response(['status' => 400, 'error' => 'Opps! Something went wrong.try again']);
    }

    public function teamDelete(Request $request) {
        $id = $request->get('id');
        $user = \App\Team::find($id);
        if ($user->delete()) {
            return Response(['status' => 200, 'msg' => 'Team deleted successfully']);
        }
    }

    public function careers() {
        $careers = \App\Careers::all();
        return view('admin.career.index')->with(['data' => $careers]);
    }

    public function careerAdd(\App\Careers $career) {
        return view('admin.career.add');
    }

    public function careerPost(Request $request) {
        $validator = Validator::make($request->all(), [
                    'title' => 'required',
                    'time' => 'required',
                    'place' => 'required',
                    'about_role' => 'required',
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->errors())->withInput();
        }
        $model = new \App\Careers();
        $model->title = $request->title;
        $model->time = $request->time;
        $model->place = $request->place;
        $model->about_role = $request->about_role;
        $model->status = $request->status;
        if ($model->save()) {
            return Redirect::to('admin/career')->withSuccess('Career successfully addedd');
        }
        return Redirect::back()->withErrors('Opps! Something went wrong');
    }

    public function editCareer(\App\Careers $career) {
        return view('admin.career.edit')->with(['data' => $career]);
    }

    public function careerUpdate(Request $request) {
        $validator = Validator::make($request->all(), [
                    'id' => 'required',
                    'title' => 'required',
                    'time' => 'required',
                    'place' => 'required',
                    'about_role' => 'required',
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->errors())->withInput();
        }
        $model = \App\Careers::find($request->get('id'));
        $model->title = $request->title;
        $model->time = $request->time;
        $model->place = $request->place;
        $model->about_role = $request->about_role;
        $model->status = $request->status;
        if ($model->save()) {
            return Redirect::to('admin/career')->withSuccess('Career successfully updated');
        }
        return Redirect::back()->withErrors('Opps! Something went wrong');
    }

    public function careerStatus(Request $request) {
        $model = \App\Careers::find($request->get('id'));
        if ($model->status == 1) {
            $model->status = false;
        } else {
            $model->status = true;
        }
        if ($model->save()) {
            return Response(['status' => 200, 'msg' => 'Status changed successfully']);
        }
        return Response(['status' => 400, 'error' => 'Opps! Something went wrong.try again']);
    }

    public function careerDelete(Request $request) {
        $id = $request->get('id');
        $user = \App\Careers::find($id);
        if ($user->delete()) {
            return Response(['status' => 200, 'msg' => 'Career deleted successfully']);
        }
    }

    public function careerApplied() {
        $data = \App\ApplyCareer::select('apply_career.*', 'careers.title as career_title')
                ->join('careers', 'careers.id', '=', 'apply_career.career_id')
                ->get();
        return view('admin.career.applied')->with(['data' => $data]);
    }

    public function viewApplyCareer($id) {
        $data = \App\ApplyCareer::select('apply_career.*', 'careers.title as career_title')
                ->join('careers', 'careers.id', '=', 'apply_career.career_id')
                ->where('apply_career.id', $id)
                ->first();
        return view('admin.career.view-applied-job')->with(['data' => $data]);
    }

}
