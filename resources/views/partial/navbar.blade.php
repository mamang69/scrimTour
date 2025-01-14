<nav class="{{ request()->is('/') ? 'bg-black bg-opacity-50 fixed top-0 left-0 w-full z-10' : 'bg-black bg-opacity-50 border-b-2 border-blue-1 fixed top-0 left-0 w-full z-10' }}">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="shrink-0">
                    <h1 class="text-3xl font-bold">
                        <span class="blue-1">Scrim</span><span class="text-white">Tour</span>
                    </h1>
                </div>
            </div>
            <div class="hidden md:block ml-auto">
                <div class="ml-10 flex items-baseline space-x-4">
                    <a href="/" class="rounded-md px-3 py-2 text-xl font-extrabold blue-1 hover:bg-blue-1 hover:text-black">Beranda</a>
                    <a href="/jadwal" class="rounded-md px-3 py-2 text-xl font-extrabold blue-1 hover:bg-blue-1 hover:text-black">Jadwal</a>
                    <a href="/game" class="rounded-md px-3 py-2 text-xl font-extrabold blue-1 hover:bg-blue-1 hover:text-black">Game</a>
                    <a href="/article" class="rounded-md px-3 py-2 text-xl font-extrabold blue-1 hover:bg-blue-1 hover:text-black">Artikel</a>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6" id="authLinks">
                    @auth
                        <span class="text-white mr-4">Hello, {{ Auth::user()->name }}</span>
                        <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a href="#" id="logoutBtn" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Logout</a>
                    @else
                    <a href="/login" class="flex items-center text-outline-blue justify-center bg-black bg-opacity-50 border-2 border-blue-1 rounded-full px-6 -py-2 text-3xl font-extrabold text-gray-300 ">
                        Masuk
                    </a>
                    
                        {{-- <a href="/login" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Login</a>
                        <a href="/register" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Register</a> --}}
                    @endauth
                </div>
            </div>
            <!-- Burger Menu -->
            <div class="-mr-2 flex md:hidden">
                <button type="button" id="burgerMenuBtn" class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="hidden" id="mobileMenu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <a href="/" class="block rounded-md px-3 py-2 text-base font-medium blue-1 hover:bg-red-700 hover:text-black">Beranda</a>
            <a href="/jadwal" class="block rounded-md px-3 py-2 text-base font-medium blue-1 hover:bg-red-700 hover:text-black">Jadwal</a>
            <a href="/game" class="block rounded-md px-3 py-2 text-base font-medium blue-1 hover:bg-red-700 hover:text-black">Game</a>
            <a href="/article" class="block rounded-md px-3 py-2 text-base font-medium blue-1 hover:bg-red-700 hover:text-black">Artikel</a>
        </div>
    </div>
</nav>

<script>
    const burgerMenuBtn = document.getElementById('burgerMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    // Toggle menu on burger button click
    burgerMenuBtn?.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Close mobile menu when resizing to large screens
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
            mobileMenu.classList.add('hidden');
        }
    });

    // Handle logout
    document.getElementById('logoutBtn')?.addEventListener('click', function (event) {
        event.preventDefault();
        localStorage.removeItem('auth_token');
        document.getElementById('logoutForm').submit();
    });
</script>
