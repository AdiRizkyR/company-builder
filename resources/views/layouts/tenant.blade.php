<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', $tenant->name ?? 'Company Profile') - {{ $tenant->tagline ?? '' }}</title>
    <meta name="description" content="@yield('meta_description', $tenant->tagline ?? 'Profil Perusahaan Resmi')">
    <meta property="og:title" content="{{ $tenant->name ?? 'Company Profile' }}">
    <meta property="og:description" content="{{ $tenant->tagline ?? '' }}">
    <meta property="og:image" content="{{ $tenant->hero_image ?? '' }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ $tenant->logo ?? 'https://fav.farm/🏢' }}" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
@php
    $theme = request('theme') ?? ($tenant->theme ?? 'corporate');
    $slug = $tenant->slug ?? 'google-indonesia';
    
    // Theme palette mappings (Clean Light Mode)
    $themeStyles = [
        'corporate' => [
            'bg' => 'bg-slate-50',
            'text' => 'text-slate-900',
            'nav' => 'bg-white/95 backdrop-blur-md border-slate-200 shadow-sm',
            'accent' => 'bg-sky-600 hover:bg-sky-700 text-white shadow-sm',
            'accent_text' => 'text-sky-700',
            'card' => 'bg-white border-slate-200 shadow-sm',
            'font' => 'font-sans'
        ],
        'startup' => [
            'bg' => 'bg-slate-50',
            'text' => 'text-slate-900',
            'nav' => 'bg-white/95 backdrop-blur-md border-indigo-100 shadow-sm',
            'accent' => 'bg-indigo-600 hover:bg-indigo-700 text-white shadow-md shadow-indigo-600/20',
            'accent_text' => 'text-indigo-600',
            'card' => 'bg-white border-indigo-100 shadow-sm',
            'font' => 'font-sans'
        ],
        'minimal' => [
            'bg' => 'bg-stone-50',
            'text' => 'text-stone-900',
            'nav' => 'bg-white/95 backdrop-blur-md border-stone-200 shadow-sm',
            'accent' => 'bg-emerald-700 hover:bg-emerald-800 text-white shadow-sm',
            'accent_text' => 'text-emerald-700',
            'card' => 'bg-white border-stone-200 shadow-sm',
            'font' => 'font-sans'
        ]
    ];
    $activeStyle = $themeStyles[$theme] ?? $themeStyles['corporate'];
@endphp
<body class="{{ $activeStyle['bg'] }} {{ $activeStyle['text'] }} {{ $activeStyle['font'] }} min-h-screen flex flex-col justify-between selection:bg-indigo-600 selection:text-white" x-data="{ mobileNav: false }">

    <!-- SaaS Toolbar (Floating preview bar for theme switching) -->
    <div class="bg-indigo-600 text-white py-2 px-4 text-xs sticky top-0 z-50 flex items-center justify-between shadow-sm">
        <div class="flex items-center gap-3">
            <span class="inline-flex items-center gap-1 font-bold px-2 py-0.5 rounded bg-white/20 text-white">
                <span class="w-2 h-2 rounded-full bg-emerald-300 animate-pulse"></span>
                PRATINJAU TENANT
            </span>
            <span class="hidden md:inline text-indigo-100">
                Situs: <strong class="text-white">{{ $tenant->name }}</strong> 
                <span class="opacity-80">({{ url('/' . $slug) }})</span>
            </span>
        </div>

        <div class="flex items-center gap-3">
            <!-- Theme Switcher Buttons -->
            <div class="flex items-center gap-1.5">
                <span class="hidden sm:inline text-indigo-100">Tema:</span>
                <a href="{{ request()->fullUrlWithQuery(['theme' => 'corporate']) }}" class="px-2 py-1 rounded text-[11px] font-bold transition {{ $theme === 'corporate' ? 'bg-white text-indigo-700' : 'bg-indigo-700 text-indigo-100 hover:bg-indigo-800' }}">
                    Corporate
                </a>
                <a href="{{ request()->fullUrlWithQuery(['theme' => 'startup']) }}" class="px-2 py-1 rounded text-[11px] font-bold transition {{ $theme === 'startup' ? 'bg-white text-indigo-700' : 'bg-indigo-700 text-indigo-100 hover:bg-indigo-800' }}">
                    Tech Startup
                </a>
                <a href="{{ request()->fullUrlWithQuery(['theme' => 'minimal']) }}" class="px-2 py-1 rounded text-[11px] font-bold transition {{ $theme === 'minimal' ? 'bg-white text-indigo-700' : 'bg-indigo-700 text-indigo-100 hover:bg-indigo-800' }}">
                    Minimal
                </a>
            </div>

            <div class="h-3.5 w-px bg-indigo-400"></div>

            <a href="{{ url('/customer/builder') }}" class="font-bold text-white hover:underline flex items-center gap-1">
                Edit Section
            </a>
        </div>
    </div>

    <!-- Tenant Header / Navigation -->
    <header class="sticky top-8 z-40 border-b {{ $activeStyle['nav'] }} transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <!-- Brand Logo & Name -->
            <a href="{{ url('/' . $slug) }}" class="flex items-center gap-3">
                @if(!empty($tenant->logo))
                    <img src="{{ $tenant->logo }}" alt="{{ $tenant->name }}" class="w-10 h-10 rounded-xl object-cover border border-slate-200 shadow-sm">
                @else
                    <div class="w-10 h-10 rounded-xl bg-indigo-600 flex items-center justify-center font-bold text-white text-xl">
                        {{ substr($tenant->name, 0, 1) }}
                    </div>
                @endif
                <div>
                    <span class="font-bold text-lg text-slate-900 tracking-tight block">{{ $tenant->name }}</span>
                    <span class="text-[11px] text-slate-500 block -mt-1 font-medium max-w-[200px] truncate">{{ $tenant->tagline }}</span>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <nav class="hidden lg:flex items-center gap-6 text-sm font-semibold text-slate-700">
                <a href="{{ url('/' . $slug) }}" class="hover:text-indigo-600 transition {{ request()->is($slug) ? 'text-indigo-600 font-extrabold' : '' }}">Beranda</a>
                <a href="{{ url('/' . $slug . '/about') }}" class="hover:text-indigo-600 transition {{ request()->is($slug . '/about') ? 'text-indigo-600 font-extrabold' : '' }}">Tentang Kami</a>
                <a href="{{ url('/' . $slug . '/services') }}" class="hover:text-indigo-600 transition {{ request()->is($slug . '/services') ? 'text-indigo-600 font-extrabold' : '' }}">Layanan</a>
                <a href="{{ url('/' . $slug . '/products') }}" class="hover:text-indigo-600 transition {{ request()->is($slug . '/products') ? 'text-indigo-600 font-extrabold' : '' }}">Produk</a>
                <a href="{{ url('/' . $slug . '/portfolio') }}" class="hover:text-indigo-600 transition {{ request()->is($slug . '/portfolio') ? 'text-indigo-600 font-extrabold' : '' }}">Portfolio</a>
                <a href="{{ url('/' . $slug . '/gallery') }}" class="hover:text-indigo-600 transition {{ request()->is($slug . '/gallery') ? 'text-indigo-600 font-extrabold' : '' }}">Galeri</a>
                <a href="{{ url('/' . $slug . '/blog') }}" class="hover:text-indigo-600 transition {{ request()->is($slug . '/blog') ? 'text-indigo-600 font-extrabold' : '' }}">Blog</a>
                <a href="{{ url('/' . $slug . '/team') }}" class="hover:text-indigo-600 transition {{ request()->is($slug . '/team') ? 'text-indigo-600 font-extrabold' : '' }}">Tim</a>
                <a href="{{ url('/' . $slug . '/faq') }}" class="hover:text-indigo-600 transition {{ request()->is($slug . '/faq') ? 'text-indigo-600 font-extrabold' : '' }}">FAQ</a>
            </nav>

            <!-- Action CTA & Mobile Toggle -->
            <div class="flex items-center gap-3">
                <a href="{{ url('/' . $slug . '/contact') }}" class="px-5 py-2.5 rounded-xl text-xs font-bold transition {{ $activeStyle['accent'] }}">
                    Hubungi Kami
                </a>
                <button @click="mobileNav = !mobileNav" class="lg:hidden p-2 text-slate-700 hover:bg-slate-100 rounded-lg">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
            </div>
        </div>

        <!-- Mobile Drawer -->
        <div x-show="mobileNav" x-collapse class="lg:hidden bg-white border-b border-slate-200 px-4 py-3 space-y-2">
            <a href="{{ url('/' . $slug) }}" class="block py-2 text-sm font-semibold text-slate-700">Beranda</a>
            <a href="{{ url('/' . $slug . '/about') }}" class="block py-2 text-sm font-semibold text-slate-700">Tentang Kami</a>
            <a href="{{ url('/' . $slug . '/services') }}" class="block py-2 text-sm font-semibold text-slate-700">Layanan</a>
            <a href="{{ url('/' . $slug . '/products') }}" class="block py-2 text-sm font-semibold text-slate-700">Produk</a>
            <a href="{{ url('/' . $slug . '/portfolio') }}" class="block py-2 text-sm font-semibold text-slate-700">Portfolio</a>
            <a href="{{ url('/' . $slug . '/contact') }}" class="block py-2 text-sm font-semibold text-slate-700">Kontak</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Tenant Footer -->
    <footer class="bg-white border-t border-slate-200 pt-16 pb-10 text-slate-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-12">
                <div class="space-y-3">
                    <div class="flex items-center gap-3">
                        <img src="{{ $tenant->logo }}" alt="{{ $tenant->name }}" class="w-8 h-8 rounded-lg object-cover">
                        <span class="font-bold text-slate-900 text-lg">{{ $tenant->name }}</span>
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        {{ $tenant->tagline }}
                    </p>
                    <div class="pt-2 text-xs text-slate-600 space-y-1">
                        <p class="font-semibold text-slate-800">{{ $tenant->contact['address'] ?? '' }}</p>
                        <p>Telp: {{ $tenant->contact['phone'] ?? '' }}</p>
                        <p>Email: {{ $tenant->contact['email'] ?? '' }}</p>
                    </div>
                </div>

                <div>
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 mb-4">Navigasi Halaman</h4>
                    <ul class="space-y-2 text-xs">
                        <li><a href="{{ url('/' . $slug . '/about') }}" class="hover:text-indigo-600">Tentang Kami</a></li>
                        <li><a href="{{ url('/' . $slug . '/services') }}" class="hover:text-indigo-600">Layanan Utama</a></li>
                        <li><a href="{{ url('/' . $slug . '/products') }}" class="hover:text-indigo-600">Katalog Produk</a></li>
                        <li><a href="{{ url('/' . $slug . '/portfolio') }}" class="hover:text-indigo-600">Studi Kasus & Portfolio</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 mb-4">Informasi & Artikel</h4>
                    <ul class="space-y-2 text-xs">
                        <li><a href="{{ url('/' . $slug . '/blog') }}" class="hover:text-indigo-600">Artikel & Berita Terbaru</a></li>
                        <li><a href="{{ url('/' . $slug . '/team') }}" class="hover:text-indigo-600">Struktur Manajerial & Tim</a></li>
                        <li><a href="{{ url('/' . $slug . '/faq') }}" class="hover:text-indigo-600">Pertanyaan Umum (FAQ)</a></li>
                        <li><a href="{{ url('/' . $slug . '/contact') }}" class="hover:text-indigo-600">Peta Lokasi Kantor</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 mb-4">Media Sosial</h4>
                    <div class="flex items-center gap-2 text-xs">
                        <a href="#" class="px-3 py-1.5 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold">Instagram</a>
                        <a href="#" class="px-3 py-1.5 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold">LinkedIn</a>
                    </div>
                </div>
            </div>

            <div class="border-t border-slate-200 pt-8 flex flex-col md:flex-row items-center justify-between text-xs text-slate-500">
                <p>&copy; {{ date('Y') }} {{ $tenant->name }}. Hak Cipta Dilindungi.</p>
                <div class="mt-4 md:mt-0 flex items-center gap-1.5">
                    <span>Powered by</span>
                    <a href="{{ url('/') }}" class="font-bold text-indigo-600 hover:underline">
                        CompanyBuilder SaaS
                    </a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
