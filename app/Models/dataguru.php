<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataguru extends Model
{
    use HasFactory;
    protected $fillable = [
        'NIDN',
        'nama',
        'jeniskelamin',
        'notlpn',
    ];
}
