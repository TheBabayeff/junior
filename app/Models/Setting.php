<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
      'main_logo',
      'main_logoWhite',
      'main_firstPhone',
      'main_secondPhone',
      'main_addressFirst',
      'main_addressSecond',

      'welcome_greenText',
      'welcome_mainText',
      'welcome_descriptionText',

      'about_firstPhoto',
      'about_firstVideo',

      'about_secondPhoto',
      'about_secondVideo',

    ];
}
