<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(Request $request)
    {
        $genre = $request->input('genre');
        $jenis = $request->input('jenis');
        $search = $request->input('search');

        $query = Game::query();

        if ($genre) {
            $query->whereIn('genre', $genre);
        }
        if ($jenis) {
            $query->whereIn('jenis', $jenis);
        }
        if ($search) {
            $query->where('nama', 'like', '%' . $search . '%');
        }

        $games = $query->paginate(6);
        $genres = Game::select('genre')->distinct()->get();
        $jenisOptions = Game::select('jenis')->distinct()->get();

        return view('games.game', compact('games', 'genres', 'jenisOptions'));
    }

    public function indexApi()
    {
        $games = Game::all();
        return response()->json([
            'success' => true,
            'data' => $games
        ]);
    }

    public function show($id)
    {
        $game = Game::findOrFail($id);
        return view('games.detailGame', compact('game'));
    }

    public function store(Request $request)
    {
        try {
            // Validasi input
            $validatedData = $request->validate([
                'nama' => 'required|string|max:255',
                'deskripsi' => 'required|string',
                'genre' => 'required|string|max:255',
                'jenis' => 'required|string|max:255',
                'foto' => 'required|string|max:255',
                'icon' => 'required|string|max:255',
            ]);

            // Simpan data ke database
            $game = Game::create($validatedData);

            // Response JSON untuk API
            return response()->json([
                'message' => 'Game created successfully',
                'game' => $game,
            ], 201);
        } catch (\Exception $e) {
            // Menangani error dan memberikan respon
            return response()->json([
                'message' => 'An error occurred while creating the game',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
