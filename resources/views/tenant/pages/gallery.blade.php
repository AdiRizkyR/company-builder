@extends('layouts.tenant')

@section('title', 'Galeri Kegiatan - ' . $tenant->name)

@section('content')
<section class="py-16 bg-slate-900 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <span class="text-xs font-bold text-sky-400 uppercase tracking-widest block mb-2">Dokumentasi</span>
        <h1 class="text-4xl font-extrabold text-white">Galeri Foto & Aktivitas</h1>
        <p class="text-slate-300 text-sm mt-3 max-w-2xl">Momen penting, fasilitas kerja, dan atmosfer lingkungan kerja profesional di {{ $tenant->name }}.</p>
    </div>
</section>

<section class="py-20 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <div class="group relative rounded-2xl overflow-hidden border border-slate-800 h-64">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=600&q=80" alt="Gallery 1" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-slate-950/60 opacity-0 group-hover:opacity-100 transition flex items-center justify-center p-4 text-center">
                    <span class="text-xs font-bold text-white">Rapat Kolaborasi Tim Riset</span>
                </div>
            </div>
            <div class="group relative rounded-2xl overflow-hidden border border-slate-800 h-64">
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=600&q=80" alt="Gallery 2" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-slate-950/60 opacity-0 group-hover:opacity-100 transition flex items-center justify-center p-4 text-center">
                    <span class="text-xs font-bold text-white">Fasilitas Kantor Utama</span>
                </div>
            </div>
            <div class="group relative rounded-2xl overflow-hidden border border-slate-800 h-64">
                <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=600&q=80" alt="Gallery 3" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-slate-950/60 opacity-0 group-hover:opacity-100 transition flex items-center justify-center p-4 text-center">
                    <span class="text-xs font-bold text-white">Workshop & Training Tahunan</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
