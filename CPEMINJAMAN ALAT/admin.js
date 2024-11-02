const listItems = document.querySelectorAll(".sidebar-list li");

listItems.forEach((item) => {
  item.addEventListener("click", () => {
    let isActive = item.classList.contains("active");

    listItems.forEach((el) => {
      el.classList.remove("active");
    });

    if (isActive) item.classList.remove("active");
    else item.classList.add("active");
  });
});

const toggleSidebar = document.querySelector(".toggle-sidebar");
const logo = document.querySelector(".logo-box");
const sidebar = document.querySelector(".sidebar");

toggleSidebar.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});

logo.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});


/*BUTTON PERMINTAAN */

function updateStatus(nis, status) {
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'update_status.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            alert('Status diperbarui menjadi: ' + status);
            location.reload(); // Muat ulang halaman untuk menampilkan perubahan
        }
    };
    xhr.send('id=' + nis + '&status=' + status); // Ganti 'id' dengan 'nis'
}


/*SEARCHING PRODUCT */
// Fungsi pencarian yang memeriksa seluruh kolom
document.getElementById('search-input').addEventListener('keyup', function() {
    let filter = this.value.toLowerCase();  // Mengambil input dan mengubahnya ke huruf kecil
    let rows = document.querySelectorAll('.table_section tbody tr'); // Mengambil semua baris di tabel

    rows.forEach(row => {
        let isMatch = false;  // Variable untuk menyimpan apakah ada kecocokan di baris tersebut
        let columns = row.querySelectorAll('td');  // Mengambil semua kolom dari baris

        columns.forEach(column => {
            if (column.textContent.toLowerCase().includes(filter)) {
                isMatch = true;  // Jika ada kecocokan, set isMatch ke true
            }
        });

        // Jika ada kecocokan, tampilkan baris; jika tidak sembunyikan
        row.style.display = isMatch ? '' : 'none';
    });
});