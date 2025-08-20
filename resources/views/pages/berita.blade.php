<x-layouts.app :title="'Berita'">
    <section class="max-w-7xl mx-auto px-6 py-12">
        <h1 class="text-3xl font-semibold mb-4 text-[#d40000]">Berita</h1>
        <p class="text-[#706f6c] mb-6">Kabar terbaru dari Batanghari Indah Negeri.</p>

        <div class="grid md:grid-cols-3 gap-6">
            @foreach (range(1,3) as $i)
                <article class="border border-[#e3e3e0] rounded-sm p-5 bg-white">
                    <h3 class="font-medium mb-2 text-[#d40000]">Rilis Pers #{{ $i }}</h3>
                    <p class="text-sm text-[#706f6c] mb-3">Ringkasan singkat berita perusahaan ke-{{ $i }}.</p>
                    <a href="#" class="text-sm text-[#d40000] underline underline-offset-4">Baca selengkapnya</a>
                </article>
            @endforeach
        </div>
    </section>
</x-layouts.app>


