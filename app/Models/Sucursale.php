<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursale extends Model
{
    use HasFactory;


    const STATUS_ACTIVE= 1;
    const STATUS_MANTENIMIENTO = 2;
    const STATUS_DELETE = 3;
}