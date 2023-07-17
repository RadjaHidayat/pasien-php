<!DOCTYPE html>
<html>

<head>
    <title>Halaman User</title>
    <!-- Tambahkan link stylesheet Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }

        .card {
            max-width: 500px;
            margin: 0 auto;
        }

        .card-header {
            background-color: #f8f9fa;
            border-bottom: none;
        }

        .nav-item {
            margin-right: 10px;
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
        }

        .card-text {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-pills card-header-pills justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="admin.php">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user.php">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Logout</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <h5 class="card-title">Selamat Datang di Halaman User</h5>
            <p class="card-text">Laman ini adalah Laman user. Mau Melihat data pasien?</p>
            <a href="Pasien.php" class="btn btn-primary">Lihat data</a>
            <a href="admin.php" class="btn btn-warning">Tetap di Laman Ini</a>
        </div>
    </div>

    <!-- Tambahkan link script Bootstrap dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>