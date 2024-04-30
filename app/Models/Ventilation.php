<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventilation extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'debit1',
        'debit2',
    ];
}
