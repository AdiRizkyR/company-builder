@extends('layouts.tenant')

@section('title', 'Tentang Kami - ' . $tenant->name)

@section('content')
<section class="py-16 bg-slate-900 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <span class="text-xs font-bold text-sky-400 uppercase tracking-widest block mb-2">Profil Perusahaan</span>
            <h1 class="text-4xl font-extrabold text-white">Tentang {{ $tenant->name }}</h1>
            <p class="text-slate-300 text-base mt-4 leading-relaxed">
                {{ $tenant->tagline }}
            </p>
        </div>
    </div>
</section>

<section class="py-20 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
            <div class="space-y-4">
                <h2 class="text-2xl font-bold text-white">Sejarah & Perjalanan Kami</h2>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Didirikan dengan komitmen tinggi terhadap kualitas, {{ $tenant->name }} terus berinovasi memberikan solusi terbaik bagi mitra industri dan pelanggan di seluruh Indonesia.
                </p>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Dengan berbekal pengalaman bertahun-tahun, kami tumbuh menjadi salah satu entitas bisnis terdepan di sektor ini dengan fokus pada keunggulan operasional.
                </p>
            </div>
            <div>
                <img src="{{ $tenant->hero_image }}" alt="Sejarah Perusahaan" class="rounded-2xl border border-slate-800 object-cover w-full h-80">
            </div>
        </div>

        <!-- Vision & Mission Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="p-8 rounded-2xl bg-slate-900 border border-slate-800">
                <div class="w-12 h-12 rounded-xl bg-sky-600/20 text-sky-400 flex items-center justify-center font-bold text-xl mb-4">👁️</div>
                <h3 class="text-xl font-bold text-white mb-3">Visi Perusahaan</h3>
                <p class="text-sm text-slate-300 leading-relaxed">
                    Menjadi pemimpin pasar terdepan di industri yang diakui atas inovasi, keandalan, dan kontribusi berkelanjutan bagi kemajuan bangsa.
                </p>
            </div>

            <div class="p-8 rounded-2xl bg-slate-900 border border-slate-800">
                <div class="w-12 h-12 rounded-xl bg-indigo-600/20 text-indigo-400 flex items-center justify-center font-bold text-xl mb-4">🎯</div>
                <h3 class="text-xl font-bold text-white mb-3">Misi Utama</h3>
                <ul class="space-y-2 text-sm text-slate-300">
                    <li class="flex items-start gap-2"><span>•</span> Delivering World-class Service & Products for clients.</li>
                    <li class="flex items-start gap-2"><span>•</span> Memberikan standar keselamatan dan etika kerja tertinggi.</li>
                    <li class="flex items-start gap-2"><span>•</span> Membangun ekosistem kemitraan yang berkelanjutan.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
