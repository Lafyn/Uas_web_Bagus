<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Minuman</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Data Minuman</h2>

        <!-- Tambah Data Baru Button -->
        <div class="d-flex justify-content-end mb-3">
            <a href="?page=minumanAdd" class="btn btn-primary">[+] Tambah Data Baru</a>
        </div>

        <!-- Table -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama Minuman</th>
                        <th>Daerah Minuman</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "includes/config.php";
                    $query = "SELECT * FROM tbl_minuman ORDER BY id_minuman ASC";
                    $sql = mysqli_query($conn, $query);
                    $nomor = 1;
                    while ($data = mysqli_fetch_array($sql)) { ?>
                        <tr>
                            <td class="text-center"><?= $nomor++; ?></td>
                            <td><?= $data["nama_minuman"] ?></td>
                            <td><?= $data["daerah_minuman"] ?></td>
                            <td class="text-center">
                                <a href="?page=minumanUpdate&id=<?= $data['id_minuman']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="?page=minumanDelete&id=<?= $data['id_minuman']; ?>" 
                                class="btn btn-sm btn-danger" 
                                onclick="return confirm('Yakin ingin menghapus data ini ?');">
                                    Hapus
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Total Data -->
        <div class="text-end mt-3">
            <p class="fw-bold">Total Data: <?= mysqli_num_rows($sql) ?></p>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
