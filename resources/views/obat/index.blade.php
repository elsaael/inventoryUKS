@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Obat UKS</h1>
    <a href="{{ route('obat.create') }}" class="btn btn-primary">Tambah Obat</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nama Obat</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Expired Date</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($obats as $obat)
            <tr>
                <td>{{ $obat->nama_obat }}</td>
                <td>{{ $obat->kategori }}</td>
                <td>{{ $obat->stok }}</td>
                <td>{{ $obat->expired_date }}</td>
                <td>
                    <a href="{{ route('obat.edit', $obat->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('obat.destroy', $obat->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @if($stokHabis->count() > 0)
        <div class="alert alert-danger mt-3">
            <strong>⚠️ Peringatan!</strong> Stok obat berikut hampir habis:
            <ul>
                @foreach($stokHabis as $item)
                    <li>{{ $item->nama_obat }} - Stok: {{ $item->stok }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
@endsection
