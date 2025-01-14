@extends('layouts.main')

@section('container')
@section('heroimage')
<div class="min-h-full bg-black">
    <main>
        <div class="h-104 overflow-visible" style="background-image: url('{{ asset('images/bg_beranda.jpg') }}'); background-size: cover; background-position: center;">
            <h3 class="mx-auto max-w-7xl pt-8 px-6 text-white"><span><a href="/">Beranda</a></span> > <span><a href="/game"> Game </a></span> > {{$game->nama}}</h3>
            <div class="relative w-full overflow-visible sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-36">
                <div class="absolute mt-64 left-1/2 transform -translate-x-1/2 border-2 border-blue-1 rounded-full shadow-lg">
                    <img src="https://tailwindui.com/plus/img/ecommerce-images/home-page-02-edition-01.jpg"
                        alt="Icon"
                        class="w-48 h-48 object-cover rounded-full">
                </div>
            </div>
        </div>
        
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-2">
            <div class="">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    
                    <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-10">
                        <div class="mt-16 group relative">
                            <!-- Menampilkan judul artikel dinamis -->
                            <h1 class="mt-4 text-2xl font-bold blue-1 ">
                                {{ $game->nama }}
                            </h1>

                            <!-- Menampilkan isi artikel -->
                            <h3 class="mt-6 text-sm text-white text-justify leading-6">
                                {{ $game->deskripsi }}
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
