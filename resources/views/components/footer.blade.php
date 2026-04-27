<footer class="bg-blue-900 text-white p-10 mt-10">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">
        
        <div>
            <h3 class="font-bold text-xl mb-4 border-b border-blue-400 pb-2">Kontak Kami</h3>
            <p class="text-sm mb-2">📧 {{ '242410101031@mail.unej.ac.id' }}</p>
            <p class="text-sm mb-2">📞 +62 {{ '12345678910' }}</p>
        </div>

        <div>
            <h3 class="font-bold text-xl mb-4 border-b border-blue-400 pb-2">Navigasi</h3>
            <ul class="text-sm space-y-2">
                <li><a href="/?username={{ request('username') }}&role={{ request('role') }}" class="hover:underline">Beranda Dashboard</a></li>
                <li><a href="/pengelolaan?username={{ request('username') }}&role={{ request('role') }}" class="hover:underline">Daftar Hewan Pet</a></li>
                <li><a href="/login" class="hover:underline">Halaman Masuk</a></li>
            </ul>
        </div>

        <div>
            <h3 class="font-bold text-xl mb-4 border-b border-blue-400 pb-2">Lokasi Kami</h3>
            <p class="text-sm leading-relaxed">
                Jl. Kalimantan No. 37, No. 123 <br>
                Kec. Sumbersari, Kabupaten Jember,<br>
                Jawa Timur, Indonesia.
            </p>
        </div>

    </div>

    <div class="border-t border-blue-800 mt-3 pt-10 text-center text-xs text-blue-300">
        &copy; 2026 AdoptMe Project - Dibuat untuk memenuhi tugas UTS 2025.
    </div>
</footer>