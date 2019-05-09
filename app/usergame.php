<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usergame extends Model
{
  public $table = "usergame";
  protected $fillable = ['typeGamer', 'userID', 'gameID', 'teamname'];
  
  public function game(){
    return $this->belongsTo('App\Game','gameID','id');
  }

  public function user(){
    return $this->belongsTo('App\User','userID', 'id');
  }
}
