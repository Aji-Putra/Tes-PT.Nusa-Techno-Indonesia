@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Edit Produk</h3>
    <form action="{{ route('produk.update', $produk->id) }}" method="POST">
        @csrf
        @method('PUT')
    
        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $produk->nama) }}">
            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ old('deskripsi', $produk->deskripsi) }}</textarea>
        </div>
    
        <div class="mb-3">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ old('harga', $produk->harga) }}">
            @error('harga')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control @error('stok') is-invalid @enderror" value="{{ old('stok', $produk->stok) }}">
            @error('stok')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="/" class="btn btn-warning">Back</a>
    </form>
</div>
@endsection
