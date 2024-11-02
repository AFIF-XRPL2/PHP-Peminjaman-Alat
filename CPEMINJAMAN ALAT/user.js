
let nextButton = document.getElementById('next');
let prevButton = document.getElementById('prev');
let backButton = document.getElementById('back');
let seeMoreButtons = document.querySelectorAll('.seeMore');
let carousel = document.querySelector('.carousel');
let listHTML = document.querySelector('.carousel .list');

// Tambahkan pengecekan jika elemen ada sebelum menambahkan event listener
if (nextButton && prevButton && backButton && carousel && listHTML) {
    nextButton.onclick = function(){
        showSlider('next');
    }
    prevButton.onclick = function(){
        showSlider('prev');
    }
    backButton.onclick = function(){
        carousel.classList.remove('showDetail');
    }
    seeMoreButtons.forEach(button => {
        button.onclick = function(){
            carousel.classList.add('showDetail');
        }
    });

    let unAcceptClick;
    const showSlider = (type) => {
        nextButton.style.pointerEvents = 'none';
        prevButton.style.pointerEvents = 'none';

        carousel.classList.remove('prev', 'next');
        let items = document.querySelectorAll('.carousel .list .item');
        if(type === 'next'){
            listHTML.appendChild(items[0]);
            carousel.classList.add('next');
        }else{
            let positionLast = items.length - 1;
            listHTML.prepend(items[positionLast]);
            carousel.classList.add('prev');
        }

        clearTimeout(unAcceptClick);
        unAcceptClick = setTimeout(() => {
            nextButton.style.pointerEvents = 'auto';
            prevButton.style.pointerEvents = 'auto';
        }, 2000);
    }
}





/*FROM DATA DIRI */

document.addEventListener('DOMContentLoaded', function() {
    // Elemen yang diperlukan
    const selectedToolsContainer = document.getElementById('selectedToolsList'); // Container untuk menampilkan alat yang dipilih
    const personalInfoForm = document.getElementById('personalInfoForm'); // Form data diri
    const submitButton = document.querySelector('.submit-selection'); // Tombol submit pilihan alat
    const dateInput = document.getElementById('date'); // Input tanggal
    const selectedToolsInput = document.getElementById('selectedToolsInput'); // Input hidden untuk menyimpan alat yang dipilih

    // Set tanggal hari ini secara otomatis pada input tanggal
    const today = new Date().toISOString().split('T')[0];
    if (dateInput) {
        dateInput.value = today; // Mengatur input tanggal ke hari ini
        dateInput.min = today;   // Membatasi input tanggal agar tidak bisa memilih hari kemarin
    }

    // Event listener untuk tombol submit pilihan alat
    if (submitButton) {
        submitButton.addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah form submit secara default

            const selectedTools = []; // Array untuk menyimpan alat yang dipilih
            selectedToolsContainer.innerHTML = ''; // Kosongkan tampilan alat yang dipilih sebelumnya

            // Ambil semua checkbox alat yang dipilih
            document.querySelectorAll('.tool-checkbox:checked').forEach(function(checkbox) {
                const label = checkbox.nextElementSibling; // Ambil label terkait checkbox
                const toolName = label.querySelector('p').textContent; // Nama alat dari <p>
                const toolImage = label.querySelector('img').src; // Sumber gambar alat

                // Simpan nama alat yang dipilih ke array
                selectedTools.push(toolName);

                // Buat elemen untuk menampilkan alat yang dipilih
                const toolElement = document.createElement('div');
                toolElement.classList.add('tool-item');
                toolElement.innerHTML = `
                    <img src="${toolImage}" alt="${toolName}">
                    <p>${toolName}</p>
                `;
                selectedToolsContainer.appendChild(toolElement); // Tampilkan alat di halaman
            });

            // Masukkan alat yang dipilih ke input hidden agar bisa dikirim ke server
            if (selectedToolsInput) {
                selectedToolsInput.value = selectedTools.join(", "); // Gabungkan alat yang dipilih menjadi string
            }

            // Debug: Tampilkan alat yang dipilih di konsol
            console.log('Alat yang dipilih:', selectedTools);
        });
    }

    // Event listener untuk submit form data diri
    if (personalInfoForm) {
        personalInfoForm.addEventListener('submit', function(event) {
            // Validasi sederhana
            const nis = document.getElementById('nis').value;
            if (!nis) {
                event.preventDefault(); // Cegah submit jika NIS kosong
                alert('NIS harus diisi');
            } else {
                event.preventDefault(); // Cegah submit untuk menampilkan SweetAlert
            
            // SweetAlert untuk konfirmasi
            Swal.fire({
                title: "Apakah Anda yakin?",
                text: "Data tidak akan bisa diubah setelah ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, kirim data!",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika dikonfirmasi, lanjutkan submit form
                    const formData = new FormData(personalInfoForm);
                    const data = {
                        nis: formData.get('nis'),
                        name: formData.get('name'),
                        class: formData.get('class'),
                        tanggal_peminjaman: formData.get('date'),
                        selectedTools: formData.get('tools')  // Alat yang dipilih dari input hidden
                    };

                    // Debug: Tampilkan data yang akan dikirim di konsol
                    console.log('Data yang akan dikirim:', data);

                    // Kirim form
                    personalInfoForm.submit();
                }
            });
        }
    });
}


// CARD DATA PENGGUNA

document.getElementById("statusForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Mencegah form refresh halaman

    var formData = new FormData(this);

    fetch('update_status.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Melihat hasil dari update_status.php
        alert("Status berhasil diperbarui!");
        
        // Opsional: Perbarui tampilan card secara dinamis (tanpa reload)
        document.querySelector(".status").innerText = formData.get('status') === 'diterima' ? 'Diterima' : 'Pending';
    })
    .catch(error => console.error('Error:', error));
});
})

window.addEventListener('load', function() {
    const overlay = document.getElementById('loading-overlay');
    setTimeout(function() {
        overlay.style.display = 'none';
    }, 4000); // 4000 ms = 4 detik
});
