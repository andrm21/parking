<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingA extends Model
{
    use HasFactory;
    protected $fillable = [
         'number_of_hours', 'parking_spaces_avaliable',
    ];

}


