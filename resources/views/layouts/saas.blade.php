<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Company Builder SaaS - Platform Pembuat Website Company Profile')</title>
    <meta name="description" content="Platform Pembuat Website Company Profile Profesional. Buat website perusahaan impian Anda dalam hitungan menit tanpa coding & tanpa hosting.">

    <!-- Favicon -->
    <link rel="icon" href="https://fav.farm/🚀" />

    <!-- Fonts & Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-900 font-sans antialiased selection:bg-indigo-600 selection:text-white min-h-screen flex flex-col justify-between custom-scrollbar" x-data="{ mobileMenu: false }">

    <!-- Top Notification Bar -->
    <div class="bg-gradient-to-r from-indigo-600 via-indigo-700 to-purple-600 text-white text-xs py-2 px-4 text-center font-medium flex items-center justify-center gap-2 shadow-sm">
        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-bold bg-white/20 text-white border border-white/30">UPDATE</span>
        <span>Modul Visual Section Builder & Tema Korporat v2.0 Siap Digunakan!</span>
        <a href="#pricing" class="underline font-bold text-white hover:text-indigo-100 ml-1">Coba Gratis &rarr;</a>
    </div>

    <!-- Main SaaS Header -->
    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-slate-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-indigo-600 flex items-center justify-center shadow-md shadow-indigo-600/20 group-hover:scale-105 transition duration-300">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0h4m-4 0V11m0 4h4" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-xl tracking-tight text-slate-900 flex items-center gap-1">
                        Company<span class="text-indigo-600">Builder</span>
                    </span>
                    <span class="text-[10px] tracking-wider text-slate-500 font-semibold uppercase">Profile Builder SaaS</span>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <nav class="hidden md:flex items-center gap-8 text-sm font-semibold text-slate-600">
                <a href="#features" class="hover:text-indigo-600 transition-colors">Fitur Utama</a>
                <a href="#builder" class="hover:text-indigo-600 transition-colors">Section Builder</a>
                <a href="#themes" class="hover:text-indigo-600 transition-colors">Koleksi Tema</a>
                <a href="#pricing" class="hover:text-indigo-600 transition-colors">Harga Paket</a>
                <a href="#faq" class="hover:text-indigo-600 transition-colors">FAQ</a>
            </nav>

            <!-- Action Buttons: Login & Register -->
            <div class="hidden sm:flex items-center gap-3">
                <a href="{{ url('/login') }}" class="px-4 py-2.5 text-xs font-bold text-slate-700 hover:text-indigo-600 hover:bg-slate-100 rounded-xl transition">
                    Masuk
                </a>
                <a href="{{ url('/register') }}" class="px-5 py-2.5 text-xs font-bold text-white bg-indigo-600 hover:bg-indigo-700 rounded-xl shadow-md shadow-indigo-600/20 hover:shadow-indigo-600/30 transition transform hover:-translate-y-0.5">
                    Daftar Gratis
                </a>
                <a href="{{ url('/customer/dashboard') }}" class="px-3 py-2 text-xs font-semibold bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-xl border border-slate-200 transition">
                    Dashboard
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <button @click="mobileMenu = !mobileMenu" class="sm:hidden p-2 rounded-lg text-slate-600 hover:text-slate-900 hover:bg-slate-100 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileMenu" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="mobileMenu" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Mobile Drawer Navigation -->
        <div x-show="mobileMenu" x-collapse class="sm:hidden bg-white border-b border-slate-200 px-4 pt-3 pb-6 space-y-3">
            <a href="#features" @click="mobileMenu = false" class="block py-2 text-sm font-semibold text-slate-700 hover:text-indigo-600">Fitur Utama</a>
            <a href="#builder" @click="mobileMenu = false" class="block py-2 text-sm font-semibold text-slate-700 hover:text-indigo-600">Section Builder</a>
            <a href="#themes" @click="mobileMenu = false" class="block py-2 text-sm font-semibold text-slate-700 hover:text-indigo-600">Koleksi Tema</a>
            <a href="#pricing" @click="mobileMenu = false" class="block py-2 text-sm font-semibold text-slate-700 hover:text-indigo-600">Harga Paket</a>
            
            <div class="pt-4 border-t border-slate-100 flex flex-col gap-2">
                <a href="{{ url('/login') }}" class="w-full py-2.5 text-center text-sm font-bold text-slate-700 border border-slate-200 rounded-xl bg-slate-50">
                    Masuk ke Akun
                </a>
                <a href="{{ url('/register') }}" class="w-full py-2.5 text-center text-sm font-bold text-white bg-indigo-600 rounded-xl shadow-md">
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- SaaS Footer -->
    <footer class="bg-white border-t border-slate-200 pt-16 pb-12 text-slate-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-10 mb-12">
                <div class="md:col-span-2 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-indigo-600 flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0h4m-4 0V11m0 4h4" />
                            </svg>
                        </div>
                        <span class="font-bold text-lg text-slate-900">CompanyBuilder SaaS</span>
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed max-w-sm">
                        Solusi praktis dan sederhana untuk membuat website profil perusahaan profesional tanpa perlu koding dan tanpa sewa hosting terpisah.
                    </p>
                    <div class="text-xs text-emerald-600 font-medium flex items-center gap-1.5">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        Status Server: 99.99% Operational
                    </div>
                </div>

                <div>
                    <h4 class="text-xs font-bold text-slate-900 uppercase tracking-wider mb-4">Navigasi Utama</h4>
                    <ul class="space-y-2.5 text-xs">
                        <li><a href="#features" class="hover:text-indigo-600">Fitur Platform</a></li>
                        <li><a href="#builder" class="hover:text-indigo-600">Section Builder</a></li>
                        <li><a href="#themes" class="hover:text-indigo-600">Pilihan Tema</a></li>
                        <li><a href="#pricing" class="hover:text-indigo-600">Daftar Harga</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-xs font-bold text-slate-900 uppercase tracking-wider mb-4">Akun & Akses</h4>
                    <ul class="space-y-2.5 text-xs">
                        <li><a href="{{ url('/login') }}" class="hover:text-indigo-600 font-semibold">Masuk Akun (Login)</a></li>
                        <li><a href="{{ url('/register') }}" class="hover:text-indigo-600 font-semibold">Daftar Akun Baru</a></li>
                        <li><a href="{{ url('/customer/dashboard') }}" class="hover:text-indigo-600">Customer Dashboard</a></li>
                        <li><a href="{{ url('/admin/dashboard') }}" class="hover:text-indigo-600">Super Admin Console</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-xs font-bold text-slate-900 uppercase tracking-wider mb-4">Demo Website Tenant</h4>
                    <ul class="space-y-2.5 text-xs">
                        <li><a href="{{ url('/google-indonesia') }}" class="hover:text-indigo-600 flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span> Google Indonesia</a></li>
                        <li><a href="{{ url('/pt-maju-bersama') }}" class="hover:text-indigo-600 flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span> PT Maju Bersama</a></li>
                        <li><a href="{{ url('/tgrj') }}" class="hover:text-indigo-600 flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-purple-500"></span> TGRJ Studio</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-slate-200 pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500">
                <p>&copy; {{ date('Y') }} Company Builder SaaS. Hak Cipta Dilindungi.</p>
                <div class="flex gap-6 mt-4 sm:mt-0">
                    <a href="#" class="hover:text-slate-800">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-slate-800">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
