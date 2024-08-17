<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppleProduct extends Model
{
    use HasFactory;

    protected $table = 'apple_products';
    protected $guarded = [];
}
