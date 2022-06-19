<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = ['created_at','content'];

    public static $rules = array(
        'created_at' => 'date|nullable',
        'content' => 'required|max:20'
    );
}
