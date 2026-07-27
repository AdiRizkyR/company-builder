@extends('layouts.customer')

@section('title', 'Manajer Konten - Customer Portal')
@section('page_title', 'Pengelolaan Konten Profil Perusahaan')

@section('content')

<div class="space-y-8" x-data="{ activeTab: 'services' }">
    <!-- Tabs Header -->
    <div class="flex items-center gap-2 border-b border-slate-800 pb-3 overflow-x-auto">
        <button @click="activeTab = 'services'" :class="activeTab === 'services' ? 'bg-indigo-600 text-white font-bold' : 'bg-slate-900 text-slate-400 hover:text-white'" class="px-4 py-2 rounded-xl text-xs transition">Layanan (3)</button>
        <button @click="activeTab = 'products'" :class="activeTab === 'products' ? 'bg-indigo-600 text-white font-bold' : 'bg-slate-900 text-slate-400 hover:text-white'" class="px-4 py-2 rounded-xl text-xs transition">Produk (3)</button>
        <button @click="activeTab = 'portfolio'" :class="activeTab === 'portfolio' ? 'bg-indigo-600 text-white font-bold' : 'bg-slate-900 text-slate-400 hover:text-white'" class="px-4 py-2 rounded-xl text-xs transition">Portfolio (2)</button>
        <button @click="activeTab = 'team'" :class="activeTab === 'team' ? 'bg-indigo-600 text-white font-bold' : 'bg-slate-900 text-slate-400 hover:text-white'" class="px-4 py-2 rounded-xl text-xs transition">Tim (4)</button>
        <button @click="activeTab = 'blog'" :class="activeTab === 'blog' ? 'bg-indigo-600 text-white font-bold' : 'bg-slate-900 text-slate-400 hover:text-white'" class="px-4 py-2 rounded-xl text-xs transition">Artikel Blog (3)</button>
    </div>

    <!-- Services Content List -->
    <div x-show="activeTab === 'services'" class="glass-panel p-6 rounded-2xl border border-slate-800 space-y-4">
        <div class="flex items-center justify-between">
            <h3 class="text-sm font-bold text-white">Daftar Layanan Perusahaan</h3>
            <button class="px-3 py-1.5 rounded-lg bg-indigo-600 text-white text-xs font-bold">+ Tambah Layanan Baru</button>
        </div>

        <div class="space-y-3">
            <div class="p-4 rounded-xl bg-slate-950 border border-slate-800 flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold text-white block">Konsultasi Enterprise</span>
                    <span class="text-[10px] text-slate-400 block">Layanan perencanaan strategi dan analisis sistem komprehensif.</span>
                </div>
                <div class="flex items-center gap-2">
                    <button class="px-2.5 py-1 rounded text-xs bg-slate-800 text-slate-300">Edit</button>
                    <button class="px-2.5 py-1 rounded text-xs bg-rose-950 text-rose-300">Hapus</button>
                </div>
            </div>

            <div class="p-4 rounded-xl bg-slate-950 border border-slate-800 flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold text-white block">Implementasi Teknologi</span>
                    <span class="text-[10px] text-slate-400 block">Integrasi sistem perangkat lunak dan infrastruktur modern.</span>
                </div>
                <div class="flex items-center gap-2">
                    <button class="px-2.5 py-1 rounded text-xs bg-slate-800 text-slate-300">Edit</button>
                    <button class="px-2.5 py-1 rounded text-xs bg-rose-950 text-rose-300">Hapus</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
