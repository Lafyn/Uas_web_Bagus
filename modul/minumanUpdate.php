<?php require "includes/config.php"; 

//ambil id dari query string 
$id = $_GET['id']; 

// buat query untuk ambil data dari database 
$query = "SELECT * FROM tbl_minuman WHERE id_minuman=$id"; 
$sql = mysqli_query($conn, $query); 
$data = mysqli_fetch_assoc($sql); 

// jika data yang di-edit tidak ditemukan 
if (mysqli_num_rows($sql) < 1) {     
    die("data tidak ditemukan..."); 
} 
?> 

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header text-center bg-warning text-white">
            <h4 class="mb-0">Update Data Daftar Minuman</h4>
        </div>
        <div class="card-body">
            <form method="post" action="?page=minumanUpdateProses">
                <!-- Menampung id yang akan diupdate -->
                <input type="hidden" name="id" value="<?= $data['id_minuman'] ?>" />

                <!-- Nama Minuman -->
                <div class="mb-3">
                    <label for="nama_minuman" class="form-label">Nama Minuman</label>
                    <input type="text" class="form-control" id="nama_minuman" name="nama_minuman" value="<?= $data['nama_minuman'] ?>" placeholder="Masukkan nama minuman" required>
                </div>

                <!-- Daerah Minuman -->
                <div class="mb-3">
                    <label for="daerah_minuman" class="form-label">Daerah Minuman</label>
                    <input type="text" class="form-control" id="daerah_minuman" name="daerah_minuman" value="<?= $data['daerah_minuman'] ?>" placeholder="Masukkan daerah minuman" required>
                </div>

                <!-- Tombol Aksi -->
                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" name="update" class="btn btn-warning me-2">Update</button>
                    <button type="reset" class="btn btn-secondary me-2">Reset</button>
                    <button type="button" class="btn btn-danger" onClick="document.location='?page=minuman'">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
