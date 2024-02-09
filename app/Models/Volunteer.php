<?php

namespace App\Models;

use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'pdfCV',
        'status',
        'type',
        'name',
    ];

    protected $casts = [
        'status' => StatusEnum::class,
    ];

}
