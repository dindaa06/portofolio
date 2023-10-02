function showSubmitAlert() {
    alert("Data added successfully!")
}

function confirmDelete() {
    if (confirm("Are you sure you delete this?")) {
       alert("Data has been deleted."); 
    } else {

    }
}

function showEditAlert() {
    var userResponse = confirm("Apakah Anda ingin mengedit data ini?");
    
    if (userResponse) {
        var newDataNama = prompt("Masukkan nama baru:");
        var newDataEmail = prompt("Masukkan email baru:");
        var newDataPesan = prompt("Masukkan pesan baru:");
        
        if (newDataNama !== null && newDataEmail !== null && newDataPesan !== null) {
            // Simpan data yang diubah ke elemen HTML sesuai kebutuhan Anda.
            var namaElement = document.getElementById("nama");
            var emailElement = document.getElementById("email");
            var pesanElement = document.getElementById("pesan");
            
            namaElement.innerHTML = newDataNama;
            emailElement.innerHTML = newDataEmail;
            pesanElement.innerHTML = newDataPesan;
            
            alert("Data telah berhasil diedit!");
        } else {
            alert("Pengeditan data dibatalkan.");
        }
    }
}

