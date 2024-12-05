<!DOCTYPE html>
<html lang="en">
</html>
@extends('layouts.main')
@section('container')
@section('heroimage')
<div class="min-h-full">
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="bg-gray-100">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <h3><span><a href="/">Beranda</a></span> > Game</h3>
                    <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-10">
                        <h2 class="text-2xl font-bold text-gray-900">Daftar Game</h2>
                        
                        <div class="mt-6 grid grid-cols-2 lg:grid lg:grid-rows-6 lg:grid-cols-8 gap-4">
                          <div class="lg:row-span-6 lg:col-span-2 col-span-2 bg-white rounded-xl p-10 drop-shadow-lg">
                            <div class="font-semibold text-lg">
                              Filter
                            </div>
                            <hr class="my-4 border-t-2 border-gray-300">
                            <div class="mt-4">
                              <!-- Genre Filter -->
                              <div class="mb-4">
                                <div class="font-semibold text-sm">Genre</div>
                                <div class="flex flex-col space-y-2 mt-2">
                                  <label class="flex items-center">
                                    <input type="checkbox" class="mr-2 rounded-md border-gray-300 focus:ring-2 focus:ring-blue-500">
                                    MOBA (Multiplayer Online Battle Arena)
                                  </label>
                                  <label class="flex items-center">
                                    <input type="checkbox" class="mr-2 rounded-md border-gray-300 focus:ring-2 focus:ring-blue-500">
                                    FPS (First-Person Shooter)
                                  </label>
                                  <label class="flex items-center">
                                    <input type="checkbox" class="mr-2 rounded-md border-gray-300 focus:ring-2 focus:ring-blue-500">
                                    RTS (Real-Time Strategy)
                                  </label>
                                  <label class="flex items-center">
                                    <input type="checkbox" class="mr-2 rounded-md border-gray-300 focus:ring-2 focus:ring-blue-500">
                                    Battle Royale
                                  </label>
                                  <label class="flex items-center">
                                    <input type="checkbox" class="mr-2 rounded-md border-gray-300 focus:ring-2 focus:ring-blue-500">
                                    Fighting
                                  </label>
                                  <label class="flex items-center">
                                    <input type="checkbox" class="mr-2 rounded-md border-gray-300 focus:ring-2 focus:ring-blue-500">
                                    Card Games (Competitive)
                                  </label>
                                  <label class="flex items-center">
                                    <input type="checkbox" class="mr-2 rounded-md border-gray-300 focus:ring-2 focus:ring-blue-500">
                                    Sports Simulation
                                  </label>
                                  <label class="flex items-center">
                                    <input type="checkbox" class="mr-2 rounded-md border-gray-300 focus:ring-2 focus:ring-blue-500">
                                    Racing (Competitive)
                                  </label>
                                </div>
                              </div>
                          
                              <!-- Garis Pemisah -->
                              <hr class="my-4 border-t border-gray-300">
                          
                              <!-- Jenis Filter -->
                              <div>
                                <div class="font-semibold text-sm">Jenis</div>
                                <div class="flex flex-col space-y-2 mt-2">
                                  <label class="flex items-center">
                                    <input type="checkbox" class="mr-2 rounded-md border-gray-300 focus:ring-2 focus:ring-blue-500">
                                    PC
                                  </label>
                                  <label class="flex items-center">
                                    <input type="checkbox" class="mr-2 rounded-md border-gray-300 focus:ring-2 focus:ring-blue-500">
                                    MOBILE
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          <div class="lg:col-span-6 col-span-2 lg:mt-0 mt-6 bg-gray-500 rounded-lg p-10 drop-shadow-lg">
                            <div class="font-semibold text-lg">
                              Search 
                            </div>
                          </div>
                          <div class="lg:col-span-2 lg:row-span-2 bg-white rounded-lg p-10 drop-shadow-lg">
                            <div class="font-semibold text-lg">
                              Game 
                            </div>
                          </div>
                          <div class="lg:col-span-2 lg:row-span-2 bg-white rounded-lg p-10 drop-shadow-lg">
                            <div class="font-semibold text-lg">
                              Game 
                            </div>
                          </div>
                          <div class="lg:col-span-2 lg:row-span-2 bg-white rounded-lg p-10 drop-shadow-lg">
                            <div class="font-semibold text-lg">
                              Game 
                            </div>
                          </div>
                          <div class="lg:col-span-2 lg:row-span-2 bg-white rounded-lg p-10 drop-shadow-lg">
                            <div class="font-semibold text-lg">
                              Game 
                            </div>
                          </div>
                          <div class="lg:col-span-2 lg:row-span-2 bg-white rounded-lg p-10 drop-shadow-lg">
                            <div class="font-semibold text-lg">
                              Game 
                            </div>
                          </div>
                          <div class="lg:col-span-2 lg:row-span-2 bg-white rounded-lg p-10 drop-shadow-lg">
                            <div class="font-semibold text-lg">
                              Game 
                            </div>
                          </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class=" bg-white rounded-lg p-10 drop-shadow-lg">
              <div class="font-semibold text-lg">
                Game 
              </div>
            </div> --}}
        </div>
    </main>
</div>
@endsection
@endsection
