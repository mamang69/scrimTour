function toggleDropdown() {
    const dropdown = document.getElementById("dropdownMenu");

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
