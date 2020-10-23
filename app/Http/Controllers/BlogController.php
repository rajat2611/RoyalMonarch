<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;


class BlogController extends Controller
{
    //
    public function index(Request $request){
        $search=$request->search;
        $blogs = Blog::orderBy('id', 'desc')->where('status',1);
        if ($search != null) {
            $blogs->where(function($query) use ($search) {
                $query->where('resume', 'like', '%' . $search . '%')
                        ->orWhere('title', 'like', '%' . $search . '%')
                        ->orWhere('category', 'like', '%' . $search . '%');
            });
        }
//        $blogs=$blogs->paginate(5);
        $blogs=$blogs->get();
        return view("pages.blog",compact("blogs"));
    }

    public function show($id){
        $blog = Blog::find($id);
        $rec_blogs = Blog::orderBy('id', 'desc')
               ->take(5)
               ->get();
        return view("pages.single-blog",compact("blog","rec_blogs"));
    }

    public function show_2($item){
        $blogs = Blog::where("category",$item)->get();       
        return view("pages.blog",compact("blogs"));
    }
}
