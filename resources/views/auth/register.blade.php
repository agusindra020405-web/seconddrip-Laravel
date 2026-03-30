@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-[#0b1220]">
    <div class="bg-[#111827] p-8 rounded-xl w-full max-w-md shadow-lg">
        
        <h2 class="text-2xl font-bold text-white text-center mb-6">
            REGISTER
        </h2>

        <form method="POST" action="/register">
            @csrf

            <input type="text" name="name" placeholder="Nama"
                class="w-full mb-4 p-3 rounded bg-gray-800 text-white">

            <input type="email" name="email" placeholder="Email"
                class="w-full mb-4 p-3 rounded bg-gray-800 text-white">

            <input type="password" name="password" placeholder="Password"
                class="w-full mb-4 p-3 rounded bg-gray-800 text-white">

            <button class="w-full bg-green-500 hover:bg-green-600 text-white py-3 rounded">
                DAFTAR
            </button>
        </form>

        <p class="text-gray-400 text-sm mt-4 text-center">
            Sudah punya akun?
            <a href="/login" class="text-green-400">Login</a>
        </p>
    </div>
</div>
@endsection