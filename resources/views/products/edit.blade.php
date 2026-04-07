@extends('layouts.app')

@section('content')
    <h2>Edit Produk</h2>
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama Produk:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
        </div>

        <div class="form-group">
            <label for="price">Harga:</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
        </div>

        <div class="form-group">
            <label for="stock">Stok:</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{ $product->stock }}" required>
        </div>

        {{-- 2. Tambahkan Input Foto & Preview --}}
        <div class="form-group mt-3">
            <label for="image">Foto Produk:</label>

            @if ($product->image)
                <div class="mb-2">
                    <p class="text-muted small">Foto Saat Ini:</p>
                    <img src="{{ asset('storage/' . $product->image) }}" class="w-32 h-32 object-cover rounded shadow">
                </div>
            @endif

            <input type="file" class="form-control" id="image" name="image">
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
