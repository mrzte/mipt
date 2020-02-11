<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class provinsi extends Model
{

  protected $fillable = [
      'provinsi',
  ];


  public function users()
  {
    return $this->belongsToMany('App\User');
  }
}
