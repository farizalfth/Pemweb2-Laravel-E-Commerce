<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    // Method untuk menampilkan halaman utama
    public function index()
    {
        $title = 'Selamat Datang di Homepage';  // Judul halaman utama

        // Mengirimkan data ke view 'homepage'
        return view('homepage', compact('title'));
    }

    // Method untuk menampilkan produk
    public function products()
    {
        // Daftar produk yang ingin ditampilkan
        $products = [
        
        ];

        // Mengirimkan data produk ke view 'products'
        return view('products', compact('products'));
    }

    // Method untuk menampilkan kategori produk
    public function category()
    {
        // Daftar kategori produk yang ingin ditampilkan
        $categories = [
            'Carier Arei',
            'Jaket Gropcore',
            'TrackingPole'
        ];

        // Mengirimkan data kategori ke view 'categories'
        return view('categories', compact('categories'));
    }
}
