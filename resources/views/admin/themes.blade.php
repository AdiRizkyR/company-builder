@extends('layouts.admin')

@section('title', 'Registry Theme - Super Admin Console')
@section('page_title', 'Registry & Framework Theme Modular')

@section('content')

<div class="space-y-6">
    <div class="flex items-center justify-between">
        <p class="text-xs text-slate-400">Pengelolaan tema modular yang tersedia untuk dipakai seluruh customer tenant SaaS.</p>
        <button class="px-4 py-2 rounded-xl bg-amber-600 hover:bg-amber-500 text-white font-bold text-xs">+ Register Theme Baru</button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="glass-panel p-4 rounded-2xl border border-slate-800 space-y-3">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=500&q=80" alt="Corporate" class="w-full h-36 object-cover rounded-xl">
            <div class="flex items-center justify-between">
                <h4 class="text-sm font-bold text-white">Corporate Executive</h4>
                <span class="px-2 py-0.5 rounded text-[9px] font-bold bg-emerald-500/20 text-emerald-300">PUBLISHED</span>
            </div>
            <p class="text-xs text-slate-400">Digunakan oleh 2,140 Tenant</p>
        </div>

        <div class="glass-panel p-4 rounded-2xl border border-slate-800 space-y-3">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=500&q=80" alt="Startup" class="w-full h-36 object-cover rounded-xl">
            <div class="flex items-center justify-between">
                <h4 class="text-sm font-bold text-white">Tech Innovation & Startup</h4>
                <span class="px-2 py-0.5 rounded text-[9px] font-bold bg-emerald-500/20 text-emerald-300">PUBLISHED</span>
            </div>
            <p class="text-xs text-slate-400">Digunakan oleh 1,890 Tenant</p>
        </div>

        <div class="glass-panel p-4 rounded-2xl border border-slate-800 space-y-3">
            <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=500&q=80" alt="Minimal" class="w-full h-36 object-cover rounded-xl">
            <div class="flex items-center justify-between">
                <h4 class="text-sm font-bold text-white">Minimalist Creative</h4>
                <span class="px-2 py-0.5 rounded text-[9px] font-bold bg-emerald-500/20 text-emerald-300">PUBLISHED</span>
            </div>
            <p class="text-xs text-slate-400">Digunakan oleh 790 Tenant</p>
        </div>
    </div>
</div>

@endsection
