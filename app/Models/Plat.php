<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    use HasFactory;

    protected $table = 'post_plats';

    protected $fillable = [
      'name',
      'price',
      'image',
      'description'
    ];

}