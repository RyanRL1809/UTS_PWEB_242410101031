<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard(Request $request) {
        $username = $request->username;
        $role = $request->role;

        return view('dashboard', [
            'username' => $username,
            'role' => $role
        ]);
    }

    public function login() {
        return view('login');
    }

    public function processLogin(Request $request) {
    $username = $request->username;
    $password = $request->password;

    if ($username === 'admin') {
        if ($password === '1234'){
            return redirect('/?username=' . $username . '&role=admin');
        } else {
            return redirect('/login?error=Password Admin salah!');
        }}
    else {
        return redirect('/?username=' . $username . '&role=pelanggan');
    }}

    public function profile(Request $request) {
        if (!$request->username) {
            return redirect('/login');
        }

        return view('profile', [
            'username' => $request->username,
            'role' => $request->role
        ]);
    }

    public function pengelolaan(Request $request) {
        $data_pet = [
            [
                'nama' => 'Max',
                'jenis' => 'Anjing (Golden Retriever)',
                'umur' => '2 Tahun',
                'gambar' => 'https://images.unsplash.com/photo-1543466835-00a7907e9de1?auto=format&fit=crop&w=400&q=80'
            ],
            [
                'nama' => 'Luna',
                'jenis' => 'Kucing (Persia)',
                'umur' => '1 Tahun',
                'gambar' => 'https://images.unsplash.com/flagged/photo-1573977187225-360187080bab?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8ZG9nJTIwY3V0ZXxlbnwwfDB8MHx8fDA%3D'
            ],
            [
                'nama' => 'Milo',
                'jenis' => 'Anjing (Corgi)',
                'umur' => '8 Bulan',
                'gambar' => 'https://images.unsplash.com/photo-1623865766092-3e5ab9882b21?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGRvZyUyMGN1dGV8ZW58MHwwfDB8fHww'
            ]
        ];

        return view('pengelolaan', [
            'username' => $request->username,
            'role' => $request->role,
            'hewan' => $data_pet
        ]);
    }
}