@extends('layouts.admin')

@section('title', 'Support Tickets - Super Admin Console')
@section('page_title', 'Pusat Bantuan & Support Ticket Customer')

@section('content')

<div class="glass-panel p-6 rounded-2xl border border-slate-800 space-y-4">
    <div class="flex items-center justify-between">
        <h3 class="text-sm font-bold text-white">Antrean Support Ticket Masuk</h3>
        <span class="text-xs text-rose-400 font-bold">5 Ticket Membutuhkan Respon</span>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left text-xs">
            <thead class="text-slate-400 border-b border-slate-800 font-mono">
                <tr>
                    <th class="py-3 px-4">Ticket ID</th>
                    <th class="py-3 px-4">Tenant Perusahaan</th>
                    <th class="py-3 px-4">Subjek Masalah</th>
                    <th class="py-3 px-4">Prioritas</th>
                    <th class="py-3 px-4">Status</th>
                    <th class="py-3 px-4">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-800 text-slate-200">
                <tr>
                    <td class="py-3 px-4 font-mono">#TCK-9901</td>
                    <td class="py-3 px-4 font-bold">Google Indonesia</td>
                    <td class="py-3 px-4">Bantuan Setting CNAME Custom Domain .co.id</td>
                    <td class="py-3 px-4"><span class="px-2 py-0.5 rounded text-[10px] font-bold bg-rose-500/20 text-rose-300">HIGH</span></td>
                    <td class="py-3 px-4"><span class="px-2 py-0.5 rounded text-[10px] font-bold bg-amber-500/20 text-amber-300">OPEN</span></td>
                    <td class="py-3 px-4"><button class="px-3 py-1 rounded bg-amber-600 text-white font-bold text-[10px]">Respon Ticket</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
