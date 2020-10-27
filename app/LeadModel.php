<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeadModel extends Model
{
    public $table = "leads";
    protected $guarded = ['id'];
}
