<x-layouts.app :title="'Karir'">
    <section class="max-w-7xl mx-auto px-6 py-12">
        <h1 class="text-3xl font-semibold mb-4 text-[#d40000]">Karir</h1>
        <p class="text-[#706f6c] mb-6">Bergabunglah dengan kami dan tumbuh bersama.</p>

        <div class="space-y-4">
            @foreach ([
                ['posisi' => 'Software Engineer', 'lokasi' => 'Jakarta / Remote'],
                ['posisi' => 'Business Analyst', 'lokasi' => 'Bandung / Hybrid'],
                ['posisi' => 'Customer Success', 'lokasi' => 'Surabaya / Onsite'],
            ] as $loker)
                <div class="border border-[#e3e3e0] rounded-sm p-5 bg-white flex items-center justify-between">
                    <div>
                        <h3 class="font-medium text-[#d40000]">{{ $loker['posisi'] }}</h3>
                        <p class="text-sm text-[#706f6c]">{{ $loker['lokasi'] }}</p>
                    </div>
                    <a href="#" class="text-sm px-4 py-2 border border-[#d40000] text-[#d40000] rounded-sm">Lamar</a>
                </div>
            @endforeach
        </div>
    </section>
</x-layouts.app>


