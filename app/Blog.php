<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model {

    //
    protected $guarded = [];

    public static function saveData($request) {
        $category=implode(",",$request->category);
        $model = new Blog();
        $model->title = $request->title;
        $model->image = $request->imagefile;
        $model->resume = $request->description;
        $model->category = $category;
        $model->author_id = $request->author;
        $model->published_date= $request->published_date;
        $model->slug = Str::slug($request->title);
        return $model->save();
    }

}
