<!DOCTYPE html>
<html lang="en">
</html>
@extends('layouts.main')
@section('container')
@section('heroimage')
<div class="min-h-full">
    
    <main>
        <div class="bg-gray-400 h-96">
          <h3 class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8"><span><a href="/">Beranda</a></span> > Jadwal Tournament</h3>
        </div>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="bg-gray-100">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    
                    <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-10">
                      <div class="grid grid-rows-3 grid-cols-4 gap-4">
                        <div class="row-span-3 col-span-1 bg-gray-500 rounded-lg p-10 drop-shadow-lg flex items-center justify-center">
                          Calender
                        </div>                        
                        <div class="col-span-3 bg-gray-500 rounded-lg p-10 drop-shadow-lg">Search</div>
                        <div class="row-span-2 col-span-3 ">
                          <div class="grid grid-cols-2">
                            <h1 class="text-bold">Jadwal Turnament</h1>
                            <div class="text-right">
                              <div class="inline-block bg-gray-500 text-white text-xs px-1 py-1">
                                Terbaru
                              </div>
                            </div>
                          </div>

                          <div class="grid grid-cols-6 mt-4">
                            <!-- Tanggal -->
                            <div class="col-span-1 bg-gray-400 drop-shadow-lg h-24 flex items-center justify-center">
                              Tanggal
                            </div>
                          
                            <!-- Konten lainnya -->
                            <div class="col-span-5 bg-white drop-shadow-lg h-24 px-2 flex flex-col justify-center space-y-1">
                              <h1 class="font-bold">Judul</h1>
                              <h2>Deskripsi</h2>
                              <h3 class="text-gray-500">Game</h3>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
@endsection
