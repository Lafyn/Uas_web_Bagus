<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header text-center bg-primary text-white">
            <h4 class="mb-0">Tambah Data Daftar Makanan</h4>
        </div>
        <div class="card-body">
            <form method="post" action="?page=makananAddProses">
                <!-- Nama Makanan -->
                <div class="mb-3">
                    <label for="nama_makanan" class="form-label">Nama Makanan</label>
                    <input type="text" class="form-control" id="nama_makanan" name="nama_makanan" placeholder="Masukkan nama makanan" required>
                </div>

                <!-- Daerah Makanan -->
                <div class="mb-3">
                    <label for="daerah_makanan" class="form-label">Daerah Makanan</label>
                    <input type="text" class="form-control" id="daerah_makanan" name="daerah_makanan" placeholder="Masukkan daerah makanan" required>
                </div>

                <!-- Tombol Aksi -->
                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" name="submit" class="btn btn-success me-2">Submit</button>
                    <button type="reset" class="btn btn-secondary me-2">Reset</button>
                    <button type="button" class="btn btn-danger" onClick="document.location='?page=makanan'">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
