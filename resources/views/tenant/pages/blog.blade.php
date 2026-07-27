@extends('layouts.tenant')

@section('title', 'Artikel & Berita - ' . $tenant->name)

@section('content')
<section class="py-16 bg-slate-900 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <span class="text-xs font-bold text-sky-400 uppercase tracking-widest block mb-2">Pusat Informasi</span>
        <h1 class="text-4xl font-extrabold text-white">Artikel, Insight & Berita Terbaru</h1>
        <p class="text-slate-300 text-sm mt-3 max-w-2xl">Wawasan industri, kabar perkembangan terbaru, dan tips strategis dari pakar {{ $tenant->name }}.</p>
    </div>
</section>

<section class="py-20 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="glass-panel rounded-2xl overflow-hidden border border-slate-800 flex flex-col justify-between">
                <div>
                    <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=600&q=80" alt="Article 1" class="w-full h-44 object-cover">
                    <div class="p-6 space-y-2">
                        <span class="text-[10px] font-bold text-sky-400 uppercase">Teknologi & Tren</span>
                        <h3 class="text-lg font-bold text-white leading-snug">Tren Transformasi Digital Perusahaan Indonesia Tahun 2026</h3>
                        <p class="text-xs text-slate-400 mt-2 line-clamp-3">Analisis mendalam mengenai arah adopsi kecerdasan buatan dan cloud komputasi di sektor industri korporat.</p>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-2 text-xs text-slate-500 flex items-center justify-between border-t border-slate-900 mt-4">
                    <span>24 Juli 2026</span>
                    <span class="font-bold text-sky-400">Baca Selengkapnya &rarr;</span>
                </div>
            </div>

            <div class="glass-panel rounded-2xl overflow-hidden border border-slate-800 flex flex-col justify-between">
                <div>
                    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=600&q=80" alt="Article 2" class="w-full h-44 object-cover">
                    <div class="p-6 space-y-2">
                        <span class="text-[10px] font-bold text-indigo-400 uppercase">Keamanan Sistem</span>
                        <h3 class="text-lg font-bold text-white leading-snug">Panduan Lengkap Perlindungan Data Sensitif Perusahaan</h3>
                        <p class="text-xs text-slate-400 mt-2 line-clamp-3">Langkah krusial memperkuat arsitektur cyber security di era ancaman siber yang kian kompleks.</p>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-2 text-xs text-slate-500 flex items-center justify-between border-t border-slate-900 mt-4">
                    <span>18 Juli 2026</span>
                    <span class="font-bold text-indigo-400">Baca Selengkapnya &rarr;</span>
                </div>
            </div>

            <div class="glass-panel rounded-2xl overflow-hidden border border-slate-800 flex flex-col justify-between">
                <div>
                    <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=600&q=80" alt="Article 3" class="w-full h-44 object-cover">
                    <div class="p-6 space-y-2">
                        <span class="text-[10px] font-bold text-purple-400 uppercase">Manajemen Bisnis</span>
                        <h3 class="text-lg font-bold text-white leading-snug">Membangun Budaya Kerja Berkinerja Tinggi</h3>
                        <p class="text-xs text-slate-400 mt-2 line-clamp-3">Strategi kepemimpinan dalam mendorong kolaborasi dan produktivitas tim lintas divisi.</p>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-2 text-xs text-slate-500 flex items-center justify-between border-t border-slate-900 mt-4">
                    <span>10 Juli 2026</span>
                    <span class="font-bold text-purple-400">Baca Selengkapnya &rarr;</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
