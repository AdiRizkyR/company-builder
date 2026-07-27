@extends('layouts.saas')

@section('title', 'Daftar Akun Baru - Company Builder SaaS')

@section('content')
<div class="min-h-[calc(100vh-200px)] flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-slate-50">
    <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-2xl border border-slate-200 shadow-xl">
        <div class="text-center space-y-2">
            <div class="w-12 h-12 rounded-xl bg-gradient-to-tr from-indigo-600 to-purple-600 text-white flex items-center justify-center font-bold text-xl mx-auto shadow-md shadow-indigo-600/20">
                🚀
            </div>
            <h2 class="text-2xl font-extrabold text-slate-900">Daftar Akun Gratis</h2>
            <p class="text-xs text-slate-500">Mulai buat website profil perusahaan Anda dalam 5 menit</p>
        </div>

        <form action="{{ url('/customer/dashboard') }}" method="GET" class="space-y-4 pt-2">
            <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Nama Lengkap *</label>
                <input type="text" required placeholder="Masukkan nama lengkap Anda" class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-300 text-slate-900 text-xs focus:border-indigo-600 focus:outline-none">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Nama Perusahaan / Bisnis *</label>
                <input type="text" required placeholder="Contoh: PT Sukses Mandiri" class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-300 text-slate-900 text-xs focus:border-indigo-600 focus:outline-none">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Email Perusahaan / Aktif *</label>
                <input type="email" required placeholder="nama@perusahaan.com" class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-300 text-slate-900 text-xs focus:border-indigo-600 focus:outline-none">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Buat Kata Sandi *</label>
                <input type="password" required placeholder="Minimal 8 karakter" class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-300 text-slate-900 text-xs focus:border-indigo-600 focus:outline-none">
            </div>

            <button type="submit" class="w-full py-3.5 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white font-bold text-xs shadow-md shadow-indigo-600/20 transition">
                Buat Akun & Mulai Builder &rarr;
            </button>
        </form>

        <div class="pt-4 border-t border-slate-100 text-center">
            <p class="text-xs text-slate-600">
                Sudah memiliki akun? 
                <a href="{{ url('/login') }}" class="font-bold text-indigo-600 hover:underline ml-1">Masuk ke Akun</a>
            </p>
        </div>
    </div>
</div>
@endsection
