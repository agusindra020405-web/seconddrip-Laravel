@extends('layouts.app')

@section('content')
    <section class="bg-gray-950 min-h-screen py-10 px-6 md:px-16 text-white font-['Nunito']">
        <div class="max-w-6xl mx-auto">
            <div class="flex justify-between items-end mb-10">
                <div>
                    <h2 class="text-3xl md:text-4xl font-black uppercase tracking-tighter">
                        PRODUCT <span class="text-emerald-500">INVENTORY</span>
                    </h2>
                    <div class="w-12 h-1 bg-emerald-500 mt-2"></div>
                </div>
                <a href="{{ route('products.create') }}"
                    class="bg-emerald-600 hover:bg-emerald-500 text-white font-bold py-3 px-6 rounded-lg transition duration-300 uppercase text-sm tracking-widest flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                            clip-rule="evenodd" />
                    </svg>
                    Add New Product
                </a>
            </div>

            <div class="bg-gray-900 border border-gray-800 rounded-xl overflow-hidden shadow-2xl">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-950 text-emerald-500 uppercase text-xs tracking-[0.2em] font-bold">
                            <th class="p-5">Product Details</th>
                            <th class="p-5 text-center">Price</th>
                            <th class="p-5 text-center">Stock</th>
                            <th class="p-5 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-800">
                        @foreach ($products as $product)
                            <tr class="hover:bg-gray-800/40 transition duration-200">
                                <td class="p-5">
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 rounded bg-gray-950 border border-gray-800 overflow-hidden">
                                            @if ($product->image)
                                                <img src="{{ asset('storage/' . $product->image) }}"
                                                    class="w-full h-full object-cover">
                                            @else
                                                <div
                                                    class="w-full h-full flex items-center justify-center text-[10px] text-gray-600">
                                                    NO IMG</div>
                                            @endif
                                        </div>
                                        <span class="font-bold uppercase tracking-tight">{{ $product->name }}</span>
                                    </div>
                                </td>
                                <td class="p-5 text-center font-mono text-emerald-400">
                                    Rp{{ number_format($product->price, 0, ',', '.') }}
                                </td>
                                <td class="p-5 text-center">
                                    <span class="bg-gray-950 px-3 py-1 rounded-full border border-gray-800 text-sm">
                                        {{ $product->stock }} <span
                                            class="text-gray-500 text-[10px] ml-1 uppercase">pcs</span>
                                    </span>
                                </td>
                                <td class="p-5 text-right">
                                    <div class="flex justify-end gap-2">
                                        <a href="{{ route('products.edit', $product->id) }}"
                                            class="p-2 bg-blue-500/10 text-blue-500 rounded hover:bg-blue-500 hover:text-white transition">
                                            Edit
                                        </a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                            class="inline">
                                            @csrf @method('DELETE')
                                            <button type="submit" onclick="return confirm('Hapus produk ini?')"
                                                class="p-2 bg-red-500/10 text-red-500 rounded hover:bg-red-500 hover:text-white transition">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
