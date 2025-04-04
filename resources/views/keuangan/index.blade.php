@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Laporan Keuangan</h1>
    <a href="{{ route('keuangan.create') }}" class="btn btn-primary">Tambah Transaksi</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Keterangan</th>
                <th>Jenis</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($keuangan as $data)
            <tr>
                <td>{{ $data->keterangan }}</td>
                <td>{{ $data->jenis }}</td>
                <td>Rp {{ number_format($data->jumlah, 2, ',', '.') }}</td>
                <td>
                    <form action="{{ route('keuangan.destroy', $data->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
