@extends('app')

@section('content')
<div class="mb-8">
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-2xl font-bold text-blue-900">Daftar Pet AdoptMe</h2>
            <p class="text-gray-600 text-sm mt-1">Pilih sahabat barumu dari daftar di bawah ini.</p>
        </div>
        
        @if($role == 'admin')
        <button class="bg-green-600 text-white px-4 py-2 rounded font-bold hover:bg-green-700 transition text-sm">
            + Tambah Data Pet
        </button>
        @endif
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        @foreach($hewan as $pet)
        
        <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm">
            <div class="relative">
                <img src="{{ $pet['gambar'] }}" alt="{{ $pet['nama'] }}" class="w-full h-48 object-cover">
                
                @if($role == 'admin')
                <a href="#" class="absolute top-2 right-2 bg-white text-gray-800 w-8 h-8 rounded-full flex items-center justify-center shadow-md border border-gray-200">
                    ✏️
                </a>
                @endif
            </div>

            <div class="p-5">
                <h3 class="font-bold text-xl mb-1 text-gray-800">{{ $pet['nama'] }}</h3>
                <p class="text-gray-600 text-sm mb-1"><b>Jenis:</b> {{ $pet['jenis'] }}</p>
                <p class="text-gray-600 text-sm mb-4"><b>Umur:</b> {{ $pet['umur'] }}</p>
                
                <button class="w-full bg-orange-500 text-white py-2 rounded font-bold hover:bg-orange-600 transition">
                    Adopsi {{ $pet['nama'] }}
                </button>
            </div>
        </div>

        @endforeach
        </div>
</div>
@endsection