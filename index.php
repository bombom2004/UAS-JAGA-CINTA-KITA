<?php
include 'login/sessionlogin.php'
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Perpustakaan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background: url('img/stmik.jpeg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            font-family: Arial, sans-serif;
        }
        .container {
            background-color: rgba(0, 0, 0, 0.5); 
            padding: 20px;
            border-radius: 10px;
        }
        .card {
            margin-bottom: 20px;
            border: none;
            border-radius: 15px;
            background-color: rgba(255, 255, 255, 0.9); 
        }
        .card-body {
            padding: 20px;
            text-align: center;
        }
        .card-icon {
            font-size: 3rem;
            margin-bottom: 10px;
        }
        .card-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: black;
        }
        .btn {
            width: 100%;
            font-size: 1rem;
            padding: 10px;
            border-radius: 5px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
        .btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }
        .btn-info:hover {
            background-color: #138496;
            border-color: #117a8b;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center mb-4">Dashboard Perpustakaan Admin</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-users card-icon text-primary"></i>
                        <h5 class="card-title">Data Anggota</h5>
                        <p class="card-text">Kelola data anggota perpustakaan.</p>
                        <a href="../web-perpus/anggota/form_anggota.php" class="btn btn-success">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-exchange-alt card-icon text-success"></i>
                        <h5 class="card-title">Detail Transaksi</h5>
                        <p class="card-text">Kelola detail transaksi peminjaman.</p>
                        <a href="../web-perpus/detailtransaksi/form_datatransaksi.php" class="btn btn-success">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-pen card-icon text-info"></i>
                        <h5 class="card-title">Data Penulis</h5>
                        <p class="card-text">Kelola data penulis buku.</p>
                        <a href="../web-perpus/penulis/form_penulis.php" class="btn btn-success">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-book card-icon text-secondary"></i>
                        <h5 class="card-title">Data Penerbit</h5>
                        <p class="card-text">Kelola data penerbit buku.</p>
                        <a href="../web-perpus/penerbit/form_penerbit.php" class="btn btn-success">Lihat</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-file-alt card-icon text-primary"></i>
                        <h5 class="card-title">Master Transaksi</h5>
                        <p class="card-text">Kelola master data transaksi.</p>
                        <a href="../web-perpus/mastertransaksi/form_master.php" class="btn btn-success">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-layer-group card-icon text-success"></i>
                        <h5 class="card-title">Data Kategori</h5>
                        <p class="card-text">Kelola data kategori buku.</p>
                        <a href="../web-perpus/kategori/form_kategori.php" class="btn btn-success">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-book-open card-icon text-info"></i>
                        <h5 class="card-title">Data Buku</h5>
                        <p class="card-text">Kelola data buku.</p>
                        <a href="../web-perpus/buku/form_buku.php" class="btn btn-success">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-sign-out-alt card-icon text-danger"></i>
                        <h5 class="card-title">Logout</h5>
                        <p class="card-text">Keluar dari sistem.</p>
                        <a href="login/logout.php" class="btn btn-danger">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
