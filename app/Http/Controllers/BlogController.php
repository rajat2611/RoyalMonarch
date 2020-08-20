<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;


class BlogController extends Controller
{
    //
    public function index(){
        $blogs = Blog::orderBy('id', 'desc')->paginate(5);
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
        $blogs = Blog::where("category",$item)->paginate(5);
       
        return view("pages.blog",compact("blogs"));
    }
}
