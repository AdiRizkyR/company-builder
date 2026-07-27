@extends('layouts.tenant')

@section('title', $tenant->name . ' - Beranda Resmi')

@section('content')

<!-- Hero Section (Light Clean Design) -->
<section class="relative py-16 lg:py-28 overflow-hidden bg-gradient-to-b from-sky-50/50 via-slate-50 to-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-sky-100 text-sky-800 border border-sky-200 text-xs font-bold">
                    <span>Profil Perusahaan Resmi</span>
                </div>
                <h1 class="text-4xl sm:text-5xl font-extrabold text-slate-900 leading-tight">
                    {{ $tenant->name }}
                </h1>
                <p class="text-slate-600 text-base sm:text-lg leading-relaxed">
                    {{ $tenant->tagline }}
                </p>
                <div class="pt-2 flex flex-wrap gap-4">
                    <a href="{{ url('/' . $tenant->slug . '/contact') }}" class="px-6 py-3.5 rounded-xl bg-sky-600 hover:bg-sky-700 text-white font-bold text-xs shadow-md transition">
                        Hubungi Tim Kami
                    </a>
                    <a href="{{ url('/' . $tenant->slug . '/about') }}" class="px-6 py-3.5 rounded-xl bg-white hover:bg-slate-100 text-slate-800 font-bold text-xs border border-slate-300 transition">
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>
            <div>
                <img src="{{ $tenant->hero_image }}" alt="{{ $tenant->name }}" class="rounded-2xl object-cover w-full h-80 sm:h-96 shadow-xl border border-slate-200">
            </div>
        </div>
    </div>
</section>

<!-- Company Key Metrics -->
<section class="py-12 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200">
                <span class="text-3xl font-extrabold text-sky-600 block">15+</span>
                <span class="text-xs text-slate-500 font-semibold uppercase tracking-wider mt-1 block">Tahun Pengalaman</span>
            </div>
            <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200">
                <span class="text-3xl font-extrabold text-sky-600 block">500+</span>
                <span class="text-xs text-slate-500 font-semibold uppercase tracking-wider mt-1 block">Proyek Selesai</span>
            </div>
            <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200">
                <span class="text-3xl font-extrabold text-sky-600 block">120+</span>
                <span class="text-xs text-slate-500 font-semibold uppercase tracking-wider mt-1 block">Tenaga Ahli</span>
            </div>
            <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200">
                <span class="text-3xl font-extrabold text-sky-600 block">99.8%</span>
                <span class="text-xs text-slate-500 font-semibold uppercase tracking-wider mt-1 block">Kepuasan Klien</span>
            </div>
        </div>
    </div>
</section>

<!-- Featured Services Section -->
<section class="py-20 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-start md:items-end justify-between mb-12 gap-4">
            <div>
                <span class="text-xs font-bold text-sky-600 uppercase tracking-wider block mb-1">Layanan Utama</span>
                <h2 class="text-3xl font-extrabold text-slate-900">Solusi Terbaik Untuk Kebutuhan Anda</h2>
            </div>
            <a href="{{ url('/' . $tenant->slug . '/services') }}" class="text-xs font-bold text-sky-600 hover:underline">
                Lihat Semua Layanan &rarr;
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-md transition">
                <div class="w-12 h-12 rounded-xl bg-sky-100 text-sky-700 flex items-center justify-center font-bold text-xl mb-4">01</div>
                <h3 class="text-base font-bold text-slate-900 mb-2">Konsultasi Enterprise</h3>
                <p class="text-xs text-slate-600 leading-relaxed mb-4">Layanan perencanaan strategi dan analisis sistem komprehensif skala korporat.</p>
                <a href="{{ url('/' . $tenant->slug . '/services') }}" class="text-xs font-bold text-sky-600 hover:underline">Detail &rarr;</a>
            </div>

            <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-md transition">
                <div class="w-12 h-12 rounded-xl bg-indigo-100 text-indigo-700 flex items-center justify-center font-bold text-xl mb-4">02</div>
                <h3 class="text-base font-bold text-slate-900 mb-2">Implementasi Teknologi</h3>
                <p class="text-xs text-slate-600 leading-relaxed mb-4">Integrasi sistem perangkat lunak dan infrastruktur modern berkinerja tinggi.</p>
                <a href="{{ url('/' . $tenant->slug . '/services') }}" class="text-xs font-bold text-sky-600 hover:underline">Detail &rarr;</a>
            </div>

            <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-md transition">
                <div class="w-12 h-12 rounded-xl bg-purple-100 text-purple-700 flex items-center justify-center font-bold text-xl mb-4">03</div>
                <h3 class="text-base font-bold text-slate-900 mb-2">Maintenance & Support</h3>
                <p class="text-xs text-slate-600 leading-relaxed mb-4">Dukungan operasional 24/7 dengan jaminan SLA keandalan tingkat tinggi.</p>
                <a href="{{ url('/' . $tenant->slug . '/services') }}" class="text-xs font-bold text-sky-600 hover:underline">Detail &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-16 bg-gradient-to-r from-sky-600 to-indigo-600 text-white text-center">
    <div class="max-w-4xl mx-auto px-4 space-y-4">
        <h2 class="text-3xl font-extrabold">Siap Memulai Kerjasama Dengan {{ $tenant->name }}?</h2>
        <p class="text-sky-100 text-sm max-w-xl mx-auto">Konsultasikan kebutuhan bisnis Anda bersama tim profesional kami sekarang.</p>
        <div class="pt-2">
            <a href="{{ url('/' . $tenant->slug . '/contact') }}" class="inline-flex items-center gap-2 px-8 py-3.5 rounded-xl bg-white text-sky-700 font-extrabold text-xs shadow-lg transition hover:bg-sky-50">
                Hubungi Kami Sekarang
            </a>
        </div>
    </div>
</section>

@endsection
