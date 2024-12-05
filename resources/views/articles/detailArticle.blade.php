@extends('layouts.main')

@section('container')
@section('heroimage')
<div class="min-h-full bg-black">
    <main>
        {{-- {{dd($article->tanggal)}} --}}
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-2">
            <div class="">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <h3 class="text-white"><span><a href="/">Beranda</a></span> > <span><a href="/article"> Artikel </a></span> > {{$article->judul}}</h3>
                    <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-10">
                        <h2 class="text-2xl font-bold text-red-700">Detail Artikel</h2>
                        <div class="group relative">
                            <!-- Menampilkan judul artikel dinamis -->
                            <h1 class="mt-4 text-2xl font-bold text-white line-clamp-2">
                                {{ $article->judul }}
                            </h1>
                            <h3 class="mt-4 text-sm font-bold text-white line-clamp-2">
                                {{\Carbon\Carbon::parse($article->tanggal)->format('d/m/Y, H:i') }} WIB
                            </h3>

                            <!-- Menampilkan gambar artikel (gunakan gambar dinamis jika ada URL gambar di database) -->
                            <div class="relative h-80 lg:w-1/2 text-center mx-auto overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:mt-4 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-80">
                                <img src="https://tailwindui.com/plus/img/ecommerce-images/home-page-02-edition-01.jpg"
                                    alt="{{ $article->judul }}" 
                                    class="size-full object-cover object-center">
                            </div>

                            <!-- Menampilkan isi artikel -->
                            <h3 class="mt-6 text-sm text-white text-justify leading-6">
                                {{ $article->deskripsi }}
                            </h3>
                        </div> 
                    </div>                        
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
@endsection
