<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ucapan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'ucapan',
        'created_at'
    ];
    protected $hidden;
    
}
