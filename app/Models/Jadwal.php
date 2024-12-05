<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'hadiah', 'pemain', 'tanggal', 'biaya', 'lokasi', 'game_id'];

    public function game()
    {
        return $this->belongsTo(Game::class); // Jadwal terkait dengan satu game
    }
}
