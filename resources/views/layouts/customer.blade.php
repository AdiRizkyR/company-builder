<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Customer Portal - Company Builder SaaS')</title>
    <link rel="icon" href="https://fav.farm/⚙️" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-900 font-sans antialiased min-h-screen flex custom-scrollbar">

    <!-- Customer Sidebar (Light Clean Theme) -->
    <aside class="w-64 bg-white border-r border-slate-200 flex flex-col justify-between hidden md:flex shrink-0 shadow-sm">
        <div>
            <!-- Sidebar Header -->
            <div class="h-20 border-b border-slate-200 px-6 flex items-center justify-between">
                <a href="{{ url('/') }}" class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-lg bg-indigo-600 flex items-center justify-center font-bold text-white shadow-sm">
                        CB
                    </div>
                    <div class="flex flex-col">
                        <span class="font-bold text-sm text-slate-900 leading-tight">CompanyBuilder</span>
                        <span class="text-[10px] text-slate-500 font-medium">Customer Portal</span>
                    </div>
                </a>
            </div>

            <!-- Active Tenant Selector Box -->
            <div class="p-3.5 mx-3 my-4 rounded-xl bg-slate-50 border border-slate-200 flex items-center justify-between">
                <div class="flex items-center gap-3 overflow-hidden">
                    <div class="w-8 h-8 rounded-lg bg-indigo-600 shrink-0 flex items-center justify-center text-xs font-bold text-white">
                        GI
                    </div>
                    <div class="truncate">
                        <span class="text-xs font-bold text-slate-900 block truncate">Google Indonesia</span>
                        <span class="text-[10px] text-emerald-700 font-bold block">Enterprise Plan ● Aktif</span>
                    </div>
                </div>
                <a href="{{ url('/google-indonesia') }}" target="_blank" title="Lihat Website Public" class="text-slate-400 hover:text-indigo-600">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                </a>
            </div>

            <!-- Navigation Links -->
            <nav class="px-3 space-y-1 text-xs font-semibold">
                <a href="{{ url('/customer/dashboard') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl transition {{ request()->is('customer/dashboard') ? 'bg-indigo-600 text-white font-bold shadow-sm' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                    Dashboard Utama
                </a>

                <a href="{{ url('/customer/builder') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl transition {{ request()->is('customer/builder') ? 'bg-indigo-600 text-white font-bold shadow-sm' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                    <span>Section Builder</span>
                    <span class="ml-auto px-1.5 py-0.5 text-[9px] font-bold rounded bg-indigo-100 text-indigo-700">BUILDER</span>
                </a>

                <a href="{{ url('/customer/profile') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl transition {{ request()->is('customer/profile') ? 'bg-indigo-600 text-white font-bold shadow-sm' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0h4m-4 0V11m0 4h4"/></svg>
                    Profil Perusahaan
                </a>

                <a href="{{ url('/customer/themes') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl transition {{ request()->is('customer/themes') ? 'bg-indigo-600 text-white font-bold shadow-sm' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>
                    Tema & Tampilan
                </a>

                <a href="{{ url('/customer/content') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl transition {{ request()->is('customer/content') ? 'bg-indigo-600 text-white font-bold shadow-sm' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                    Manajer Konten
                </a>

                <a href="{{ url('/customer/seo') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl transition {{ request()->is('customer/seo') ? 'bg-indigo-600 text-white font-bold shadow-sm' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    SEO & Meta Tags
                </a>

                <a href="{{ url('/customer/subscription') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl transition {{ request()->is('customer/subscription') ? 'bg-indigo-600 text-white font-bold shadow-sm' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                    Langganan & Domain
                </a>
            </nav>
        </div>

        <!-- Sidebar User Footer -->
        <div class="p-4 border-t border-slate-200 bg-slate-50">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2.5 truncate">
                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80" alt="User Profile" class="w-8 h-8 rounded-full object-cover border border-slate-300">
                    <div class="flex flex-col truncate">
                        <span class="text-xs font-bold text-slate-900 truncate">Adi Rizky</span>
                        <span class="text-[10px] text-slate-500 truncate">adi@google.co.id</span>
                    </div>
                </div>
                <a href="{{ url('/login') }}" title="Keluar / Logout" class="text-slate-400 hover:text-rose-600">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                </a>
            </div>
        </div>
    </aside>

    <!-- Main Content Area -->
    <div class="flex-grow flex flex-col min-w-0">
        <header class="h-20 bg-white border-b border-slate-200 px-6 flex items-center justify-between sticky top-0 z-30 shadow-sm">
            <div class="flex items-center gap-4">
                <h1 class="text-base font-bold text-slate-900">@yield('page_title', 'Dashboard Customer')</h1>
            </div>

            <div class="flex items-center gap-3">
                <a href="{{ url('/google-indonesia') }}" target="_blank" class="px-3.5 py-2 rounded-xl bg-indigo-50 hover:bg-indigo-100 text-indigo-700 border border-indigo-200 text-xs font-bold flex items-center gap-1.5 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                    Pratinjau Live Website
                </a>
                <a href="{{ url('/login') }}" class="text-xs font-semibold text-slate-600 hover:text-slate-900 px-3 py-2 rounded-lg hover:bg-slate-100">
                    Keluar / Logout
                </a>
            </div>
        </header>

        <main class="p-6 flex-grow">
            @yield('content')
        </main>
    </div>

</body>
</html>
