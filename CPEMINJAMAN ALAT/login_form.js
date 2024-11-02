// Ambil semua elemen input yang berada di dalam elemen dengan kelas .input-div
const inputs = document.querySelectorAll(".input-div input");

// Fungsi untuk menambahkan kelas focus saat input diberi fokus
function addcl() {
    let parent = this.parentNode.parentNode;
    parent.classList.add("focus");
}

// Fungsi untuk menghapus kelas focus jika input kosong saat kehilangan fokus
function remcl() {
    let parent = this.parentNode.parentNode;
    if (this.value.trim() === "") {
        parent.classList.remove("focus");
    }
}

// Tambahkan event listener untuk setiap input: focus dan blur
inputs.forEach(input => {
    input.addEventListener("focus", addcl);
    input.addEventListener("blur", remcl);
});

// Ketika halaman menjadi terlihat kembali, fokus pada input username
document.addEventListener("visibilitychange", function() {
    if (document.visibilityState === "visible") {
        const usernameInput = document.getElementById("username");
        usernameInput.focus(); // Fokus pada input username saat halaman terlihat
        // Tambahkan kelas focus jika ada nilai
        if (usernameInput.value.trim() !== "") {
            usernameInput.parentElement.parentElement.classList.add("focus");
        }
    }
});
