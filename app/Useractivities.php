<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Useractivities extends Model
{
    public $table = "useractivities";
    protected $fillable = ['userID', 'activityID'];

    

    public function users(){
      return $this->belongsTo('App\User','userID','id');
    }
}