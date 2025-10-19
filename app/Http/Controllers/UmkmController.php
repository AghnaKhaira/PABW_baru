<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function dashboard() {
        return view('umkm.dashboard', ['sidebar' => 'layout.sidebar-umkm', 'title' => 'Dashboard UMKM']);
    }

    public function proyek() {
        return view('umkm.proyek', ['sidebar' => 'layout.sidebar-umkm', 'title' => 'Proyek Saya']);
    }

    public function pesan() {
        return view('umkm.pesan', ['sidebar' => 'layout.sidebar-umkm', 'title' => 'Pesan']);
    }

    public function profil() {
        return view('umkm.profil', ['sidebar' => 'layout.sidebar-umkm', 'title' => 'Profil UMKM']);
    }
}
