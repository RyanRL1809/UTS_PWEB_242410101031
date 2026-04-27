<nav class="bg-blue-900 text-white shadow-lg p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="/" class="text-2xl font-bold tracking-wide">🐾 AdoptMe</a>
        
        <div class="space-x-6 font-medium flex items-center">
            <a href="/" class="hover:text-blue-300 transition">Dashboard</a>
            <a href="/pengelolaan?username={{ request('username') }}&role={{ request('role') }}" class="hover:text-blue-100 transition duration-150">PET</a>
            @if(request('username'))
                <a href="/profile?username={{ request('username') }}&role={{ request('role') }}" class="hover:text-blue-300 transition">Profile</a>
                
                <a href="/" class="bg-red-500 text-white px-4 py-2 rounded shadow hover:bg-red-600 transition">Logout</a>
            @else
                <a href="/login" class="bg-white text-blue-900 px-4 py-2 rounded shadow hover:bg-gray-200 transition">Login</a>
            @endif
        </div>
    </div>
</nav>