<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vacancy extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'photo',
        'description',
        'expiration_at',
    ];
    public function ankets(): HasMany
    {
        return $this->hasMany(Anket::class, 'vacancy_id');
    }
}
