<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class AssoGroupUser extends Model
{
    //definir les tables pour pas avoir de pb
    protected $table='asso_groups_users';
    use HasFactory;


    protected $casts=[
        'Resp_Group'=>'boolean'
    ];

    public function groups(): BelongsToMany
    {
        return $this->belongsToMany(Group::class);
    }
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
