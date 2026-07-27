@extends('layouts.customer')

@section('title', 'Profil Perusahaan - Customer Portal')
@section('page_title', 'Identitas & Informasi Perusahaan')

@section('content')

<div class="max-w-4xl space-y-8">
    <!-- Profile & Branding Form -->
    <div class="glass-panel p-6 rounded-2xl border border-slate-800 space-y-6">
        <h2 class="text-base font-bold text-white border-b border-slate-800 pb-3">Logo & Branding Perusahaan</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-xs font-bold text-slate-300 mb-2">Upload Logo Perusahaan (Spatie Media)</label>
                <div class="flex items-center gap-4">
                    <img src="https://images.unsplash.com/photo-1573804633927-bfcbcd909acd?auto=format&fit=crop&w=300&q=80" alt="Logo" class="w-16 h-16 rounded-xl object-cover border border-slate-700">
                    <button type="button" class="px-4 py-2 rounded-xl bg-slate-800 hover:bg-slate-700 text-xs font-bold text-white border border-slate-700">
                        Ganti Logo
                    </button>
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-300 mb-2">Upload Favicon Browser (.ico / .png)</label>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-indigo-600/20 text-indigo-400 flex items-center justify-center font-bold text-lg border border-indigo-500/30">
                        🚀
                    </div>
                    <button type="button" class="px-4 py-2 rounded-xl bg-slate-800 hover:bg-slate-700 text-xs font-bold text-white border border-slate-700">
                        Ganti Favicon
                    </button>
                </div>
            </div>
        </div>

        <div class="space-y-4 pt-4 border-t border-slate-800">
            <div>
                <label class="block text-xs font-bold text-slate-300 mb-1">Nama Perusahaan / Perusahaan *</label>
                <input type="text" value="Google Indonesia" class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-xs text-white">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-300 mb-1">Tagline Slogan Utama *</label>
                <input type="text" value="Organizing the world’s information & making it universally accessible in Indonesia" class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-xs text-white">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-300 mb-1">Alamat Kantor Pusat *</label>
                <textarea rows="2" class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-xs text-white">Pacific Century Place Tower Level 45, SCBD, Jakarta Selatan</textarea>
            </div>
        </div>

        <div class="pt-4 flex justify-end">
            <button type="button" class="px-6 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white font-bold text-xs shadow-lg shadow-indigo-600/30">
                Simpan Profil Perusahaan
            </button>
        </div>
    </div>
</div>

@endsection
