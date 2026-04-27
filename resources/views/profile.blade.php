@extends('app')

@section('content')
<div class="p-5 mt-5 bg-white border-2 border-gray-400 mx-auto w-96 text-center">
    
    <h2 class="text-2xl font-bold mb-5">Profil Pengguna</h2>
    
    <div class="text-6xl mb-5">👤</div>
    
    <p class="mb-2">Username:</p>
    <p class="font-bold text-xl mb-4">{{ $username }}</p>

    <p class="mb-2">Status Akun:</p>
    <p class="font-bold text-xl uppercase mb-8">{{ $role }}</p>

    <a href="/?username={{ $username }}&role={{ $role }}" class="bg-blue-600 text-white font-bold p-3 border border-black">
        Kembali ke Dashboard
    </a>
    
</div>
@endsection