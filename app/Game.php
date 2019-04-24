<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
  public function teams(){
    return $this->hasMany('App\Team','gameID');
  }
  
  public function game(){

    return $this->belongsTo('App\usergame','gameID','id');

}

  public function isFull(){
      $max = $this->maxTeams;
      $now = $this->teams()->count();
      return $now>=$max;
  }
}
