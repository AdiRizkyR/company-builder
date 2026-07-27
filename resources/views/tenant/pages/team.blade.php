@extends('layouts.tenant')

@section('title', 'Tim Manajerial - ' . $tenant->name)

@section('content')
<section class="py-16 bg-slate-900 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <span class="text-xs font-bold text-sky-400 uppercase tracking-widest block mb-2">Struktur Kepemimpinan</span>
        <h1 class="text-4xl font-extrabold text-white">Tim Manajerial & Eksekutif</h1>
        <p class="text-slate-300 text-sm mt-3 max-w-2xl">Para profesional berpengalaman yang memimpin arah visi dan eksekusi operasional {{ $tenant->name }}.</p>
    </div>
</section>

<section class="py-20 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
            <div class="glass-panel p-6 rounded-2xl border border-slate-800 text-center space-y-4">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=300&q=80" alt="Team 1" class="w-24 h-24 rounded-2xl mx-auto object-cover border border-slate-700">
                <div>
                    <h3 class="text-base font-bold text-white">Bambang Susilo</h3>
                    <span class="text-xs text-sky-400 font-semibold block mt-0.5">Chief Executive Officer (CEO)</span>
                    <p class="text-[11px] text-slate-400 mt-2">18+ tahun pengalaman memimpin transformasi bisnis industri.</p>
                </div>
            </div>

            <div class="glass-panel p-6 rounded-2xl border border-slate-800 text-center space-y-4">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=300&q=80" alt="Team 2" class="w-24 h-24 rounded-2xl mx-auto object-cover border border-slate-700">
                <div>
                    <h3 class="text-base font-bold text-white">Siti Nurhaliza</h3>
                    <span class="text-xs text-indigo-400 font-semibold block mt-0.5">Chief Technology Officer (CTO)</span>
                    <p class="text-[11px] text-slate-400 mt-2">Pakar arsitektur sistem cloud terdistribusi dan keamanan data.</p>
                </div>
            </div>

            <div class="glass-panel p-6 rounded-2xl border border-slate-800 text-center space-y-4">
                <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=300&q=80" alt="Team 3" class="w-24 h-24 rounded-2xl mx-auto object-cover border border-slate-700">
                <div>
                    <h3 class="text-base font-bold text-white">Hendrik Wijaya</h3>
                    <span class="text-xs text-purple-400 font-semibold block mt-0.5">Chief Operations Officer (COO)</span>
                    <p class="text-[11px] text-slate-400 mt-2">Spesialis efisiensi rantai pasok dan kualitas layanan.</p>
                </div>
            </div>

            <div class="glass-panel p-6 rounded-2xl border border-slate-800 text-center space-y-4">
                <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=300&q=80" alt="Team 4" class="w-24 h-24 rounded-2xl mx-auto object-cover border border-slate-700">
                <div>
                    <h3 class="text-base font-bold text-white">Diana Putri</h3>
                    <span class="text-xs text-pink-400 font-semibold block mt-0.5">VP of Marketing & Growth</span>
                    <p class="text-[11px] text-slate-400 mt-2">Strategis komunikasi merek dan kemitraan strategis.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
