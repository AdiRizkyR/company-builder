@extends('layouts.admin')

@section('title', 'Manajemen Paket - Super Admin Console')
@section('page_title', 'Manajemen Paket Langganan & Pricing')

@section('content')

<div class="grid grid-cols-1 md:grid-cols-4 gap-6">
    <div class="glass-panel p-6 rounded-2xl border border-slate-800 space-y-4">
        <span class="text-xs font-bold text-slate-400">FREE STARTER</span>
        <h3 class="text-2xl font-extrabold text-white">Rp 0</h3>
        <p class="text-xs text-slate-400">Max 5 Sections, Storage 100MB, Path URL.</p>
        <button class="w-full py-2 rounded-xl bg-slate-800 text-xs font-bold text-white">Edit Fitur Paket</button>
    </div>

    <div class="glass-panel p-6 rounded-2xl border border-slate-800 space-y-4">
        <span class="text-xs font-bold text-sky-400">BASIC PROFILE</span>
        <h3 class="text-2xl font-extrabold text-white">Rp 99,000 /bln</h3>
        <p class="text-xs text-slate-400">Subdomain Dedicated, Unlimited Sections, 2GB Storage.</p>
        <button class="w-full py-2 rounded-xl bg-slate-800 text-xs font-bold text-white">Edit Fitur Paket</button>
    </div>

    <div class="glass-panel p-6 rounded-2xl border border-indigo-500 space-y-4">
        <span class="text-xs font-bold text-indigo-400">PROFESSIONAL</span>
        <h3 class="text-2xl font-extrabold text-white">Rp 249,000 /bln</h3>
        <p class="text-xs text-slate-400">Custom Domain .com, All Themes Unlocked, 10GB Storage.</p>
        <button class="w-full py-2 rounded-xl bg-indigo-600 text-xs font-bold text-white">Edit Fitur Paket</button>
    </div>

    <div class="glass-panel p-6 rounded-2xl border border-purple-500 space-y-4">
        <span class="text-xs font-bold text-purple-400">ENTERPRISE</span>
        <h3 class="text-2xl font-extrabold text-white">Rp 599,000 /bln</h3>
        <p class="text-xs text-slate-400">Multi Domain, Dedicated SLA 99.99%, Storage Unlimited.</p>
        <button class="w-full py-2 rounded-xl bg-purple-600 text-xs font-bold text-white">Edit Fitur Paket</button>
    </div>
</div>

@endsection
