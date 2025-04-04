<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKS Inventory</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="d-flex">
    <!-- Sidebar -->
    <div class="bg-dark text-white p-3 vh-100" style="width: 250px;">
        <h4 class="text-center">uks_inventory</h4>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('obat.index') }}"> Daftar Obat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('obat.create') }}"> Tambah Obat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('keuangan.store') }}">Laporan Keuangan</a>
            </li>
        </ul>
    </div>

    <!-- Konten Utama -->
    <div class="container-fluid p-4">
        @yield('content')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
