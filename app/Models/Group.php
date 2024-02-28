<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Group extends Model
{
    protected $table='groups';
    use HasFactory;

    protected $casts = [
        'name' => 'string',
        'description'=>'string',

    ];
}
