<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Hash;

class User extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'grade_id',
    ];

    public function grade(): HasMany{
        return $this->hasMany(Material::class, 'teacher_id');
    }
}
