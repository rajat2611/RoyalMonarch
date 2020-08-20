<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class New_Goal extends Model
{
    //
    protected $dates = ['inception' , 'end_date'];
    protected $guarded =[]; 
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
