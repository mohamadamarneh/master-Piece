<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'picture',
        'picture_two',
        'picture_three',
        'picture_four',
        'picture_five',
        'categorises_id',
        'gategury',
        'address'

    ];
}
