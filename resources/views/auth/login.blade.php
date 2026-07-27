@extends('layouts.saas')

@section('title', 'Masuk ke Akun - Company Builder SaaS')

@section('content')
<div class="min-h-[calc(100vh-200px)] flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-slate-50">
    <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-2xl border border-slate-200 shadow-xl">
        <div class="text-center space-y-2">
            <div class="w-12 h-12 rounded-xl bg-indigo-600 text-white flex items-center justify-center font-bold text-xl mx-auto shadow-md shadow-indigo-600/20">
                🏢
            </div>
            <h2 class="text-2xl font-extrabold text-slate-900">Masuk ke Akun Platform</h2>
            <p class="text-xs text-slate-500">Masukkan email dan kata sandi terdaftar Anda</p>
        </div>

        <form action="{{ url('/customer/dashboard') }}" method="GET" class="space-y-4 pt-2">
            <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Email Perusahaan / Pengguna *</label>
                <input type="email" required value="adi@google.co.id" class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-300 text-slate-900 text-xs focus:border-indigo-600 focus:outline-none focus:ring-1 focus:ring-indigo-600">
            </div>

            <div>
                <div class="flex items-center justify-between mb-1">
                    <label class="block text-xs font-bold text-slate-700">Kata Sandi *</label>
                    <a href="#" class="text-[11px] font-bold text-indigo-600 hover:underline">Lupa Kata Sandi?</a>
                </div>
                <input type="password" required value="password123" class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-300 text-slate-900 text-xs focus:border-indigo-600 focus:outline-none focus:ring-1 focus:ring-indigo-600">
            </div>

            <div class="flex items-center">
                <input id="remember" type="checkbox" checked class="w-4 h-4 text-indigo-600 rounded border-slate-300">
                <label for="remember" class="ml-2 text-xs text-slate-600 font-medium">Ingat Saya di Perangkat Ini</label>
            </div>

            <button type="submit" class="w-full py-3.5 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white font-bold text-xs shadow-md shadow-indigo-600/20 transition">
                Masuk ke Dashboard &rarr;
            </button>
        </form>

        <div class="pt-4 border-t border-slate-100 text-center">
            <p class="text-xs text-slate-600">
                Belum memiliki akun? 
                <a href="{{ url('/register') }}" class="font-bold text-indigo-600 hover:underline ml-1">Daftar Akun Gratis</a>
            </p>
        </div>
    </div>
</div>
@endsection
