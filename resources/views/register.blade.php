<html lang="en" class="h-full bg-white">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Register</title>
</head>

<body class="h-full" style="background-image: url('{{ asset('images/bg_beranda.jpg') }}'); background-size: cover; background-position: center;">
    <div class="flex min-h-full items-center justify-center px-6 py-12 lg:px-8">
        <div class="border-4 border-red-600 w-4/5 lg:w-2/5 bg-black bg-opacity-20 p-6 rounded-lg">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-white">DAFTAR</h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-6" action="/api/register" method="POST" id="registerForm">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-white">Nama Lengkap</label>
                        <div class="mt-2">
                            <input id="name" name="name" type="text" required
                                class="block w-full rounded-md bg-gray-400 bg-opacity-20 border-gray-500 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-white">Email</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" required
                                class="block w-full rounded-md bg-gray-400 bg-opacity-20 border-gray-300 py-1.5  text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm font-medium text-white">Password</label>
                        </div>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" required
                                class="block w-full rounded-md bg-gray-400 bg-opacity-20 border-gray-300 py-1.5  text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password_confirmation"
                                class="block text-sm font-medium text-white">Konfirmasi Password</label>
                        </div>
                        <div class="mt-2">
                            <input id="password_confirmation" name="password_confirmation" type="password" required
                                class="block w-full rounded-md bg-gray-400 bg-opacity-20 border-gray-300 py-1.5  text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <button type="submit"
                            class="flex w-2/5 justify-center border-2 border-white rounded-md bg-gradient-to-r from-red-500 to-black px-3 py-1.5 text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 ">
                            DAFTAR
                        </button>
                    </div>
                </form>
                <div id="responseMessage" class="mt-4 text-center text-sm text-red-600"></div>
                <p class="mt-6 text-center text-sm text-gray-100">
                    Sudah Punya Akun?
                </p>
                <div class="flex justify-center items-center mt-6">
                    <a href="/login" class="text-center font-bold text-lg text-white ">
                        MASUK
                    </a>
                </div>
                
                
                
                
            </div>
        </div>
    </div>

    <script>
        document.getElementById("registerForm").addEventListener("submit", async function (event) {
            event.preventDefault();

            const name = document.getElementById("name").value;
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
            const password_confirmation = document.getElementById("password_confirmation").value;

            // Ambil token CSRF dari cookie
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            try {
                const response = await fetch("http://127.0.0.1:8000/api/register", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": csrfToken, // Kirimkan token CSRF di header
                    },
                    body: JSON.stringify({
                        name,
                        email,
                        password,
                        password_confirmation
                    }),
                });

                const data = await response.json();

                if (!response.ok) {
                    document.getElementById("responseMessage").textContent = data.message || "Terjadi kesalahan pada server.";
                } else {
                    document.getElementById("responseMessage").textContent = "Registrasi berhasil!";
                    // localStorage.setItem('auth_token', data.token);
                    window.location.href = '/login';
                }
            } catch (error) {
                console.error('Fetch error:', error); // Menampilkan kesalahan koneksi atau masalah lainnya
                document.getElementById("responseMessage").textContent = "Terjadi kesalahan: " + error.message;
            }
        });
    </script>
</body>

</html>
