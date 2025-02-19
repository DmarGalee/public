<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Method untuk menampilkan pesan Selamat Datang
    public function index() {
        return 'Selamat Datang';
    }

    // Method untuk menampilkan Nama dan NIM
    public function about() {
        return '2341720200_DamarGalih';
    }

    // Method untuk menampilkan Artikel dengan ID
    public function articles($id) {
        return "Halaman Artikel dengan ID " . $id;
    }
}
