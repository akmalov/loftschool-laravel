<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name', 'slug'
    ];
    protected $hidden = [
        'id', 'created_at', 'updated_at'
    ];

    public function userRole()
    {
        return $this->hasMany('App\User', 'slug', 'role_id');
    }
}
