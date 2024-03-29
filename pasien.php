<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sattari R.H | XII RPL 1</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }

        .container {
            max-width: 800px;
        }

        h3 {
            margin-bottom: 20px;
        }

        .btn-sm {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Rumah Sakit</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="admin.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Pasien</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="row">
            <div class="col">
                <h3 class="text-center">Tabel Pasien</h3>
            </div>
        </div>

        <div class="row">
            <div class="col text-end">
                <a href="tambahpasien.php" class="btn btn-primary btn-sm">Tambah Pasien</a>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <table class="table table-striped table-hover table-sm">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Pasien</th>
                            <th>Nama Pasien </th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        $no = 1;
                        $hasil = $koneksi->query("SELECT * FROM pasien");
                        ?>
                        <?php while ($row = $hasil->fetch_assoc()) { ?>
                            <tr>
                                <td>
                                    <?= $no++; ?>
                                </td>
                                <td>
                                    <?= $row['idPasien']; ?>
                                </td>
                                <td>
                                    <?= $row['nmPasien']; ?>
                                </td>
                                <td>
                                    <?= $row['jk']; ?>
                                </td>
                                <td>
                                    <?= $row['alamat']; ?>
                                </td>
                                <td>
                                    <a href="editpasien.php?edit=<?= $row['idPasien']; ?>"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#hapusModal<?= $row['idPasien']; ?>">
                                        Hapus
                                    </button>
                                </td>
                            </tr>

                            <!-- Modal Hapus -->
                            <div class="modal fade" id="hapusModal<?= $row['idPasien']; ?>" tabindex="-1"
                                aria-labelledby="hapusModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="hapusModalLabel">Konfirmasi Hapus</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apakah Anda yakin ingin menghapus data ini?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <a href="koneksi.php?idPasien=<?= $row['idPasien']; ?>"
                                                class="btn btn-danger btn-sm">Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>