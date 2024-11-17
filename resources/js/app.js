function toggleDropdown() {
    var dropdown = document.getElementById("dropdownMenu");

    // Toggle class "hidden" untuk show/hide dropdown
    dropdown.classList.toggle("hidden");

    // Menambahkan animasi saat show/hide
    if (!dropdown.classList.contains("hidden")) {
        dropdown.classList.remove("opacity-0", "scale-95");
        dropdown.classList.add(
            "opacity-100",
            "scale-100",
            "ease-out",
            "duration-100"
        );
    } else {
        dropdown.classList.remove("opacity-100", "scale-100");
        dropdown.classList.add(
            "opacity-0",
            "scale-95",
            "ease-in",
            "duration-75"
        );
    }
}

// Membuat fungsi global
window.toggleDropdown = toggleDropdown;
//login
document
    .getElementById("loginForm")
    .addEventListener("submit", async function (event) {
        event.preventDefault();

        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;

        try {
            const response = await fetch("http://127.0.0.1:8000/api/login", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({ email, password }),
            });

            const data = await response.json();

            if (response.ok) {
                document.getElementById("responseMessage").textContent =
                    "Login berhasil!";
                console.log("Token:", data.message.token);
            } else {
                document.getElementById("responseMessage").textContent =
                    data.message || "Login gagal.";
            }
        } catch (error) {
            document.getElementById("responseMessage").textContent =
                "Terjadi kesalahan: " + error.message;
        }
    });
