@extends('layouts.main')
@section('container')
@section('heroimage')
<div class="min-h-full">
    <main>
        <div class="lg:h-104 h-48 overflow-visible" style="background-image: url('{{ asset('images/bg_beranda.jpg') }}'); background-size: cover; background-position: center;">
            <h3 class="mx-auto max-w-7xl pt-8 px-6 text-white"><span><a href="/">Beranda</a></span> > <span><a href="/game"> Game </a></span></h3>
            <div class="relative w-full overflow-visible sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-36 flex justify-center items-center">
                <!-- Search Form -->
                <form method="GET" action="{{ route('games.index') }}" class="lg:mt-4 mt-10 w-full lg:max-w-4xl max-w-xl">
                    <div class="flex items-center w-full justify-center">
                        <input type="text" name="search" value="{{ request()->get('search') }}" 
                            class="bg-black bg-opacity-30 text-white border border-blue-1 focus:outline-none rounded-l-lg p-2 w-2/5 sm:w-3/5 md:w-3/5 lg:w-full"
                            placeholder="Masukan Nama game">
                        <button type="submit" class="bg-blue-1 text-black font-bold text-xl px-8 py-2 rounded-r-lg">Cari</button>
                    </div>
                </form>  
            </div>
        </div>    
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-2">
            <div class="">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-10">
                        <h2 class="text-2xl font-bold text-blue-1">Daftar Game</h2>
                        <form method="GET" action="{{ route('games.index') }}">
                        <div class="mt-6 grid grid-cols-2 lg:grid lg:grid-rows-6 lg:grid-cols-8 gap-4">
                          <div class="lg:row-span-5 lg:col-span-2 col-span-2 border-2 border-blue-1 rounded-xl p-10 drop-shadow-lg">
                            <div class="font-semibold text-lg text-white">
                              Filter
                            </div>
                            <hr class="my-4 border-t-2 border-gray-100">
                            <div class="mt-4">
                              
                              <!-- Genre Filter -->
                              <div class="mb-4">
                                <div class="font-semibold text-sm text-white">Genre</div>
                                <div class="flex flex-col space-y-2 mt-2 text-white">
                                  @foreach($genres as $genre)
                                      <label class="flex items-center">
                                          <input type="checkbox" name="genre[]" value="{{ $genre->genre }}" 
                                              class="mr-2 rounded-md bg-transparent border-2 focus:ring-transparent focus:bg-transparent focus:border-transparent checked:border-blue-1 checked:bg-transparent focus:outline-none hover:border-blue-1 checked:hover:bg-blue-1 checked:hover:border-blue-1">
                                          {{ $genre->genre }}
                                      </label>
                                  @endforeach
                                </div>
                              </div>
                            <!-- Garis Pemisah -->
                              <hr class="my-4 border-t border-gray-300">
                            <!-- Jenis Filter -->
                            <div>
                              <div class="font-semibold text-sm text-white">Jenis</div>
                              <div class="flex flex-col space-y-2 mt-2 text-white">
                                @foreach($jenisOptions as $jenis)
                                    <label class="flex items-center">
                                        <input type="checkbox" name="jenis[]" value="{{ $jenis->jenis }}" 
                                            class="mr-2 rounded-md bg-transparent border-2 focus:ring-transparent focus:bg-transparent focus:border-transparent checked:border-blue-1 checked:bg-transparent focus:outline-none hover:border-blue-1 checked:hover:bg-blue-1 checked:hover:border-blue-1">
                                        {{ $jenis->jenis }}
                                    </label>
                                @endforeach
                              </div>
                              <hr class="my-4 border-t border-gray-300">
                              <div class="font-semibold text-sm text-white">Filter Terpilih:</div>
                                  <div class="mt-4">
                                      <p class="text-white">
                                          <strong>Genre:</strong> 
                                          @if(request()->has('genre'))
                                              {{ implode(', ', request()->get('genre')) }}
                                          @else
                                              -
                                          @endif
                                      </p>
                                      <p class="text-white">
                                          <strong>Jenis:</strong> 
                                          @if(request()->has('jenis'))
                                              {{ implode(', ', request()->get('jenis')) }}
                                          @else
                                              -
                                          @endif
                                      </p>
                                  </div>
                              <div class="mt-4">
                                <button type="submit" class="bg-blue-1 text-black px-4 py-2 rounded">Filter</button>
                              </div>
                            </div>
                            </div>
                          </div>

                          {{-- <div class="lg:col-span-6 col-span-2 lg:mt-0 mt-6rounded-lg p-10 drop-shadow-lg">
                        
                                                   
                          </div> --}}
                        
                        

                          @foreach($games as $game)
                          <div class="lg:col-span-2 lg:row-span-2 border-2 border-blue-1 rounded-lg drop-shadow-lg">
                            <a href="{{ route('games.show', $game->id) }}" class="block">
                              <div class="relative w-full overflow-visible sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-36">
                                  <img src="https://tailwindui.com/plus/img/ecommerce-images/home-page-02-edition-01.jpg"
                                      alt="gambar" 
                                      class="size-full object-cover object-center rounded-t-lg">
                                  <!-- Icon placed below the image inside the container -->
                                  <div class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 border-2 border-blue-1 rounded-full shadow-lg">
                                      <img src="https://tailwindui.com/plus/img/ecommerce-images/home-page-02-edition-01.jpg"
                                          alt="Icon"
                                          class="w-16 h-16 object-cover rounded-full">
                                  </div>
                              </div>
                          
                              <div class="mt-12 font-bold text-lg text-white text-center">
                                  {{$game->nama}}
                              </div>
                            </a>
                          </div>
                          @endforeach

                          <!-- Pagination inside the grid -->
                          <div class="lg:col-span-6 col-span-2 lg:mt-0 mt-6 rounded-lg p-10 drop-shadow-lg">
                            <div class="mt-8 text-right">
                              <nav aria-label="Page navigation example">
                                  <ul class="flex items-center sm:justify-end justify-center space-x-2">
                                      <li>
                                          <a href="{{ $games->previousPageUrl() }}"
                                              class="flex items-center justify-center px-3 h-8 leading-tight blue-1">
                                              <span class="sr-only">Previous</span>
                                              <svg class="w-4 h-4 rtl:rotate-180" aria-hidden="true"
                                                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-width="2" d="M5 1 1 5l4 4" />
                                              </svg>
                                          </a>
                                      </li>
                                      @for ($i = 1; $i <= $games->lastPage(); $i++)
                                          <li>
                                              <a href="{{ $games->url($i) }}"
                                                  class="flex items-center font-bold justify-center px-3 h-8 leading-tight 
                                                  {{ $games->currentPage() == $i ? 'bg-blue-1 text-black rounded-full' : 'blue-1' }}">
                                                  {{ $i }}
                                              </a>
                                          </li>
                                      @endfor
                                      <li>
                                          <a href="{{ $games->nextPageUrl() }}"
                                              class="flex items-center justify-center px-3 h-8 leading-tight blue-1">
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
@endsection
