<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $attributes = [
        'status' => 0,
    ];
    protected $fillable =['title','content','status'];
}
