<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    // uso di cast per modificare la data e trasformarla in un formato per usare poi i metodi di Carbon
    protected $casts = ['date' => 'datetime',];
    // use HasFactory;
}
