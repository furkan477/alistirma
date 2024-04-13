<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogcrud extends Model
{
    use HasFactory;
    protected $table = 'blogcrud';
    protected $fillable = ["blog_name","blog_explanation","blog_type"];
}
