<html lang="en" class="h-full bg-white">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Login</title>
</head>

<body class="h-full" style="background-image: url('{{ asset('images/bg_beranda.jpg') }}'); background-size: cover; background-position: center;">
    <div class="flex min-h-full items-center justify-center px-6 py-12 lg:px-8">
        <div class="border-4 border-red-600 w-4/5 lg:w-2/5 bg-black bg-opacity-20 p-6 rounded-lg">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <h2 class="mt-10 text-center text-2xl font-bold tracking-tight text-white">Masuk</h2>
            </div>
    
            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-6" id="loginForm">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-white">Email</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" required
                                class="block w-full rounded-md bg-gray-400 bg-opacity-20 border-gray-300 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                        </div>
                    </div>
    
                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm font-medium text-white">Password</label>
                            
                        </div>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password" required
                                class="block w-full rounded-md bg-gray-400 bg-opacity-20 border-gray-300 py-1.5  text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                        </div>
                    </div>
    
                    <div class="flex justify-center">
                        <button type="submit"
                            class="flex w-2/5 justify-center border-2 border-white rounded-md bg-gradient-to-r from-red-500 to-black px-3 py-1.5 text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 ">
                            MASUK
                        </button>
                    </div>
                </form>
                <div id="responseMessage" class="mt-4 text-center text-sm text-red-600"></div>
                <p class="mt-10 text-center text-sm text-gray-100">
                    Belum punya akun ? 
                </p>
                <div class="flex justify-center items-center mt-6">
                    <a href="/register" class="text-center font-bold text-lg text-white ">
                        DAFTAR
                    </a>
                </div>
            </div>
        </div>
        
    </div>

    <script>
        document.getElementById("loginForm").addEventListener("submit", async function (event) {
            event.preventDefault(); // Mencegah form dikirimkan secara default

            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;

            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content'); // Ambil CSRF token

            try {
                // Kirim request login ke API
                const response = await fetch("http://127.0.0.1:8000/api/login", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": csrfToken, // Menambahkan CSRF token di header
                    },
                    body: JSON.stringify({ email, password })
                });

                // Jika login gagal
                if (!response.ok) {
                    const data = await response.json();
                    document.getElementById("responseMessage").textContent = data.message || "Login gagal.";
                    return;
                }

                // Jika login berhasil
                const data = await response.json();
                console.log(data); // Debugging log

                // Simpan token ke localStorage
                localStorage.setItem('auth_token', data.token);

                // Arahkan pengguna ke halaman dashboard
                window.location.href = "/"; // Ganti dengan URL halaman dashboard Anda
            } catch (error) {
                document.getElementById("responseMessage").textContent = "Terjadi kesalahan: " + error.message;
            }
        });
    </script>
</body>

</html>
