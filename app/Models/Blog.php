<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';

    public function blogCategory(){

        return $this->belongsTo(BlogCategory::class,'category_id');
    }
}
