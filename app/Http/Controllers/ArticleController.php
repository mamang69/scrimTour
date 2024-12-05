<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class ArticleController extends Controller
{
    // Menampilkan semua data article
    public function index()
    {
        $articles = Article::paginate(6); // Pastikan artikel sudah diambil
        // Log::info('Fetched articles:', ['articles' => $articles]); // Debug log data
        // dd($articles);
        // return response()->json([
        //     'message' => $articles,
        // ], 201);
        return view('articles.article', compact('articles'));
    }


    public function show($id)
    {
        try {
            // Cari artikel berdasarkan ID
            $article = Article::findOrFail($id); // Mendapatkan artikel berdasarkan id

            // Menggunakan Carbon untuk memformat tanggal tanpa detik
            $article->tanggal = \Carbon\Carbon::parse($article->tanggal)->format('d/m/Y, H:i'); // Format DD/MM/YYYY, HH:MM

            return view('articles.detailArticle', compact('article'));
        } catch (\Exception $e) {
            // Jika artikel tidak ditemukan, kembalikan halaman error atau redirect
            return abort(404, 'Artikel tidak ditemukan');
        }
    }


    // Menambah data baru ke tabel article
    public function store(Request $request)
    {
        try {
            // Validasi input
            $validatedData = $request->validate([
                'judul' => 'required|string|max:255',
                'tanggal' => 'required|date_format:d/m/Y H:i',
                'foto' => 'required|string|max:255',
                'deskripsi' => 'required|string',
                'intro' => 'required|string|max:255',
            ]);

            // Transformasi data tanggal
            $validatedData['tanggal'] = Carbon::createFromFormat('d/m/Y H:i', $validatedData['tanggal'])->format('Y-m-d H:i:s');

            // Simpan data ke database
            $article = Article::create($validatedData);

            // Response JSON untuk API
            return response()->json([
                'message' => 'Article created successfully',
                'article' => $article,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while creating the article',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
