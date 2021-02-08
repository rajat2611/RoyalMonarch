<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use DB;

class BlogController extends Controller {

    //
    public function index(Request $request) {
        $search = $request->search;
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
        // $blogs = \DB::table("blogs")
        //         ->select("blogs.*", "author.first_name", "author.last_name", "author.image as author_image", \DB::raw("GROUP_CONCAT(categories.title) as category"))
        //         ->leftjoin("categories", \DB::raw("FIND_IN_SET(categories.id,blogs.category)"), ">", \DB::raw("'0'"))
        //         ->join("author", 'blogs.author_id', '=', 'author.id')
        //         ->where('blogs.status', 1)
        //         // ->groupBy("blogs.id")
        //         ->get();
        return view("pages.blog", compact("blogs"));
    }

    public function show($id) {
        $blog = Blog::select('blogs.*', 'author.first_name', 'author.last_name', 'author.image as author_image')
                ->join('author', 'blogs.author_id', '=', 'author.id')
                ->where('blogs.id', $id)
                ->first();
        $rec_blogs = Blog::orderBy('id', 'desc')
                ->take(5)
                ->get();
        return view("pages.single-blog", compact("blog", "rec_blogs"));
    }

    public function show_2($item) {
        $blogs = Blog::where("category", $item)->get();
        return view("pages.blog", compact("blogs"));
    }

}
