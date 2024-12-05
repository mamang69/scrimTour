<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'article';

    // Kolom yang dapat diisi langsung melalui mass assignment
    protected $fillable = ['judul', 'tanggal', 'foto', 'deskripsi', 'intro'];

    // Pastikan kolom `tanggal` diperlakukan sebagai instance Carbon
    protected $dates = ['tanggal'];
}
