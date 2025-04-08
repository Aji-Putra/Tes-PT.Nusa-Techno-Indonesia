@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Daftar Produk</h3>
    <a href="{{ route('produk.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produks as $produk)
            <tr>
                <td>{{ $produk->nama }}</td>
                <td>{{ $produk->deskripsi }}</td>
                <td>Rp {{ number_format($produk->harga, 0, ',', '.') }}</td>
                <td>{{ $produk->stok }}</td>
                <td>
                    <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" style="display:inline-block;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
