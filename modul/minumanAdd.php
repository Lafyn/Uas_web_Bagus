<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header text-center bg-info text-white">
            <h4 class="mb-0">Tambah Data Daftar Minuman</h4>
        </div>
        <div class="card-body">
            <form method="post" action="?page=minumanAddProses">
                <!-- Nama Minuman -->
                <div class="mb-3">
                    <label for="nama_minuman" class="form-label">Nama Minuman</label>
                    <input type="text" class="form-control" id="nama_minuman" name="nama_minuman" placeholder="Masukkan nama minuman" required>
                </div>

                <!-- Jenis Minuman -->
                <div class="mb-3">
                    <label for="daerah_minuman" class="form-label">Daerah Minuman</label>
                    <input type="text" class="form-control" id="daerah_minuman" name="daerah_minuman" placeholder="Masukkan daerah minuman" required>
                </div>

                <!-- Tombol Aksi -->
                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" name="submit" class="btn btn-success me-2">Submit</button>
                    <button type="reset" class="btn btn-secondary me-2">Reset</button>
                    <button type="button" class="btn btn-danger" onClick="document.location='?page=minuman'">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
