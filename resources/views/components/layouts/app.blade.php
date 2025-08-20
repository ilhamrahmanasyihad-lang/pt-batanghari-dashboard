<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'Perusahaan' }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-white text-[#1b1b18] flex flex-col">
        <header class="border-b border-[#e3e3e0] bg-white/80 backdrop-blur">
            <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
                <a href="{{ route('home') }}" class="text-xl font-semibold text-[#d40000]">Batanghari Indah Negeri</a>
                <nav class="flex items-center gap-6 text-sm">
                    <a class="hover:text-[#d40000]" href="{{ route('home') }}">Beranda</a>
                    <a class="hover:text-[#d40000]" href="{{ route('perusahaan') }}">Perusahaan</a>
                    <a class="hover:text-[#d40000]" href="{{ route('produk.layanan') }}">Produk & Layanan</a>
                    <a class="hover:text-[#d40000]" href="{{ route('informasi') }}">Informasi</a>
                    <a class="hover:text-[#d40000]" href="{{ route('berita') }}">Berita</a>
                    <a class="hover:text-[#d40000]" href="{{ route('karir') }}">Karir</a>
                    <a class="hover:text-[#d40000]" href="{{ route('pegawai') }}">Pegawai</a>
                    <a class="hover:text-[#d40000]" href="{{ route('kontak') }}">Kontak Kami</a>
                </nav>
            </div>
        </header>

        <main class="flex-1">
            {{ $slot }}
        </main>

        <footer class="mt-12 border-t border-[#e3e3e0] dark:border-[#3E3E3A]">
            <div class="max-w-7xl mx-auto px-6 py-8 text-sm text-[#706f6c] dark:text-[#A1A09A]">
                <p>&copy; {{ date('Y') }} Batanghari Indah Negeri. Semua hak dilindungi.</p>
            </div>
        </footer>
    </body>
    </html>


