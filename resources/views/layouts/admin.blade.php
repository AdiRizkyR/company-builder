<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Super Admin Console - Company Builder SaaS')</title>
    <link rel="icon" href="https://fav.farm/👑" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-900 font-sans antialiased min-h-screen flex custom-scrollbar">

    <!-- Super Admin Sidebar (Light Theme) -->
    <aside class="w-64 bg-white border-r border-slate-200 flex flex-col justify-between hidden md:flex shrink-0 shadow-sm">
        <div>
            <!-- Sidebar Header -->
            <div class="h-20 border-b border-slate-200 px-6 flex items-center justify-between">
                <a href="{{ url('/admin/dashboard') }}" class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-lg bg-amber-500 flex items-center justify-center font-bold text-white shadow-sm">
                        👑
                    </div>
                    <div class="flex flex-col">
                        <span class="font-bold text-sm text-slate-900 leading-tight">SuperAdmin</span>
                        <span class="text-[10px] text-amber-700 font-bold uppercase tracking-wider">SaaS Platform Core</span>
                    </div>
                </a>
            </div>

            <div class="px-3 py-3">
                <div class="px-3 py-1 text-[10px] font-bold text-slate-400 uppercase tracking-widest">Platform Management</div>
            </div>

            <!-- Navigation Links -->
            <nav class="px-3 space-y-1 text-xs font-semibold">
                <a href="{{ url('/admin/dashboard') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl transition {{ request()->is('admin/dashboard') ? 'bg-amber-600 text-white font-bold shadow-sm' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    Executive Overview
                </a>

                <a href="{{ url('/admin/tenants') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl transition {{ request()->is('admin/tenants') ? 'bg-amber-600 text-white font-bold shadow-sm' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0h4m-4 0V11m0 4h4"/></svg>
                    Manajemen Tenant (4,820)
                </a>

                <a href="{{ url('/admin/plans') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl transition {{ request()->is('admin/plans') ? 'bg-amber-600 text-white font-bold shadow-sm' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    Paket & Subscription
                </a>

                <a href="{{ url('/admin/themes') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl transition {{ request()->is('admin/themes') ? 'bg-amber-600 text-white font-bold shadow-sm' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg>
                    Registry Modular Theme
                </a>

                <a href="{{ url('/admin/tickets') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl transition {{ request()->is('admin/tickets') ? 'bg-amber-600 text-white font-bold shadow-sm' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span>Support Ticket</span>
                    <span class="ml-auto px-1.5 py-0.5 text-[9px] font-bold rounded bg-rose-500 text-white">5 New</span>
                </a>
            </nav>
        </div>

        <div class="p-4 border-t border-slate-200 bg-slate-50">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-full bg-amber-100 border border-amber-300 flex items-center justify-center font-bold text-amber-700 text-xs">
                        SA
                    </div>
                    <div class="flex flex-col truncate">
                        <span class="text-xs font-bold text-slate-900 truncate">Super Admin HQ</span>
                        <span class="text-[10px] text-slate-500">root@primaryweb.com</span>
                    </div>
                </div>
                <a href="{{ url('/') }}" class="text-slate-400 hover:text-slate-700 text-xs font-bold">Logout</a>
            </div>
        </div>
    </aside>

    <!-- Main Content Area -->
    <div class="flex-grow flex flex-col min-w-0">
        <header class="h-20 bg-white border-b border-slate-200 px-6 flex items-center justify-between sticky top-0 z-30 shadow-sm">
            <div class="flex items-center gap-4">
                <h1 class="text-base font-bold text-slate-900">@yield('page_title', 'Super Admin Console')</h1>
            </div>

            <div class="flex items-center gap-4">
                <a href="{{ url('/') }}" class="text-xs font-semibold text-slate-600 hover:text-slate-900">
                    Kembali ke Homepage
                </a>
            </div>
        </header>

        <main class="p-6 flex-grow">
            @yield('content')
        </main>
    </div>

</body>
</html>
