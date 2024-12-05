@extends('layouts.main')

@section('container')
@section('heroimage')
    <div class="min-h-full bg-black">
        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-2">
                <div class="">
                    <div class="mx-auto max-w-7xl px-4 sm:px-8 lg:px-8">
                        <h3 class="text-white"><span><a href="/">Beranda</a></span> > Artikel</h3>
                        <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-10">
                            <h2 class="text-2xl font-bold text-red-700">Artikel</h2>

                            <div class="mt-6 lg:grid lg:grid-cols-3 lg:gap-14">
                                @foreach ($articles as $article)
                                    <div class="mb-6 border-2 border-red-700 rounded-lg p-4">
                                        <h2 class="text-xl font-bold text-white line-clamp-1">{{ $article->judul }}</h2>
                                        <div class="mt-2 relative mx-auto h-32 sm:w-full w-2/3 overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-56">
                                    <img src="https://tailwindui.com/plus/img/ecommerce-images/home-page-02-edition-01.jpg"
                                        alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                                        class="size-full object-cover object-center"></div>
                                        <p class="mt-4 text-white line-clamp-3">{{ $article->intro }}</p>
                                        <div class="mt-4 text-center">
                                            <a href="{{ route('articles.show', $article->id) }}" class="bg-red-700 text-black font-bold py-2 px-4 rounded">
                                                Lebih Banyak
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Menambahkan Pagination -->
                            <div class="mt-8 text-right">
                                <nav aria-label="Page navigation example">
                                    <ul class="flex items-center sm:justify-end justify-center space-x-2">
                                        <li>
                                            <a href="{{ $articles->previousPageUrl() }}"
                                                class="flex items-center justify-center px-3 h-8 leading-tight text-red-700">
                                                <span class="sr-only">Previous</span>
                                                <svg class="w-4 h-4 rtl:rotate-180" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 1 1 5l4 4" />
                                                </svg>
                                            </a>
                                        </li>
                                        @for ($i = 1; $i <= $articles->lastPage(); $i++)
                                            <li>
                                                <a href="{{ $articles->url($i) }}"
                                                    class="flex items-center font-bold justify-center px-3 h-8 leading-tight 
                                                    {{ $articles->currentPage() == $i ? 'bg-red-700 text-black rounded-full' : 'text-red-700' }}">
                                                    {{ $i }}
                                                </a>
                                            </li>
                                        @endfor
                                        <li>
                                            <a href="{{ $articles->nextPageUrl() }}"
                                                class="flex items-center justify-center px-3 h-8 leading-tight text-red-700">
                                                <span class="sr-only">Next</span>
                                                <svg class="w-4 h-4 rtl:rotate-180" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
@endsection
