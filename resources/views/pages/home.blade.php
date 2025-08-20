<x-layouts.app :title="'Beranda'">
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-6 py-16 grid lg:grid-cols-2 gap-10 items-center">
            <div>
                <h1 class="text-4xl font-semibold mb-4 text-[#d40000]">Mewujudkan Nilai Untuk Negeri</h1>
                <p class="text-[#706f6c] mb-6">
                    Batanghari Indah Negeri adalah perusahaan yang berfokus pada inovasi, kualitas, dan keberlanjutan.
                    Kami menghadirkan produk dan layanan yang berdampak, mendorong pertumbuhan pelanggan serta kemajuan bangsa.
                </p>
                <div class="flex gap-3">
                    <a href="{{ route('produk.layanan') }}" class="px-5 py-2 bg-[#d40000] text-white rounded-sm text-sm">Lihat Produk & Layanan</a>
                    <a href="{{ route('perusahaan') }}" class="px-5 py-2 border border-[#d40000] text-[#d40000] rounded-sm text-sm">Tentang Perusahaan</a>
                </div>
            </div>
            <div class="rounded-lg overflow-hidden border border-[#e3e3e0] bg-white p-6">
                <h3 class="font-medium mb-2 text-[#d40000]">Visi</h3>
                <p class="text-sm text-[#706f6c] mb-4">
                    Menjadi perusahaan terdepan di Indonesia dalam menyediakan solusi terintegrasi yang berkelanjutan,
                    bernilai tambah, dan terpercaya.
                </p>
                <h3 class="font-medium mb-2 text-[#d40000]">Misi</h3>
                <ul class="text-sm text-[#706f6c] list-disc pl-5 space-y-1">
                    <li>Menghadirkan produk berkualitas dengan inovasi berkelanjutan.</li>
                    <li>Melayani pelanggan dengan standar layanan terbaik.</li>
                    <li>Membangun kemitraan strategis untuk menjangkau lebih banyak nilai.</li>
                    <li>Berperan aktif dalam praktik bisnis yang etis dan ramah lingkungan.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 py-16">
        <h2 class="text-2xl font-semibold mb-6 text-[#d40000]">Produk & Layanan Unggulan</h2>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="border border-[#e3e3e0] rounded-sm p-5 bg-white">
                <h3 class="font-medium mb-2 text-[#d40000]">Konsultasi Bisnis</h3>
                <p class="text-sm text-[#706f6c]">Pendampingan strategi, operasi, dan digitalisasi untuk akselerasi pertumbuhan.</p>
            </div>
            <div class="border border-[#e3e3e0] rounded-sm p-5 bg-white">
                <h3 class="font-medium mb-2 text-[#d40000]">Pengembangan Perangkat Lunak</h3>
                <p class="text-sm text-[#706f6c]">Solusi custom web, mobile, dan integrasi sistem berbasis cloud.</p>
            </div>
            <div class="border border-[#e3e3e0] rounded-sm p-5 bg-white">
                <h3 class="font-medium mb-2 text-[#d40000]">Operasi & Pemeliharaan</h3>
                <p class="text-sm text-[#706f6c]">Layanan purna jual dan dukungan 24/7 untuk memastikan keandalan.</p>
            </div>
        </div>
    </section>
</x-layouts.app>


