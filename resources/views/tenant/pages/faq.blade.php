@extends('layouts.tenant')

@section('title', 'FAQ - ' . $tenant->name)

@section('content')
<section class="py-16 bg-slate-900 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <span class="text-xs font-bold text-sky-400 uppercase tracking-widest block mb-2">Pusat Bantuan</span>
        <h1 class="text-4xl font-extrabold text-white">Pertanyaan Sering Diajukan</h1>
        <p class="text-slate-300 text-sm mt-3 max-w-2xl">Jawaban mengenai cara kerja layanan, mekanisme kerjasama, dan standar operasional {{ $tenant->name }}.</p>
    </div>
</section>

<section class="py-20 bg-slate-950">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="space-y-4" x-data="{ activeFaq: 1 }">
            <div class="glass-panel rounded-xl overflow-hidden border border-slate-800">
                <button @click="activeFaq = (activeFaq === 1 ? null : 1)" class="w-full p-5 text-left font-bold text-sm text-white flex items-center justify-between">
                    <span>Bagaimana prosedur mengawali kerjasama dengan {{ $tenant->name }}?</span>
                    <span class="text-sky-400 text-lg" x-text="activeFaq === 1 ? '−' : '+'"></span>
                </button>
                <div x-show="activeFaq === 1" class="px-5 pb-5 text-xs text-slate-400 leading-relaxed border-t border-slate-900 pt-3">
                    Anda dapat menghubungi tim konsultasi kami melalui form kontak atau WhatsApp resmi. Tim kami akan menjadwalkan sesi diskusi kebutuhan awal dan menyusun proposal solusi yang tepat.
                </div>
            </div>

            <div class="glass-panel rounded-xl overflow-hidden border border-slate-800">
                <button @click="activeFaq = (activeFaq === 2 ? null : 2)" class="w-full p-5 text-left font-bold text-sm text-white flex items-center justify-between">
                    <span>Apakah {{ $tenant->name }} melayani proyek di luar wilayah Jakarta?</span>
                    <span class="text-sky-400 text-lg" x-text="activeFaq === 2 ? '−' : '+'"></span>
                </button>
                <div x-show="activeFaq === 2" class="px-5 pb-5 text-xs text-slate-400 leading-relaxed border-t border-slate-900 pt-3">
                    Ya, kami memiliki jaringan operasional dan tim teknis yang siap menangani proyek di seluruh kota besar di Indonesia.
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
