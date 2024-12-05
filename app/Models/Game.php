<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'deskripsi', 'genre', 'jenis', 'foto', 'icon'];

    public function jadwals()
    {
        return $this->hasMany(Jadwal::class); // Game memiliki banyak jadwal
    }
}
