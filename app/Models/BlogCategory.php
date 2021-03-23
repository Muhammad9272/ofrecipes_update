<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $fillable = ['name','slug'];
    public $timestamps = false;


    public function blogs()
    {
    	return $this->hasMany('App\Models\Article','category_id');
    }
}
