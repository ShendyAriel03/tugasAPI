<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    use HasFactory;

    protected $fillable = [
        "nama_rak",
        "lokasi_rak",
        "nomor_rak",
        "buku_id"
    ];
}
