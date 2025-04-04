<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    use HasFactory;
    protected $table = 'keuangan'; // Pastikan ini sesuai dengan nama tabel
    protected $fillable = ['keterangan', 'jenis', 'jumlah'];
}

