<html lang="en" class="h-full bg-white">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Sign Up</title>
</head>

<body class="h-full">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold tracking-tight text-gray-900">Sign up to create a new account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="/api/register" method="POST" id="registerForm">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-900">Full Name</label>
                    <div class="mt-2">
                        <input id="name" name="name" type="text" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-900">Confirm Password</label>
                    </div>
                    <div class="mt-2">
                        <input id="password_confirmation" name="password_confirmation" type="password" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Sign Up
                    </button>
                </div>
            </form>
            <div id="responseMessage" class="mt-4 text-center text-sm text-red-600"></div>
            <p class="mt-10 text-center text-sm text-gray-500">
                Already have an account?
                <a href="/login" class="font-semibold text-indigo-600 hover:text-indigo-500">Log in now</a>
            </p>
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
                    window.location.href = '/';
                }
            } catch (error) {
                console.error('Fetch error:', error); // Menampilkan kesalahan koneksi atau masalah lainnya
                document.getElementById("responseMessage").textContent = "Terjadi kesalahan: " + error.message;
            }
        });
    </script>
</body>

</html>
