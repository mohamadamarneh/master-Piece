<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
    protected $fillable=[
        'costumer_id',
        'product_id',
        'date',
        'time',
        'trainer',
        'wears',
        'trainer_A',
        'wears_A'
        
    ];


}
