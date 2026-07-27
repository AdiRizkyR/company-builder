@extends('layouts.tenant')

@section('title', 'Kontak Kami - ' . $tenant->name)

@section('content')
<section class="py-16 bg-slate-900 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <span class="text-xs font-bold text-sky-400 uppercase tracking-widest block mb-2">Hubungi Kami</span>
        <h1 class="text-4xl font-extrabold text-white">Kontak & Lokasi Perusahaan</h1>
        <p class="text-slate-300 text-sm mt-3 max-w-2xl">Kami siap membantu dan menjawab segala pertanyaan seputar kerjasama bisnis dengan {{ $tenant->name }}.</p>
    </div>
</section>

<section class="py-20 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="glass-panel p-8 rounded-2xl border border-slate-800 space-y-6">
                <h2 class="text-xl font-bold text-white">Kirim Pesan Langsung</h2>
                <form class="space-y-4">
                    <div>
                        <label class="block text-xs font-bold text-slate-300 mb-1">Nama Lengkap *</label>
                        <input type="text" placeholder="Masukkan nama Anda" class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-slate-100 text-xs focus:border-sky-500 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-300 mb-1">Email Perusahaan *</label>
                        <input type="email" placeholder="nama@perusahaan.com" class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-slate-100 text-xs focus:border-sky-500 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-300 mb-1">Nomor Telepon / WhatsApp</label>
                        <input type="text" placeholder="+62 812..." class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-slate-100 text-xs focus:border-sky-500 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-300 mb-1">Pesan / Diskusi Kebutuhan *</label>
                        <textarea rows="4" placeholder="Tuliskan pesan atau detail pertanyaan Anda..." class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-slate-100 text-xs focus:border-sky-500 focus:outline-none"></textarea>
                    </div>
                    <button type="button" class="w-full py-3.5 rounded-xl bg-sky-600 hover:bg-sky-500 text-white font-bold text-xs shadow-lg shadow-sky-600/30 transition">
                        Kirim Pesan &rarr;
                    </button>
                </form>
            </div>

            <!-- Contact Info & Map Mock -->
            <div class="space-y-8">
                <div class="glass-panel p-8 rounded-2xl border border-slate-800 space-y-6">
                    <h2 class="text-xl font-bold text-white">Informasi Kantor Pusat</h2>
                    <div class="space-y-4 text-xs text-slate-300">
                        <div class="flex items-start gap-3">
                            <span class="text-sky-400 font-bold text-base">📍</span>
                            <div>
                                <span class="font-bold text-white block">Alamat Kantor</span>
                                <span>{{ $tenant->contact['address'] ?? 'Jakarta Selatan' }}</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="text-sky-400 font-bold text-base">📞</span>
                            <div>
                                <span class="font-bold text-white block">Telepon Kantor</span>
                                <span>{{ $tenant->contact['phone'] ?? '+62 21 0000' }}</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="text-sky-400 font-bold text-base">✉️</span>
                            <div>
                                <span class="font-bold text-white block">Email Resmi</span>
                                <span>{{ $tenant->contact['email'] ?? 'info@tenant.com' }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Google Maps Frame Mock -->
                <div class="rounded-2xl overflow-hidden border border-slate-800 h-64 bg-slate-900 relative">
                    <iframe src="{{ $tenant->contact['maps_embed'] ?? '' }}" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" class="opacity-80"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
