@extends('layouts.tenant')

@section('title', 'Portfolio & Projek - ' . $tenant->name)

@section('content')
<section class="py-16 bg-slate-900 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <span class="text-xs font-bold text-sky-400 uppercase tracking-widest block mb-2">Rekam Jejak Karya</span>
        <h1 class="text-4xl font-extrabold text-white">Portfolio & Studi Kasus Proyek</h1>
        <p class="text-slate-300 text-sm mt-3 max-w-2xl">Bukti nyata dedikasi dan keberhasilan kami dalam menyelesaikan proyek strategis bersama mitra bisnis.</p>
    </div>
</section>

<section class="py-20 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="glass-panel p-6 rounded-2xl border border-slate-800 space-y-4">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80" alt="Project 1" class="w-full h-60 object-cover rounded-xl border border-slate-800">
                <div>
                    <span class="text-[10px] font-bold text-sky-400 uppercase tracking-wider">Klien: National Infrastructure Group</span>
                    <h3 class="text-xl font-bold text-white mt-1">Modernisasi Sistem Komunikasi Terpadu</h3>
                    <p class="text-xs text-slate-400 mt-2 leading-relaxed">Pengembangan infrastruktur data terdistribusi di 34 provinsi dengan pemrosesan real-time berkinerja tinggi.</p>
                </div>
            </div>

            <div class="glass-panel p-6 rounded-2xl border border-slate-800 space-y-4">
                <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=800&q=80" alt="Project 2" class="w-full h-60 object-cover rounded-xl border border-slate-800">
                <div>
                    <span class="text-[10px] font-bold text-purple-400 uppercase tracking-wider">Klien: Global Financial Holding</span>
                    <h3 class="text-xl font-bold text-white mt-1">Transformasi Ekosistem Digital Banking</h3>
                    <p class="text-xs text-slate-400 mt-2 leading-relaxed">Migrasi arsitektur legacy ke microservices modern dengan skala kapasitas transaksi harian jutaan pemakai.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
