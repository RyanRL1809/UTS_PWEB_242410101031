@extends('app')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded-xl shadow-md border border-gray-200 mt-10">
    <h2 class="text-3xl font-extrabold text-blue-900 mb-6 text-center">Login ke AdoptMe</h2>

    @if(request('error'))
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-5 rounded">
            {{ request('error') }}
        </div>
    @endif

    <form action="/login-process" method="GET">
        <div class="mb-5">
            <label class="block text-blue-900 font-bold mb-2">Username</label>
            <input type="text" name="username" class="w-full border-2 border-gray-300 p-3 rounded-lg focus:outline-none focus:border-blue-900" required>
        </div>
        <div class="mb-5">
            <label class="block text-blue-900 font-bold mb-2">Password</label>
            <input type="password" name="password" class="w-full border-2 border-gray-300 p-3 rounded-lg focus:outline-none focus:border-blue-900" required>
        </div>
        <button type="submit" class="w-full bg-blue-900 text-white font-bold p-3 rounded-lg hover:bg-blue-800 transition">Masuk</button>
    </form>
</div>
@endsection