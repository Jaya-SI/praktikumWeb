<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penggajian extends Model
{
    use HasFactory;
    protected $table = 'penggajian';
    protected $fillable = [
        'tahun',
        'gapok',
        'tunjangan',
        'uang_makan',
    ];
}
