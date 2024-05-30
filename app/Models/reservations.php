<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class reservations extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'product_name',
        'message',
    ];
}
