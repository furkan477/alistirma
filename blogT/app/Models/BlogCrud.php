<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCrud extends Model
{
    use HasFactory;
    protected $table = 'blog_cruds';
    protected $fillable = ['blog_name','blog_explanation','blog_type'];
}
