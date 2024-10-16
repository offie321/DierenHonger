<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiloWeight extends Model
{
    use HasFactory;
    protected $table = 'silo_weights';
    protected $fillable = [
        'weight',
    ];
}
