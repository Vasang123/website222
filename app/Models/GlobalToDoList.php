<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalToDoList extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'deadline',
        'description',
    ];
}
