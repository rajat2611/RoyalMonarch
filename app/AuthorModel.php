<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuthorModel extends Model {

    public $table = "author";
    protected $guarded = ['id'];

}
