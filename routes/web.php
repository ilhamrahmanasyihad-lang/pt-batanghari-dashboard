<?php

use Illuminate\Support\Facades\Route;

// Beranda (Home)
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Perusahaan
Route::get('/perusahaan', function () {
    return view('pages.perusahaan');
})->name('perusahaan');

// Produk dan Layanan
Route::get('/produk-layanan', function () {
    return view('pages.produk-layanan');
})->name('produk.layanan');

// Informasi
Route::get('/informasi', function () {
    return view('pages.informasi');
})->name('informasi');

// Berita
Route::get('/berita', function () {
    return view('pages.berita');
})->name('berita');

// Karir
Route::get('/karir', function () {
    return view('pages.karir');
})->name('karir');

// Kontak Kami
Route::get('/kontak', function () {
    return view('pages.kontak-kami');
})->name('kontak');

// Pegawai (Struktur Organisasi)
Route::get('/pegawai', function () {
    return view('pages.pegawai');
})->name('pegawai');
