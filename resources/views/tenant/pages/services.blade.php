@extends('layouts.tenant')

@section('title', 'Layanan Kami - ' . $tenant->name)

@section('content')
<section class="py-16 bg-slate-900 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <span class="text-xs font-bold text-sky-400 uppercase tracking-widest block mb-2">Layanan Profesional</span>
        <h1 class="text-4xl font-extrabold text-white">Solusi & Layanan Unggulan</h1>
        <p class="text-slate-300 text-sm mt-3 max-w-2xl">Layanan komprehensif yang dirancang untuk mendukung akselerasi dan pertumbuhan bisnis Anda.</p>
    </div>
</section>

<section class="py-20 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 space-y-4">
                <div class="w-12 h-12 rounded-xl bg-sky-600/20 text-sky-400 flex items-center justify-center font-bold text-xl">🚀</div>
                <h3 class="text-lg font-bold text-white">Konsultasi Strategis</h3>
                <p class="text-xs text-slate-400 leading-relaxed">Perencanaan arsitektur solusi bisnis, mitigasi risiko, dan formulasi strategi transformasi.</p>
                <a href="{{ url('/' . $tenant->slug . '/contact') }}" class="inline-block text-xs font-bold text-sky-400 hover:underline">Minta Penawaran &rarr;</a>
            </div>

            <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 space-y-4">
                <div class="w-12 h-12 rounded-xl bg-indigo-600/20 text-indigo-400 flex items-center justify-center font-bold text-xl">⚙️</div>
                <h3 class="text-lg font-bold text-white">Pengembangan & Integrasi</h3>
                <p class="text-xs text-slate-400 leading-relaxed">Implementasi sistem perangkat lunak, infrastruktur data, dan otomatisasi alur kerja.</p>
                <a href="{{ url('/' . $tenant->slug . '/contact') }}" class="inline-block text-xs font-bold text-sky-400 hover:underline">Minta Penawaran &rarr;</a>
            </div>

            <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 space-y-4">
                <div class="w-12 h-12 rounded-xl bg-purple-600/20 text-purple-400 flex items-center justify-center font-bold text-xl">🛡️</div>
                <h3 class="text-lg font-bold text-white">Audit & Keamanan System</h3>
                <p class="text-xs text-slate-400 leading-relaxed">Evaluasi tingkat keamanan data, standar kepatuhan industri, dan mitigasi ancaman cyber.</p>
                <a href="{{ url('/' . $tenant->slug . '/contact') }}" class="inline-block text-xs font-bold text-sky-400 hover:underline">Minta Penawaran &rarr;</a>
            </div>
        </div>
    </div>
</section>
@endsection
