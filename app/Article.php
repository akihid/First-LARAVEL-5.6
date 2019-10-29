<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public function scopePublished($query){
      $query->where('published_at', '<=', Carbon::now());
    }
    protected $fillable = ['title', 'body', 'published_at'];

    protected $dates = [
      'published_at',
      'created_at',
      'updated_at',
      'deleted_at',
  ];
}
