@extends('layouts.customer')

@section('title', 'SEO & Meta Tags - Customer Portal')
@section('page_title', 'Pengaturan SEO & OpenGraph')

@section('content')

<div class="max-w-4xl space-y-8">
    <div class="glass-panel p-6 rounded-2xl border border-slate-800 space-y-6">
        <h2 class="text-base font-bold text-white border-b border-slate-800 pb-3">Meta Tags & Search Engine Optimization</h2>

        <div class="space-y-4">
            <div>
                <label class="block text-xs font-bold text-slate-300 mb-1">Meta Title Tag *</label>
                <input type="text" value="Google Indonesia - Official Corporate Website Profile" class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-xs text-white">
                <span class="text-[10px] text-slate-500 mt-1 block">Rekomendasi 50 - 60 Karakter</span>
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-300 mb-1">Meta Description *</label>
                <textarea rows="3" class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-xs text-white">Organizing the world’s information & making it universally accessible in Indonesia. Official corporate profile & enterprise solutions.</textarea>
                <span class="text-[10px] text-slate-500 mt-1 block">Rekomendasi 140 - 160 Karakter</span>
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-300 mb-1">Gambar Preview OpenGraph / Social Share (1200 x 630 px)</label>
                <input type="text" value="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1200&q=80" class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-xs text-white">
            </div>
        </div>

        <!-- OpenGraph Preview Box -->
        <div class="p-4 rounded-xl bg-slate-950 border border-slate-800 space-y-2">
            <span class="text-[10px] font-bold text-indigo-400 uppercase tracking-wider">Social Share Cards Preview</span>
            <div class="rounded-lg overflow-hidden border border-slate-800 bg-slate-900 max-w-md">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=600&q=80" alt="OG Preview" class="w-full h-32 object-cover">
                <div class="p-3">
                    <span class="text-[10px] text-slate-400 uppercase">primaryweb.com</span>
                    <h4 class="text-xs font-bold text-white mt-0.5">Google Indonesia - Official Corporate Website Profile</h4>
                    <p class="text-[10px] text-slate-400 mt-1 truncate">Organizing the world’s information in Indonesia...</p>
                </div>
            </div>
        </div>

        <div class="pt-4 flex justify-end">
            <button type="button" class="px-6 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white font-bold text-xs shadow-lg shadow-indigo-600/30">
                Simpan SEO Settings
            </button>
        </div>
    </div>
</div>

@endsection
