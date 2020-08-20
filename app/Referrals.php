<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referrals extends Model
{
    //
    protected $guarded =[]; 

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
