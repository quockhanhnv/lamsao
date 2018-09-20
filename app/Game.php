<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';
    public $fillable = ['name', 'price', 'description', 'slug', 'cate_id'];
    
}