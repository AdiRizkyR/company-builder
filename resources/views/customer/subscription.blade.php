@extends('layouts.customer')

@section('title', 'Langganan & Tagihan - Customer Portal')
@section('page_title', 'Manajemen Langganan & Domain Kustom')

@section('content')

<div class="space-y-8">
    <!-- Active Subscription Banner -->
    <div class="glass-panel p-6 rounded-2xl border border-slate-800 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
        <div>
            <span class="px-2.5 py-0.5 rounded-full text-[10px] font-extrabold uppercase bg-emerald-500/20 text-emerald-300 border border-emerald-500/30">Enterprise Plan</span>
            <h2 class="text-xl font-bold text-white mt-2">Paket Langganan Aktif</h2>
            <p class="text-xs text-slate-400">Berlaku sampai 24 Desember 2027 (Tagihan Otomatis Tahunan)</p>
        </div>
        <div class="flex items-center gap-3">
            <button type="button" class="px-4 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-200 text-xs font-bold border border-slate-700">
                Ubah Paket
            </button>
        </div>
    </div>

    <!-- Domain Upgrade Path Card -->
    <div class="glass-panel p-6 rounded-2xl border border-indigo-500/40 bg-gradient-to-r from-indigo-950/40 to-slate-900 space-y-4">
        <h3 class="text-base font-bold text-white flex items-center gap-2">
            <span>🌐 Konfigurasi Subdomain & Domain Kustom</span>
            <span class="px-2 py-0.5 rounded text-[9px] font-bold bg-indigo-500/20 text-indigo-300">FASE 2 PREPARED</span>
        </h3>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-xs">
            <div class="p-4 rounded-xl bg-slate-950 border border-slate-800">
                <span class="text-[10px] text-slate-500 font-mono">Fase 1 (Aktif Saat Ini)</span>
                <h4 class="font-bold text-white mt-1">URL Path</h4>
                <p class="text-slate-400 font-mono text-[11px] mt-1">primaryweb.com/google-indonesia</p>
                <span class="inline-block mt-2 text-[10px] text-emerald-400 font-bold">● Active</span>
            </div>

            <div class="p-4 rounded-xl bg-slate-950 border border-slate-800 opacity-90">
                <span class="text-[10px] text-indigo-400 font-mono">Fase 2 (Siap Diaktifkan)</span>
                <h4 class="font-bold text-white mt-1">Subdomain Dedicated</h4>
                <p class="text-slate-400 font-mono text-[11px] mt-1">google.primaryweb.com</p>
                <button class="mt-2 px-2 py-1 rounded text-[10px] font-bold bg-indigo-600 text-white">Aktifkan Subdomain</button>
            </div>

            <div class="p-4 rounded-xl bg-slate-950 border border-slate-800 opacity-90">
                <span class="text-[10px] text-purple-400 font-mono">Fase 3 (Enterprise)</span>
                <h4 class="font-bold text-white mt-1">Domain Kustom (.com)</h4>
                <p class="text-slate-400 font-mono text-[11px] mt-1">google.co.id</p>
                <button class="mt-2 px-2 py-1 rounded text-[10px] font-bold bg-purple-600 text-white">Hubungkan Domain</button>
            </div>
        </div>
    </div>

    <!-- Invoices Table -->
    <div class="glass-panel p-6 rounded-2xl border border-slate-800 space-y-4">
        <h3 class="text-base font-bold text-white">Riwayat Tagihan & Invoice</h3>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="text-slate-400 border-b border-slate-800 font-mono">
                    <tr>
                        <th class="py-3 px-4">No. Invoice</th>
                        <th class="py-3 px-4">Tanggal</th>
                        <th class="py-3 px-4">Paket</th>
                        <th class="py-3 px-4">Total</th>
                        <th class="py-3 px-4">Status</th>
                        <th class="py-3 px-4">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-800 text-slate-200">
                    <tr>
                        <td class="py-3 px-4 font-mono">#INV-2026-0098</td>
                        <td class="py-3 px-4">24 Des 2026</td>
                        <td class="py-3 px-4 font-bold">Enterprise Plan (1 Tahun)</td>
                        <td class="py-3 px-4 font-bold">Rp 5.988.000</td>
                        <td class="py-3 px-4"><span class="px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-500/20 text-emerald-300">LUNAS</span></td>
                        <td class="py-3 px-4"><a href="#" class="text-indigo-400 hover:underline">Download PDF</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
