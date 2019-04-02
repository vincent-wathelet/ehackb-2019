<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function activities(){
      return $this->belongsToMany('App\Activity','userActivities','userID','activityID');
    }

    public function options(){
      return $this->belongsToMany('App\Option','userOptions','userID','optionID');
    }

    public function team(){
      // return $this->belongsTo('App\Team','teamUsers','teamID','userID');
      return $this->belongsToMany('App\Team','teamUsers','userID','teamID');
    }

    public function isAdmin(){
        if ($this->isAdmin === 1) {
            return true;
        }
        return false;
    }

    public function isPrinter(){
        if ($this->isPrinter === 1) {
            return true;
        }
        return false;
    }

    public function isStatisticsViewer(){
        if ($this->isStatisticsViewer === 1) {
            return true;
        }
        return false;
    }
}
