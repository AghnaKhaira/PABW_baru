<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    public function dashboard() {
        return view('developer.dashboard', ['sidebar' => 'layout.sidebar-developer', 'title' => 'Dashboard Developer']);
    }

    public function proyek() {
        return view('developer.proyek', ['sidebar' => 'layout.sidebar-developer', 'title' => 'Proyek Tersedia']);
    }

    public function pesan() {
        return view('developer.pesan', ['sidebar' => 'layout.sidebar-developer', 'title' => 'Pesan']);
    }

    public function profil() {
        return view('developer.profil', ['sidebar' => 'layout.sidebar-developer', 'title' => 'Profil Developer']);
    }
}
