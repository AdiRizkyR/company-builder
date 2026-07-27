@extends('layouts.admin')

@section('title', 'Manajemen Tenant - Super Admin Console')
@section('page_title', 'Manajemen Perusahaan Tenant SaaS')

@section('content')

<div class="space-y-6">
    <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
        <div class="flex items-center gap-3 w-full sm:w-auto">
            <input type="text" placeholder="Cari tenant, slug, atau email..." class="px-4 py-2 rounded-xl bg-slate-900 border border-slate-800 text-xs text-white w-64 focus:outline-none focus:border-amber-500">
            <select class="px-3 py-2 rounded-xl bg-slate-900 border border-slate-800 text-xs text-slate-300">
                <option>Semua Paket</option>
                <option>Enterprise</option>
                <option>Professional</option>
                <option>Basic</option>
                <option>Free</option>
            </select>
        </div>

        <button class="px-4 py-2 rounded-xl bg-amber-600 hover:bg-amber-500 text-white font-bold text-xs shadow-lg transition">+ Tambah Tenant Manual</button>
    </div>

    <div class="glass-panel p-6 rounded-2xl border border-slate-800">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="text-slate-400 border-b border-slate-800 font-mono">
                    <tr>
                        <th class="py-3 px-4">ID Tenant</th>
                        <th class="py-3 px-4">Nama Perusahaan</th>
                        <th class="py-3 px-4">URL Slug / Path</th>
                        <th class="py-3 px-4">Paket Langganan</th>
                        <th class="py-3 px-4">Status Active</th>
                        <th class="py-3 px-4">Aksi Impersonate</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-800 text-slate-200">
                    <tr>
                        <td class="py-3 px-4 font-mono text-slate-500">#TNT-001</td>
                        <td class="py-3 px-4 font-bold">Google Indonesia</td>
                        <td class="py-3 px-4 font-mono text-indigo-300">/google-indonesia</td>
                        <td class="py-3 px-4"><span class="px-2 py-0.5 rounded text-[10px] font-extrabold bg-purple-500/20 text-purple-300">Enterprise</span></td>
                        <td class="py-3 px-4"><span class="px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-500/20 text-emerald-300">Aktif</span></td>
                        <td class="py-3 px-4">
                            <a href="{{ url('/google-indonesia') }}" target="_blank" class="px-3 py-1 rounded bg-indigo-600 text-white font-bold text-[10px]">Pratinjau Website</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 font-mono text-slate-500">#TNT-002</td>
                        <td class="py-3 px-4 font-bold">PT Maju Bersama Sejahtera</td>
                        <td class="py-3 px-4 font-mono text-indigo-300">/pt-maju-bersama</td>
                        <td class="py-3 px-4"><span class="px-2 py-0.5 rounded text-[10px] font-extrabold bg-indigo-500/20 text-indigo-300">Professional</span></td>
                        <td class="py-3 px-4"><span class="px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-500/20 text-emerald-300">Aktif</span></td>
                        <td class="py-3 px-4">
                            <a href="{{ url('/pt-maju-bersama') }}" target="_blank" class="px-3 py-1 rounded bg-indigo-600 text-white font-bold text-[10px]">Pratinjau Website</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 font-mono text-slate-500">#TNT-003</td>
                        <td class="py-3 px-4 font-bold">TGRJ Creative Tech</td>
                        <td class="py-3 px-4 font-mono text-indigo-300">/tgrj</td>
                        <td class="py-3 px-4"><span class="px-2 py-0.5 rounded text-[10px] font-extrabold bg-sky-500/20 text-sky-300">Basic</span></td>
                        <td class="py-3 px-4"><span class="px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-500/20 text-emerald-300">Aktif</span></td>
                        <td class="py-3 px-4">
                            <a href="{{ url('/tgrj') }}" target="_blank" class="px-3 py-1 rounded bg-indigo-600 text-white font-bold text-[10px]">Pratinjau Website</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
