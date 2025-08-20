<x-layouts.app :title="'Pegawai'">
    <section class="max-w-7xl mx-auto px-6 py-12">
        <h1 class="text-3xl font-semibold mb-4 text-[#d40000]">Struktur Organisasi & Pegawai</h1>
        <p class="text-[#706f6c] mb-8">Struktur terdiri dari 1 Pimpinan, 1 Wakil Pimpinan, 3 Sub Divisi, dan 40 Anggota.</p>

        <!-- Pimpinan & Wakil Pimpinan -->
        <div class="grid md:grid-cols-2 gap-6 mb-10">
            <div class="border border-[#e3e3e0] rounded-sm p-5 bg-white">
                <h3 class="font-medium text-[#d40000] mb-1">Pimpinan</h3>
                <p class="text-sm text-[#706f6c]">Bapak/Ibu Pimpinan Utama</p>
            </div>
            <div class="border border-[#e3e3e0] rounded-sm p-5 bg-white">
                <h3 class="font-medium text-[#d40000] mb-1">Wakil Pimpinan</h3>
                <p class="text-sm text-[#706f6c]">Bapak/Ibu Wakil Pimpinan</p>
            </div>
        </div>

        <!-- Sub Divisi -->
        <div class="grid md:grid-cols-3 gap-6">
            @php
                $subDivisi = [
                    ['nama' => 'Sub Divisi Operasional', 'anggota' => 14],
                    ['nama' => 'Sub Divisi Teknologi', 'anggota' => 13],
                    ['nama' => 'Sub Divisi Layanan', 'anggota' => 13],
                ];
            @endphp

            @foreach($subDivisi as $idx => $div)
                <div class="border border-[#e3e3e0] rounded-sm p-5 bg-white">
                    <h3 class="font-medium text-[#d40000] mb-2">{{ $div['nama'] }}</h3>
                    <p class="text-sm text-[#706f6c] mb-4">Kepala Sub Divisi: Kepala {{ $div['nama'] }}</p>
                    <div class="grid grid-cols-1 gap-2">
                        @for ($i = 1; $i <= $div['anggota']; $i++)
                            <div class="flex items-center justify-between border border-[#e3e3e0] rounded-sm px-3 py-2">
                                <span class="text-sm">Anggota {{ $i + ($idx === 0 ? 0 : ($idx === 1 ? 14 : 27)) }}</span>
                                <span class="text-xs text-[#d40000]">Aktif</span>
                            </div>
                        @endfor
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</x-layouts.app>


