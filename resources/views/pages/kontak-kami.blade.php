<x-layouts.app :title="'Kontak Kami'">
    <section class="max-w-7xl mx-auto px-6 py-12">
        <h1 class="text-3xl font-semibold mb-4 text-[#d40000]">Kontak Kami</h1>
        <p class="text-[#706f6c] mb-6">Hubungi kami untuk kemitraan, pertanyaan, atau dukungan.</p>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="space-y-4">
                <div class="border border-[#e3e3e0] rounded-sm p-5 bg-white">
                    <h3 class="font-medium mb-2 text-[#d40000]">Kantor Pusat</h3>
                    <p class="text-sm text-[#706f6c]">Jl. Contoh No. 123, Jakarta, Indonesia</p>
                </div>
                <div class="border border-[#e3e3e0] rounded-sm p-5 bg-white">
                    <h3 class="font-medium mb-2 text-[#d40000]">Email</h3>
                    <p class="text-sm text-[#706f6c]">hello@batanghariindahnegeri.co.id</p>
                </div>
                <div class="border border-[#e3e3e0] rounded-sm p-5 bg-white">
                    <h3 class="font-medium mb-2 text-[#d40000]">Telepon</h3>
                    <p class="text-sm text-[#706f6c]">+62 21 1234 5678</p>
                </div>
            </div>
            <form class="space-y-4">
                <div>
                    <label class="block text-sm mb-1" for="nama">Nama</label>
                    <input id="nama" type="text" class="w-full border border-[#e3e3e0] rounded-sm px-3 py-2 bg-white" placeholder="Nama Anda" />
                </div>
                <div>
                    <label class="block text-sm mb-1" for="email">Email</label>
                    <input id="email" type="email" class="w-full border border-[#e3e3e0] rounded-sm px-3 py-2 bg-white" placeholder="email@contoh.com" />
                </div>
                <div>
                    <label class="block text-sm mb-1" for="pesan">Pesan</label>
                    <textarea id="pesan" rows="4" class="w-full border border-[#e3e3e0] rounded-sm px-3 py-2 bg-white" placeholder="Tuliskan pesan Anda"></textarea>
                </div>
                <button type="button" class="px-5 py-2 bg-[#d40000] text-white rounded-sm text-sm">Kirim</button>
            </form>
        </div>
    </section>
</x-layouts.app>


