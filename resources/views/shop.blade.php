@extends('layouts.app')

@section('content')

<section class="bg-gray-950 min-h-screen py-20 px-6 md:px-16">

    <!-- Title -->
    <div class="text-center mb-16">
        <h2 class="text-3xl md:text-5xl font-black uppercase">
            SHOP <span class="text-emerald-500">COLLECTION</span>
        </h2>
        <div class="w-16 h-1 bg-emerald-500 mx-auto mt-4"></div>
    </div>

    <!-- Grid -->
    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">

        @forelse($products as $product)
        <a href="{{ route('shop.detail', $product->id) }}" class="group">
        <!-- CARD -->
        <div class="bg-gray-900 border border-gray-800 rounded-lg overflow-hidden group hover:-translate-y-2 hover:shadow-2xl transition duration-300">

            <!-- Image -->
            <div class="h-64 flex items-center justify-center bg-gray-950 overflow-hidden">
       @if($product->image)
            {{-- Jika ada gambar di database, ambil dari folder storage --}}
            <img src="{{ asset('storage/' . $product->image) }}" 
             alt="{{ $product->name }}"
             class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
        @else
            {{-- Jika gambar kosong, tampilkan logo default --}}
            <img src="{{ asset('images/logo.png') }}" 
                alt="Default Logo"
                class="w-24 opacity-50">
        @endif
        
    </div>
   
            <!-- Info -->
            <div class="p-5 border-t border-gray-800">
                
                <!-- Nama Produk -->
                <h3 class="text-white font-bold text-lg mb-1 uppercase tracking-tight">
                    {{ $product->name }}
                </h3>

                <!-- Harga -->
                <p class="text-emerald-500 font-black text-xl">
                    Rp{{ number_format($product->price, 0, ',', '.') }}
                </p>

                <!-- Stock -->
                <div class="mt-2 text-gray-500 text-xs uppercase tracking-widest">
                    Stock: 
                </div>

            </div>

        </div>
        </a>
        @empty

        <!-- Dummy cards kalau belum ada data -->
        @for ($i = 0; $i < 8; $i++)
        <div class="bg-gray-900 border border-gray-800 rounded-lg overflow-hidden ">

            <div class="h-64 flex items-center justify-center bg-gray-950">
                <img src="{{ asset('images/logo.png') }}" class="w-24 opacity-50">
            </div>

            <div class="p-5 border-t border-gray-800 space-y-3">
                <div class="h-4 bg-gray-800 rounded w-3/4"></div>
                <div class="h-4 bg-gray-800 rounded w-1/2"></div>
            </div>

        </div>
        @endfor

        @endforelse

    </div>

</section>

@endsection