<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;

    protected $fillable = [
        'global_to_do_list_id',
        'list_item',
        'updated_by',
    ];
}
