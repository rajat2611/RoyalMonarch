<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    //
    protected $guarded =[]; 

    public static function saveData($request){
        $model=new Blog();
        $model->title=$request->title;
        $model->image=$request->imagefile;
        $model->resume=$request->description;        
        $model->category=$request->category;        
        $model->slug= Str::slug($request->title);
        return $model->save();
    }
   
}
