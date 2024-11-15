<!DOCTYPE html>
<html lang="en">
</html>
@extends('layouts.main')
@section('container')
@section('heroimage')
<div class="min-h-full">
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">GAME</h1>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="bg-gray-100">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

                    <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
                        <h2 class="text-2xl font-bold text-gray-900">Daftar Game</h2>

                        <div class="mt-6 space-y-12 lg:grid lg:grid-rows-3 lg:grid-flow-col lg:gap-y-4 lg:space-y-4">
                            <div class="lg:row-span-3">
                                <div
                                    class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                                    <img src="https://tailwindui.com/plus/img/ecommerce-images/home-page-02-edition-01.jpg"
                                        alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                                        class="size-full object-cover object-center">
                                </div>
                                
                            </div>
                            <div class="lg:col-span-2">
                                <div
                                    class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                                    <img src="https://tailwindui.com/plus/img/ecommerce-images/home-page-02-edition-02.jpg"
                                        alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant."
                                        class="size-full object-cover object-center">
                                </div>
                            </div>
                            <div class="lg:row-span-2 lg:col-span-2">
                                <div
                                    class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                                    <img src="https://tailwindui.com/plus/img/ecommerce-images/home-page-02-edition-03.jpg"
                                        alt="Collection of four insulated travel bottles on wooden shelf."
                                        class="size-full object-cover object-center">
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
