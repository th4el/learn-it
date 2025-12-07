<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Grade extends Model
{
    protected $table = 'grades';

    protected $fillable = [
        'name',
    ];

    public function students(): HasMany
    {
        return $this->hasMany(User::class, 'grade_id');
    }

    public function materials(): HasMany
    {
        return $this->hasMany(Material::class);
    }
}
