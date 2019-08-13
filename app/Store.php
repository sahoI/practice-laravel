<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// nameをuniqueにする

class Store extends Model
{
  protected $fillable = [
    'name',
  ];
  public function items()
  {
    return $this->hasMany('App\Item');
  }
}
