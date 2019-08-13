<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
      'title',
      'info',
      'price',
      'image',
    ];
    public function store()
    {
      return $this->belongsTo('App\Store');
    }
}
