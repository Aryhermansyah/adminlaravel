<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // Nama tabel jika berbeda dari penamaan standar Laravel (clients)
    // protected $table = 'nama_tabel_clients';

    // Kolom yang boleh diisi secara massal (mass assignable)
    // protected $fillable = ['name', 'email', 'kolom_lain'];

    // Kolom yang disembunyikan saat di-serialize ke JSON/array
    // protected $hidden = ['password', 'remember_token'];

    // Kolom yang perlu di-cast ke tipe data tertentu
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
} 