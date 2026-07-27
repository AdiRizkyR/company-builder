@extends('layouts.customer')

@section('title', 'Tema & Tampilan - Customer Portal')
@section('page_title', 'Kustomisasi Tema & Tampilan Website')

@section('content')

<div class="space-y-8" x-data="{ selectedTheme: 'startup' }">
    <div class="glass-panel p-6 rounded-2xl border border-slate-800 space-y-6">
        <div>
            <h2 class="text-base font-bold text-white">Pilih Theme Template (Modular Theme)</h2>
            <p class="text-xs text-slate-400 mt-1">Mengubah tema tidak akan menghapus data artikel, produk, atau layanan di database Anda.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Theme Card 1 -->
            <div @click="selectedTheme = 'corporate'" :class="selectedTheme === 'corporate' ? 'border-2 border-indigo-500 shadow-xl shadow-indigo-950/60' : 'border border-slate-800'" class="glass-panel p-4 rounded-xl cursor-pointer transition">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=500&q=80" alt="Corporate" class="w-full h-32 object-cover rounded-lg mb-3">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-bold text-white">Corporate Executive</span>
                    <span x-show="selectedTheme === 'corporate'" class="text-[10px] bg-indigo-600 text-white font-bold px-2 py-0.5 rounded">Aktif</span>
                </div>
            </div>

            <!-- Theme Card 2 -->
            <div @click="selectedTheme = 'startup'" :class="selectedTheme === 'startup' ? 'border-2 border-indigo-500 shadow-xl shadow-indigo-950/60' : 'border border-slate-800'" class="glass-panel p-4 rounded-xl cursor-pointer transition">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=500&q=80" alt="Startup" class="w-full h-32 object-cover rounded-lg mb-3">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-bold text-white">Tech & Startup</span>
                    <span x-show="selectedTheme === 'startup'" class="text-[10px] bg-indigo-600 text-white font-bold px-2 py-0.5 rounded">Aktif</span>
                </div>
            </div>

            <!-- Theme Card 3 -->
            <div @click="selectedTheme = 'minimal'" :class="selectedTheme === 'minimal' ? 'border-2 border-indigo-500 shadow-xl shadow-indigo-950/60' : 'border border-slate-800'" class="glass-panel p-4 rounded-xl cursor-pointer transition">
                <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=500&q=80" alt="Minimal" class="w-full h-32 object-cover rounded-lg mb-3">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-bold text-white">Minimalist Studio</span>
                    <span x-show="selectedTheme === 'minimal'" class="text-[10px] bg-indigo-600 text-white font-bold px-2 py-0.5 rounded">Aktif</span>
                </div>
            </div>
        </div>

        <div class="pt-4 flex justify-end border-t border-slate-800">
            <button type="button" class="px-6 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white font-bold text-xs shadow-lg shadow-indigo-600/30">
                Terapkan Tema Baru
            </button>
        </div>
    </div>
</div>

@endsection
