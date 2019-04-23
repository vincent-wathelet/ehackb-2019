<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usergame extends Model
{
  public $table = "usergame";
  public $timestamps = false;
  public function game(){
    return $this->belongsTo('App\Game','gameID');
  }

  public function user(){
    return $this->belongsTo('App\User','userID');
  }
}
