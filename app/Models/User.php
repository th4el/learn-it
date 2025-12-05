<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'grade_id',
    ];

    public function grade(): BelongsTo{
        return $this->belongsTo(Grade::class);
    }

    public function materials(): HasMany{
        return $this->hasMany(Material::class, 'teacher_id');
    }
}
