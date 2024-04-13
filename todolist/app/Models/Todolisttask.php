<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todolisttask extends Model
{
    use HasFactory;
    protected $table = "todolisttask";
    protected $fillable = ["task_name", "task_explanation" , "task_type","task_start_date","task_end_date","created_at","updated_at"];
}
