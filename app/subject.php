<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    protected $guarded=[];

    public function user(){
        return $this->belongsTo('App\User');
      }
      public function branch(){
          return $this->belongsTo('App\branch');
      }
      public function semester(){
          return $this->belongsTo('App\semester');
      }
      public function subject(){
          return $this->belongsTo('App\subject');
      }
      public function upload(){
          return $this->hasMany('App\upload');
      }
}
