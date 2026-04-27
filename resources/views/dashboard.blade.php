@extends('app')

@section('content')
    <div class="bg-blue-900 text-white p-8 rounded-lg mb-10 flex flex-col md:flex-row items-center gap-8">
        
        <div class="md:w-3/5 z-10 relative">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 leading-tight">Berikan Mereka <br> <span class="text-orange-400">Kesempatan Kedua</span> 🐾</h1>
            <p class="text-lg mb-8 text-blue-100 max-w-xl">
                Ribuan sahabat setia sedang menunggu rumah yang hangat. Mulai petualangan barumu hari ini dan temukan cinta tanpa syarat bersama AdoptMe.
            </p>
            <a href="/pengelolaan?username={{ request('username') }}&role={{ request('role') }}" class="inline-block bg-orange-500 text-white font-bold px-8 py-3 rounded-full hover:bg-orange-600 shadow-lg hover:shadow-xl transition transform hover:-translate-y-1">
                Daftar Anjing untuk Diadopsi
            </a>
        </div>

        <div class="md:w-3/5 grid grid-cols-2 gap-4 w-full">
            <div>
                <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?q=80&w=400&auto=format&fit=crop" alt="Kucing Lucu" class="rounded-lg max-w-full h-auto shadow-md border-2 border-white">
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1543466835-00a7907e9de1?auto=format&fit=crop&w=400&q=80" alt="Anjing Lucu" class="rounded-lg max-w-full h-auto shadow-md border-2 border-white">
            </div>
        </div>

    </div>

    <div class="bg-white p-6 rounded-lg border border-gray-200 mb-10">
        <h2 class="text-xl font-bold text-blue-900 mb-2">Tentang AdoptMe</h2>
        <p class="text-gray-700">
            AdoptMe adalah platform sederhana untuk membantu kamu menemukan anjing yang tepat untuk diadopsi. Kami memastikan proses yang mudah dan transparan.
        </p>
    </div>

    <h2 class="text-xl font-bold text-blue-900 mb-4">Tips Perawatan Anjing</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        
        <div class="bg-white border border-gray-200 rounded p-4">
            <img src="https://images.unsplash.com/photo-1444212477490-ca407925329e?q=80&w=1228&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full h-32 object-cover rounded mb-3" alt="Makanan">
            <h3 class="font-bold text-lg mb-1">Makanan Bergizi</h3>
            <p class="text-sm text-gray-600">Berikan dog food berkualitas dan air minum yang bersih setiap hari.</p>
        </div>

        <div class="bg-white border border-gray-200 rounded p-4">
            <img src="https://images.unsplash.com/photo-1514984879728-be0aff75a6e8?q=80&w=1084&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full h-32 object-cover rounded mb-3" alt="Vaksin">
            <h3 class="font-bold text-lg mb-1">Vaksin Rutin</h3>
            <p class="text-sm text-gray-600">Pastikan anjing divaksinasi ke dokter hewan untuk mencegah penyakit mematikan.</p>
        </div>

        <div class="bg-white border border-gray-200 rounded p-4">
            <img src="https://images.unsplash.com/photo-1450778869180-41d0601e046e?q=80&w=1286&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full h-32 object-cover rounded mb-3" alt="Jalan-jalan">
            <h3 class="font-bold text-lg mb-1">Olahraga</h3>
            <p class="text-sm text-gray-600">Ajak anjingmu jalan-jalan sore agar mereka tidak stres dan tetap sehat.</p>
        </div>
    </div>

@endsection