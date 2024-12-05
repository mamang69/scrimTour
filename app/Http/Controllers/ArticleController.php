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
        $articles = Article::paginate(6);
        return view('articles.article', compact('articles'));
    }
    public function indexApi()
    {
        $articles = Article::all(); // Ambil semua artikel
        return response()->json([
            'success' => true,
            'data' => $articles
        ]);
    }


    public function show($id)
    {
        $article = Article::findOrFail($id);
        // $article->tanggal = \Carbon\Carbon::parse($article->tanggal)->format('d/m/Y, H:i');
        return view('articles.detailArticle', compact('article'));
    }
    public function showApi($id)
    {
        $article = Article::find($id);

        if (!$article) {
            return response()->json([
                'success' => false,
                'message' => 'Article not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $article
        ]);
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
