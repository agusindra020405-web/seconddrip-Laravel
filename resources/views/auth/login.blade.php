@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-[#0b1220]">
    
    <div class="bg-[#111827] p-8 rounded-xl w-full max-w-md shadow-lg">
        
        <h2 class="text-white text-2xl text-center mb-6 font-bold">LOGIN</h2>

        @if(session('error'))
            <p class="text-red-500 text-sm mb-3 text-center">
                {{ session('error') }}
            </p>
        @endif

        <form method="POST" action="/login">
            @csrf 

            <input type="email" name="email" placeholder="Email" 
                class="w-full mb-4 p-3 rounded bg-gray-800 text-white focus:outline-none">

            <input type="password" name="password" placeholder="Password"
                class="w-full mb-4 p-3 rounded bg-gray-800 text-white focus:outline-none">

            <button class="w-full bg-green-500 hover:bg-green-600 text-white py-3 rounded">
                LOGIN
            </button>
        </form>

        <p class="text-gray-400 text-sm mt-4 text-center">
            Belum punya akun?
            <a href="/register" class="text-green-400">Daftar</a>
        </p>

    </div>

</div>
@endsection