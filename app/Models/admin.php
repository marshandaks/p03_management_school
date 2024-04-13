<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;

    protected $table = 'admin';

    protected $fillable = [
        'name',
        'password',
    ];

    // Jika Anda ingin menyembunyikan kolom password dari kueri yang dihasilkan, Anda dapat menambahkan ini
    protected $hidden = [
        'password',
    ];
}
