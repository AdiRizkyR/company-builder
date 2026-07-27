@extends('layouts.admin')

@section('title', 'Overview - Super Admin Console')
@section('page_title', 'Ringkasan Platform SaaS & Performa Business')

@section('content')

<!-- Metric Cards Grid (Light Mode) -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm">
        <div class="flex items-center justify-between text-slate-500 mb-2">
            <span class="text-xs font-semibold">Monthly Recurring Revenue (MRR)</span>
            <span class="text-xs font-bold text-emerald-700 bg-emerald-100 px-2 py-0.5 rounded">+22.8%</span>
        </div>
        <span class="text-3xl font-extrabold text-slate-900 block">Rp 482,500,000</span>
        <span class="text-[11px] text-slate-500 mt-1 block">Pertumbuhan Bulan Juli 2026</span>
    </div>

    <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm">
        <div class="flex items-center justify-between text-slate-500 mb-2">
            <span class="text-xs font-semibold">Total Tenant Aktif</span>
            <span class="text-xs font-bold text-emerald-700 bg-emerald-100 px-2 py-0.5 rounded">+140 Baru</span>
        </div>
        <span class="text-3xl font-extrabold text-slate-900 block">4,820</span>
        <span class="text-[11px] text-slate-500 mt-1 block">Perusahaan Terdaftar</span>
    </div>

    <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm">
        <div class="flex items-center justify-between text-slate-500 mb-2">
            <span class="text-xs font-semibold">Active Subscriptions</span>
            <span class="text-xs font-bold text-amber-700 bg-amber-100 px-2 py-0.5 rounded">82.4% Paid</span>
        </div>
        <span class="text-3xl font-extrabold text-slate-900 block">3,972</span>
        <span class="text-[11px] text-slate-500 mt-1 block">Paket Basic, Pro & Enterprise</span>
    </div>

    <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm">
        <div class="flex items-center justify-between text-slate-500 mb-2">
            <span class="text-xs font-semibold">Server System Health</span>
            <span class="text-xs font-bold text-emerald-700 bg-emerald-100 px-2 py-0.5 rounded">99.99%</span>
        </div>
        <span class="text-3xl font-extrabold text-emerald-600 block">HEALTHY</span>
        <span class="text-[11px] text-slate-500 mt-1 block">Single Database Multi-Tenant</span>
    </div>
</div>

<!-- Tenants Table (Light Theme) -->
<div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm space-y-4">
    <div class="flex items-center justify-between">
        <div>
            <h3 class="text-base font-bold text-slate-900">Tenant Terbaru Bergabung</h3>
            <p class="text-xs text-slate-500">Daftar perusahaan yang baru saja mengaktifkan situs profil</p>
        </div>
        <a href="{{ url('/admin/tenants') }}" class="text-xs font-bold text-amber-600 hover:underline">Kelola Semua Tenant &rarr;</a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left text-xs">
            <thead class="text-slate-500 border-b border-slate-200 font-mono">
                <tr>
                    <th class="py-3 px-4">Tenant Company</th>
                    <th class="py-3 px-4">URL Path / Subdomain</th>
                    <th class="py-3 px-4">Paket</th>
                    <th class="py-3 px-4">Tema</th>
                    <th class="py-3 px-4">Status</th>
                    <th class="py-3 px-4">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-slate-700">
                <tr>
                    <td class="py-3 px-4 font-bold flex items-center gap-2">
                        <img src="https://images.unsplash.com/photo-1573804633927-bfcbcd909acd?auto=format&fit=crop&w=100&q=80" class="w-6 h-6 rounded object-cover">
                        <span class="text-slate-900">Google Indonesia</span>
                    </td>
                    <td class="py-3 px-4 font-mono text-indigo-600">/google-indonesia</td>
                    <td class="py-3 px-4"><span class="px-2 py-0.5 rounded text-[10px] font-bold bg-purple-100 text-purple-700">ENTERPRISE</span></td>
                    <td class="py-3 px-4">Tech Startup</td>
                    <td class="py-3 px-4"><span class="px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-100 text-emerald-700">AKTIF</span></td>
                    <td class="py-3 px-4"><a href="{{ url('/google-indonesia') }}" target="_blank" class="text-amber-600 font-bold hover:underline">Lihat Site</a></td>
                </tr>

                <tr>
                    <td class="py-3 px-4 font-bold flex items-center gap-2">
                        <img src="https://images.unsplash.com/photo-1560179707-f14e90ef3623?auto=format&fit=crop&w=100&q=80" class="w-6 h-6 rounded object-cover">
                        <span class="text-slate-900">PT Maju Bersama Sejahtera</span>
                    </td>
                    <td class="py-3 px-4 font-mono text-indigo-600">/pt-maju-bersama</td>
                    <td class="py-3 px-4"><span class="px-2 py-0.5 rounded text-[10px] font-bold bg-indigo-100 text-indigo-700">PROFESSIONAL</span></td>
                    <td class="py-3 px-4">Corporate Executive</td>
                    <td class="py-3 px-4"><span class="px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-100 text-emerald-700">AKTIF</span></td>
                    <td class="py-3 px-4"><a href="{{ url('/pt-maju-bersama') }}" target="_blank" class="text-amber-600 font-bold hover:underline">Lihat Site</a></td>
                </tr>

                <tr>
                    <td class="py-3 px-4 font-bold flex items-center gap-2">
                        <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=100&q=80" class="w-6 h-6 rounded object-cover">
                        <span class="text-slate-900">TGRJ Creative Tech</span>
                    </td>
                    <td class="py-3 px-4 font-mono text-indigo-600">/tgrj</td>
                    <td class="py-3 px-4"><span class="px-2 py-0.5 rounded text-[10px] font-bold bg-sky-100 text-sky-700">BASIC</span></td>
                    <td class="py-3 px-4">Minimal Studio</td>
                    <td class="py-3 px-4"><span class="px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-100 text-emerald-700">AKTIF</span></td>
                    <td class="py-3 px-4"><a href="{{ url('/tgrj') }}" target="_blank" class="text-amber-600 font-bold hover:underline">Lihat Site</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
