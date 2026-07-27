@extends('layouts.customer')

@section('title', 'Dashboard - Customer Portal')
@section('page_title', 'Ringkasan Performa Website Perusahaan')

@section('content')

<!-- Subscription Status Banner (Light Clean Design) -->
<div class="p-6 rounded-2xl bg-gradient-to-r from-indigo-600 via-indigo-700 to-purple-600 text-white shadow-md mb-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
    <div class="space-y-1">
        <div class="flex items-center gap-2">
            <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold uppercase bg-white/20 text-white border border-white/30">Enterprise Plan</span>
            <span class="text-xs text-indigo-100">Aktif s/d 24 Des 2027</span>
        </div>
        <h2 class="text-xl font-bold text-white">Google Indonesia Website Profile</h2>
        <p class="text-xs text-indigo-100">URL Publik: <a href="{{ url('/google-indonesia') }}" target="_blank" class="underline font-mono font-bold hover:text-white">primaryweb.com/google-indonesia</a></p>
    </div>
    <div class="flex items-center gap-3">
        <a href="{{ url('/customer/builder') }}" class="px-4 py-2.5 rounded-xl bg-white hover:bg-indigo-50 text-indigo-700 text-xs font-bold shadow transition flex items-center gap-1.5">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
            Buka Section Builder
        </a>
    </div>
</div>

<!-- Metrics Cards Grid (Light Cards) -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm">
        <div class="flex items-center justify-between text-slate-500 mb-2">
            <span class="text-xs font-semibold">Total Pengunjung</span>
            <span class="text-xs font-bold text-emerald-700 bg-emerald-100 px-2 py-0.5 rounded">+18.4%</span>
        </div>
        <span class="text-3xl font-extrabold text-slate-900 block">48,250</span>
        <span class="text-[11px] text-slate-500 mt-1 block">Unik Visitor (Bulan Ini)</span>
    </div>

    <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm">
        <div class="flex items-center justify-between text-slate-500 mb-2">
            <span class="text-xs font-semibold">Total Page Views</span>
            <span class="text-xs font-bold text-emerald-700 bg-emerald-100 px-2 py-0.5 rounded">+24.1%</span>
        </div>
        <span class="text-3xl font-extrabold text-slate-900 block">182,900</span>
        <span class="text-[11px] text-slate-500 mt-1 block">Rata-rata 3.7 Halaman/Sesi</span>
    </div>

    <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm">
        <div class="flex items-center justify-between text-slate-500 mb-2">
            <span class="text-xs font-semibold">Pesan Masuk</span>
            <span class="text-xs font-bold text-indigo-700 bg-indigo-100 px-2 py-0.5 rounded">12 Baru</span>
        </div>
        <span class="text-3xl font-extrabold text-slate-900 block">142</span>
        <span class="text-[11px] text-slate-500 mt-1 block">Pesan Form Kontak</span>
    </div>

    <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm">
        <div class="flex items-center justify-between text-slate-500 mb-2">
            <span class="text-xs font-semibold">Media Storage</span>
            <span class="text-xs font-bold text-sky-700 bg-sky-100 px-2 py-0.5 rounded">1.2 GB / 10 GB</span>
        </div>
        <span class="text-3xl font-extrabold text-slate-900 block">12%</span>
        <span class="text-[11px] text-slate-500 mt-1 block">Spatie Media Storage</span>
    </div>
</div>

<!-- Quick Action Cards Grid -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <div class="lg:col-span-2 bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h3 class="text-base font-bold text-slate-900">Analitik Pengunjung Harian</h3>
                <p class="text-xs text-slate-500">Statistik trafik 30 hari terakhir</p>
            </div>
        </div>

        <div class="h-60 flex items-end justify-between gap-2 pt-6 border-b border-slate-200 pb-4">
            <template x-for="(bar, i) in [40, 65, 50, 80, 70, 90, 85, 100, 75, 95, 110, 80, 95, 120, 105, 130, 115, 140, 125, 150]" :key="i">
                <div class="w-full bg-indigo-600 hover:bg-indigo-700 rounded-t transition" :style="`height: ${bar}%`"></div>
            </template>
        </div>
    </div>

    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm space-y-4">
        <h3 class="text-base font-bold text-slate-900">Menu Pengelolaan Cepat</h3>
        
        <div class="space-y-3">
            <a href="{{ url('/customer/builder') }}" class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 hover:border-indigo-500 flex items-center justify-between group transition">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-lg bg-indigo-100 text-indigo-700 flex items-center justify-center font-bold text-sm">🧩</div>
                    <div>
                        <span class="text-xs font-bold text-slate-900 block">Section Builder</span>
                        <span class="text-[10px] text-slate-500 block">Atur urutan & tampilkan section</span>
                    </div>
                </div>
                <span class="text-slate-400 group-hover:text-indigo-600 font-bold">&rarr;</span>
            </a>

            <a href="{{ url('/customer/themes') }}" class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 hover:border-indigo-500 flex items-center justify-between group transition">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-lg bg-purple-100 text-purple-700 flex items-center justify-center font-bold text-sm">🎨</div>
                    <div>
                        <span class="text-xs font-bold text-slate-900 block">Tema & Tampilan</span>
                        <span class="text-[10px] text-slate-500 block">Ganti preset desain tema</span>
                    </div>
                </div>
                <span class="text-slate-400 group-hover:text-indigo-600 font-bold">&rarr;</span>
            </a>

            <a href="{{ url('/customer/seo') }}" class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 hover:border-indigo-500 flex items-center justify-between group transition">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-sm">🔍</div>
                    <div>
                        <span class="text-xs font-bold text-slate-900 block">Pengaturan SEO</span>
                        <span class="text-[10px] text-slate-500 block">Meta tags & Social Card</span>
                    </div>
                </div>
                <span class="text-slate-400 group-hover:text-indigo-600 font-bold">&rarr;</span>
            </a>
        </div>
    </div>
</div>

@endsection
