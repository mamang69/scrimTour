<!DOCTYPE html>
<html lang="en">
</html>
@extends('layouts.main')
@section('container')
@section('heroimage')
<div class="min-h-full">

    <main>
        <div class="h-104  pt-16" style="background-image: url('{{ asset('images/bg_beranda.jpg') }}'); background-size: cover; background-position: center;">
            <h1 class="mx-auto px-4 py-6 sm:px-6 lg:px-">
                <span class="text-white text-6xl font-bold">KABAR </span>
                <span class="text-outline-red text-6xl font-bold">GAMERS</span>
            </h1>
        </div>
        
        
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="bg-gray-100">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    
                    <div id="carousel-example" class="relative w-full" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                            <!-- Item 1 -->
                            <div id="carousel-item-1" class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://tailwindui.com/plus/img/ecommerce-images/home-page-02-edition-01.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div id="carousel-item-2" class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://tailwindui.com/plus/img/ecommerce-images/home-page-02-edition-02.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                            <!-- Item 3 -->
                            <div id="carousel-item-3" class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://tailwindui.com/plus/img/ecommerce-images/home-page-02-edition-03.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                            <!-- Item 4 -->
                            <div id="carousel-item-4" class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://tailwindui.com/plus/img/ecommerce-images/home-page-02-edition-01.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                            <!-- Item 5 -->
                            <div id="carousel-item-5" class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://tailwindui.com/plus/img/ecommerce-images/home-page-02-edition-02.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                        </div>
                        
                        <!-- Slider indicators -->
                        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                            <button id="carousel-indicator-1" type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button id="carousel-indicator-2" type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button id="carousel-indicator-3" type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button id="carousel-indicator-4" type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                            <button id="carousel-indicator-5" type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                        </div>
                        
                        <!-- Slider controls -->
                        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 bg-white-800 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 bg-white-800 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                    


                    <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
                        <h2 class="text-2xl font-bold text-gray-900">Jadwal Tournament</h2>


                        <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
                            <div class="group relative">
                                <div
                                    class="relative mx-auto h-48 sm:w-full w-2/3 overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                                    <img src="https://tailwindui.com/plus/img/ecommerce-images/home-page-02-edition-01.jpg"
                                        alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                                        class="size-full object-cover object-center">
                                </div>
                                <h3 class="mt-6 text-sm text-gray-500">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        Desk and Office
                                    </a>
                                </h3>
                                <p class="text-base font-semibold text-gray-900">Work from home accessories</p>
                            </div>
                            <div class="group relative">
                                <div
                                    class="relative mx-auto h-48 sm:w-full w-2/3 overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                                    <img src="https://tailwindui.com/plus/img/ecommerce-images/home-page-02-edition-02.jpg"
                                        alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant."
                                        class="size-full object-cover object-center">
                                </div>
                                <h3 class="mt-6 text-sm text-gray-500">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        Self-Improvement
                                    </a>
                                </h3>
                                <p class="text-base font-semibold text-gray-900">Journals and note-taking</p>
                            </div>
                            <div class="group relative">
                                <div
                                    class="relative mx-auto h-48 sm:w-full w-2/3 overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                                    <img src="https://tailwindui.com/plus/img/ecommerce-images/home-page-02-edition-03.jpg"
                                        alt="Collection of four insulated travel bottles on wooden shelf."
                                        class="size-full object-cover object-center">
                                </div>
                                <h3 class="mt-6 text-sm text-gray-500">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        Travel
                                    </a>
                                </h3>
                                <p class="text-base font-semibold text-gray-900">Daily commute essentials</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
        const items = [
            document.getElementById('carousel-item-1'),
            document.getElementById('carousel-item-2'),
            document.getElementById('carousel-item-3'),
            document.getElementById('carousel-item-4'),
            document.getElementById('carousel-item-5')
        ];

        const indicators = [
            document.getElementById('carousel-indicator-1'),
            document.getElementById('carousel-indicator-2'),
            document.getElementById('carousel-indicator-3'),
            document.getElementById('carousel-indicator-4'),
            document.getElementById('carousel-indicator-5')
        ];

        let currentPosition = 0;

        const updateCarousel = (position) => {
            // Hide all items
            items.forEach((item) => item.classList.add('hidden'));
            // Show the current item
            items[position].classList.remove('hidden');
            
            // Update indicators
            indicators.forEach((indicator, index) => {
                if (index === position) {
                    indicator.classList.add('bg-white');
                    indicator.classList.remove('bg-white/50');
                } else {
                    indicator.classList.remove('bg-white');
                    indicator.classList.add('bg-white/50');
                }
            });
        };

        const nextSlide = () => {
            currentPosition = (currentPosition + 1) % items.length;
            updateCarousel(currentPosition);
        };

        const prevSlide = () => {
            currentPosition = (currentPosition - 1 + items.length) % items.length;
            updateCarousel(currentPosition);
        };

        // Auto-advance every 3 seconds
        setInterval(nextSlide, 3000);

        // Initialize carousel
        updateCarousel(currentPosition);

        // Button listeners for prev/next
        document.querySelector('[data-carousel-prev]').addEventListener('click', prevSlide);
        document.querySelector('[data-carousel-next]').addEventListener('click', nextSlide);

        // Indicator listeners
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                currentPosition = index;
                updateCarousel(currentPosition);
            });
        });
    });

    </script>
</div>
@endsection
@endsection
