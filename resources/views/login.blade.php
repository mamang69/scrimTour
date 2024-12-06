<html lang="en" class="h-full bg-white">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Sign In</title>
</head>

<body class="h-full">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600"
                alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold tracking-tight text-gray-900">Sign in to your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="/api/login" method="POST" id="loginForm">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
                        <div class="text-sm">
                            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot
                                password?</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Masuk
                    </button>
                </div>
            </form>
            <div id="responseMessage" class="mt-4 text-center text-sm text-red-600"></div>
            <p class="mt-10 text-center text-sm text-gray-500">
                Belum punya akun ?
                <a href="/register" class="font-semibold text-indigo-600 hover:text-indigo-500">Buat sekarang</a>
            </p>
        </div>
    </div>

    <script>
        document.getElementById("loginForm").addEventListener("submit", async function (event) {
    event.preventDefault();

    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content'); // Ambil CSRF token

    try {
        const response = await fetch("http://127.0.0.1:8000/api/login", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": csrfToken,  // Menambahkan CSRF token di header
            },
            body: JSON.stringify({
                email,
                password
            }),
        });

        // Periksa apakah respons berhasil
        if (!response.ok) {
            const data = await response.json();
            document.getElementById("responseMessage").textContent = data.message || "Login gagal.";
            return; // Stop eksekusi jika login gagal
        }

        const data = await response.json();
        console.log(data); // Debugging log

        // Jika login berhasil
        document.getElementById("responseMessage").textContent = "Login berhasil!";
        console.log("Token:", data.token); // Cek token

        // Simpan token ke localStorage atau sessionStorage untuk digunakan di aplikasi lain
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
