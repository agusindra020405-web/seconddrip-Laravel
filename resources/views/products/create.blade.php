@extends('layouts.app')

@section('content')
    <section class="bg-gray-950 min-h-screen py-10 px-6 md:px-16 text-white font-['Nunito']">
        <div class="max-w-2xl mx-auto">
            <div class="mb-8">
                <a href="{{ route('products.index') }}"
                    class="text-gray-500 hover:text-emerald-500 text-sm uppercase tracking-widest transition flex items-center gap-2">
                    ← Back to Inventory
                </a>
                <h2 class="text-3xl font-black uppercase mt-4">NEW <span class="text-emerald-500">ENTRY</span></h2>
            </div>

            @if ($errors->any())
                <div class="bg-red-500/10 border border-red-500 text-red-500 p-4 rounded-lg mb-6 text-sm">
                    <ul class="list-disc ml-4">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="bg-gray-900 border border-gray-800 p-8 rounded-xl shadow-2xl">
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-[0.2em] text-gray-500 mb-2">Product
                            Name</label>
                        <input type="text" name="name" required placeholder="e.g. Vintage Denim Jacket"
                            class="w-full bg-gray-950 border border-gray-800 rounded-lg py-3 px-4 focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition outline-none">
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-[0.2em] text-gray-500 mb-2">Price
                                (IDR)</label>
                            <input type="number" name="price" required placeholder="0"
                                class="w-full bg-gray-950 border border-gray-800 rounded-lg py-3 px-4 focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition outline-none font-mono">
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-[0.2em] text-gray-500 mb-2">Stock
                                Amount</label>
                            <input type="number" name="stock" required placeholder="0"
                                class="w-full bg-gray-950 border border-gray-800 rounded-lg py-3 px-4 focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition outline-none">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-[0.2em] text-gray-500 mb-2">Product
                            Image</label>
                        <input type="file" name="image"
                            class="w-full bg-gray-950 border border-gray-800 rounded-lg py-2 px-4 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-bold file:bg-emerald-600 file:text-white hover:file:bg-emerald-500 cursor-pointer">
                    </div>

                    <button type="submit"
                        class="w-full bg-emerald-600 hover:bg-emerald-500 text-white font-black py-4 rounded-lg transition duration-300 uppercase tracking-[0.3em] shadow-lg shadow-emerald-900/20">
                        Register Product
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
