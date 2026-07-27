@extends('layouts.tenant')

@section('title', 'Katalog Produk - ' . $tenant->name)

@section('content')
<section class="py-16 bg-slate-900 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <span class="text-xs font-bold text-sky-400 uppercase tracking-widest block mb-2">Katalog Resmi</span>
        <h1 class="text-4xl font-extrabold text-white">Produk & Inovasi Perusahaan</h1>
        <p class="text-slate-300 text-sm mt-3 max-w-2xl">Jelajahi lini produk berkualitas unggul yang dibuat dengan standar presisi tinggi.</p>
    </div>
</section>

<section class="py-20 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="p-4 rounded-2xl bg-slate-900 border border-slate-800 space-y-4">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=500&q=80" alt="Product 1" class="w-full h-48 object-cover rounded-xl border border-slate-800">
                <div class="p-2">
                    <span class="text-[10px] font-bold text-sky-400 uppercase">Hardware & Platform</span>
                    <h3 class="text-base font-bold text-white mt-1">Enterprise Cloud Engine v4</h3>
                    <p class="text-xs text-slate-400 mt-2">Platform server awan terdistribusi berkecepatan tinggi dengan jaminan efisiensi 99.99%.</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-xs font-bold text-slate-200">Ketersediaan: Ready</span>
                        <a href="{{ url('/' . $tenant->slug . '/contact') }}" class="px-3 py-1.5 rounded-lg bg-sky-600 hover:bg-sky-500 text-white text-xs font-bold">Detail Info</a>
                    </div>
                </div>
            </div>

            <div class="p-4 rounded-2xl bg-slate-900 border border-slate-800 space-y-4">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=500&q=80" alt="Product 2" class="w-full h-48 object-cover rounded-xl border border-slate-800">
                <div class="p-2">
                    <span class="text-[10px] font-bold text-indigo-400 uppercase">Software Solution</span>
                    <h3 class="text-base font-bold text-white mt-1">Smart Analytics Suite</h3>
                    <p class="text-xs text-slate-400 mt-2">Sistem pengolahan data analitik bisnis berbasis kecerdasan buatan terpadu.</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-xs font-bold text-slate-200">Ketersediaan: Ready</span>
                        <a href="{{ url('/' . $tenant->slug . '/contact') }}" class="px-3 py-1.5 rounded-lg bg-sky-600 hover:bg-sky-500 text-white text-xs font-bold">Detail Info</a>
                    </div>
                </div>
            </div>

            <div class="p-4 rounded-2xl bg-slate-900 border border-slate-800 space-y-4">
                <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=500&q=80" alt="Product 3" class="w-full h-48 object-cover rounded-xl border border-slate-800">
                <div class="p-2">
                    <span class="text-[10px] font-bold text-purple-400 uppercase">Security Hardware</span>
                    <h3 class="text-base font-bold text-white mt-1">CyberShield Gateway Pro</h3>
                    <p class="text-xs text-slate-400 mt-2">Perangkat proteksi jaringan tingkat enterprise untuk mengamankan aset informasi sensitif.</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-xs font-bold text-slate-200">Ketersediaan: Ready</span>
                        <a href="{{ url('/' . $tenant->slug . '/contact') }}" class="px-3 py-1.5 rounded-lg bg-sky-600 hover:bg-sky-500 text-white text-xs font-bold">Detail Info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
