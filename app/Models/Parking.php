<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    use HasFactory;

    protected $fillable = [
        'rows', 'columns', 'user_id',
    ];

    protected $casts = [
        'expiration' => 'date',
    ];
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
