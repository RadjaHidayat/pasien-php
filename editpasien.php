<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pasien</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
        }

        .card {
            border: none;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background-color: #f8f9fa;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control {
            margin-bottom: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <h3 class="text-center">Edit Data Pasien</h3>
                    <?php
                    include 'koneksi.php';
                    $panggil = $koneksi->query("SELECT * FROM pasien where idPasien='$_GET[edit]'");
                    ?>
                    <?php while ($row = $panggil->fetch_assoc()) { ?>
                        <form action="koneksi.php" method="POST">
                            <div class="form-group">
                                <label for="idPasien">ID Pasien</label>
                                <input type="text" class="form-control" name="idPasien" value="<?= $row['idPasien'] ?>">
                            </div>

                            <div class="form-group">
                                <label for="nmPasien">Nama Pasien</label>
                                <input type="text" class="form-control" name="nmPasien" value="<?= $row['nmPasien'] ?>">
                            </div>

                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="jk" value="perempuan" <?php if ($row['jk'] === "perempuan")
                                        echo "checked"; ?>>
                                    <label class="form-check-label">Perempuan</label>
                                </div>

                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="jk" value="laki-laki" <?php if ($row['jk'] === "laki-laki")
                                        echo "checked"; ?>>
                                    <label class="form-check-label">Laki-laki</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" name="alamat" id="alamat" cols="5" rows="3"
                                    placeholder="Alamat"><?= $row['alamat'] ?></textarea>
                            </div>

                            <div class="text-center">
                                <input type="submit" name="edit" value="Edit" class="btn btn-primary">
                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>