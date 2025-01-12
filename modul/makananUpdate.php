<?php require "includes/config.php"; 

//ambil id dari query string 
$id = $_GET['id']; 

// buat query untuk ambil data dari database 
$query = "SELECT * FROM tbl_makanan WHERE id_makanan=$id"; 
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
            <h4 class="mb-0">Update Data Daftar Makanan</h4>
        </div>
        <div class="card-body">
            <form method="post" action="?page=makananUpdateProses">
                <!-- Menampung id yang akan diupdate -->
                <input type="hidden" name="id" value="<?= $data['id_makanan'] ?>" />

                <!-- Nama Makanan -->
                <div class="mb-3">
                    <label for="nama_makanan" class="form-label">Nama Makanan</label>
                    <input type="text" class="form-control" id="nama_makanan" name="nama_makanan" value="<?= $data['nama_makanan'] ?>" placeholder="Masukkan nama makanan" required>
                </div>

                <!-- Daerah Makanan -->
                <div class="mb-3">
                    <label for="daerah_makanan" class="form-label">Daerah Makanan</label>
                    <input type="text" class="form-control" id="daerah_makanan" name="daerah_makanan" value="<?= $data['daerah_makanan'] ?>" placeholder="Masukkan daerah makanan" required>
                </div>

                <!-- Tombol Aksi -->
                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" name="update" class="btn btn-warning me-2">Update</button>
                    <button type="reset" class="btn btn-secondary me-2">Reset</button>
                    <button type="button" class="btn btn-danger" onClick="document.location='?page=makanan'">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
