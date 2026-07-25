<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Company Builder - Platform Enterprise Multi-Tenant SaaS Website Builder. Buat website company profile profesional, katalog produk, dan landing page tanpa coding & tanpa ribet hosting.">
        
        <title>Company Builder — Enterprise Multi-Tenant SaaS Website Builder</title>

        <!-- Google Fonts: Plus Jakarta Sans -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- Tailwind CSS & Alpine JS via CDN -->
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            brand: {
                                50: '#eef2ff',
                                100: '#e0e7ff',
                                200: '#c7d2fe',
                                500: '#6366f1',
                                600: '#4f46e5',
                                700: '#4338ca',
                                800: '#3730a3',
                                900: '#312e81',
                            }
                        },
                        fontFamily: {
                            sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        }
                    },
                },
            }
        </script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('landingApp', () => ({
                    showScrollTop: false,
                    init() {
                        window.addEventListener('scroll', () => {
                            this.showScrollTop = window.scrollY > 250;
                        });
                    },
                    scrollToTop() {
                        window.scrollTo({ top: 0, behavior: 'smooth' });
                    }
                }));
            });
        </script>
        
        <style>
            .bg-grid-dots {
                background-size: 24px 24px;
                background-image: radial-gradient(circle, rgba(99, 102, 241, 0.08) 1px, transparent 1px);
            }
        </style>
    </head>
    <body x-data="landingApp" class="bg-slate-50 text-slate-900 font-sans antialiased selection:bg-brand-500 selection:text-white overflow-x-hidden">
        
        <!-- Subtle Grid Pattern Background -->
        <div class="fixed inset-0 bg-grid-dots pointer-events-none z-0 opacity-80"></div>
        <div class="fixed top-0 left-1/2 -translate-x-1/2 w-[900px] h-[350px] bg-brand-500/10 blur-[140px] pointer-events-none z-0"></div>

        <div class="relative z-10">

            <!-- Navbar -->
            <header class="sticky top-0 z-40 bg-white/90 backdrop-blur-md border-b border-slate-200/80 shadow-sm">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between h-16 sm:h-20">
                        
                        <!-- Logo -->
                        <a href="/" class="flex items-center gap-3 group">
                            <div class="w-9 h-9 rounded-xl bg-brand-600 flex items-center justify-center text-white shadow-md shadow-brand-600/30 group-hover:scale-105 transition-transform">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <div class="flex flex-col">
                                <span class="font-bold text-lg tracking-tight text-slate-900">Company<span class="text-brand-600">Builder</span></span>
                                <span class="text-[10px] font-semibold text-slate-500 tracking-wider uppercase">Enterprise SaaS</span>
                            </div>
                        </a>

                        <!-- Nav Links -->
                        <nav class="hidden md:flex items-center gap-8 text-sm font-semibold text-slate-600">
                            <a href="#fitur" class="hover:text-brand-600 transition-colors">Fitur Platform</a>
                            <a href="#cara-kerja" class="hover:text-brand-600 transition-colors">Cara Kerja</a>
                            <a href="#template" class="hover:text-brand-600 transition-colors">Template</a>
                            <a href="#harga" class="hover:text-brand-600 transition-colors">Harga Paket</a>
                            <a href="#faq" class="hover:text-brand-600 transition-colors">FAQ</a>
                        </nav>

                        <!-- Auth Actions -->
                        <div class="flex items-center gap-3">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="px-5 py-2.5 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-bold text-sm transition-all shadow-md shadow-brand-600/20">
                                        Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" class="hidden sm:inline-flex px-3.5 py-2 text-sm font-semibold text-slate-600 hover:text-slate-900 transition-colors">
                                        Masuk
                                    </a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="px-5 py-2.5 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-bold text-sm transition-all shadow-md shadow-brand-600/25">
                                            Mulai Gratis
                                        </a>
                                    @endif
                                @endauth
                            @endif
                        </div>

                    </div>
                </div>
            </header>

            <!-- Hero Section -->
            <section class="pt-16 pb-20 sm:pt-24 sm:pb-28">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    
                    <div class="text-center max-w-4xl mx-auto">
                        
                        <!-- Feature Badge -->
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full border border-indigo-200 bg-indigo-50 text-indigo-700 text-xs sm:text-sm font-semibold mb-8 shadow-sm">
                            <span class="px-2 py-0.5 rounded-full bg-brand-600 text-white text-[11px] font-bold">Multi-Tenant Platform</span>
                            <span>Support Subdomain & Custom Domain SSL Otomatis</span>
                        </div>

                        <!-- Main Headline -->
                        <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight leading-[1.12] mb-8 text-slate-900">
                            Satu Platform SaaS Untuk <br class="hidden sm:block"/>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 via-indigo-600 to-sky-600">Ribuan Website Perusahaan</span>
                        </h1>

                        <!-- Subtitle -->
                        <p class="text-base sm:text-lg leading-relaxed mb-10 max-w-2xl mx-auto font-normal text-slate-600">
                            Buat, kelola, dan publikasikan website company profile, katalog produk, dan landing page profesional tanpa perlu membeli hosting atau mengelola server.
                        </p>

                        <!-- CTA Buttons -->
                        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16">
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-bold text-sm transition-all shadow-lg shadow-brand-600/30">
                                    <span>Mulai Buat Website Free</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </a>
                            @endif
                            <a href="#interactive-demo" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl border border-slate-300 bg-white text-slate-700 hover:bg-slate-50 hover:text-slate-900 font-semibold text-sm transition-all shadow-sm">
                                <svg class="w-4 h-4 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                <span>Coba Live Demo Builder</span>
                            </a>
                        </div>

                        <!-- Industry Trust Badges -->
                        <div class="pt-8 border-t border-slate-200 max-w-3xl mx-auto">
                            <p class="text-xs font-semibold tracking-wider uppercase mb-6 text-slate-500">Dipercaya oleh berbagai sektor industri di Indonesia</p>
                            <div class="flex flex-wrap items-center justify-center gap-8 sm:gap-12 text-xs font-semibold text-slate-600">
                                <div class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg> PT & Perusahaan</div>
                                <div class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg> Sekolah & Yayasan</div>
                                <div class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg> Cafe & Restoran</div>
                                <div class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg> Kontraktor & Jasa</div>
                            </div>
                        </div>

                    </div>

                    <!-- Interactive Live Builder Showcase -->
                    <div id="interactive-demo" class="mt-16 max-w-5xl mx-auto rounded-2xl border border-slate-200 bg-white shadow-xl overflow-hidden" x-data="{ 
                        componentTab: 'hero', 
                        deviceView: 'desktop',
                        waNumber: '+62 812-3456-7890',
                        companyName: 'PT Sinarniaga Solusindo'
                    }">
                        
                        <!-- Chrome Top Bar -->
                        <div class="px-4 py-3 border-b border-slate-200 bg-slate-100 flex flex-wrap items-center justify-between gap-4">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-rose-400"></div>
                                <div class="w-3 h-3 rounded-full bg-amber-400"></div>
                                <div class="w-3 h-3 rounded-full bg-emerald-400"></div>
                                <span class="ml-2 text-xs font-mono text-slate-500">Live Component Builder Canvas</span>
                            </div>

                            <!-- Device Toggle -->
                            <div class="flex items-center gap-1 p-1 rounded-lg border border-slate-200 bg-white text-xs">
                                <button @click="deviceView = 'desktop'" :class="deviceView === 'desktop' ? 'bg-brand-600 text-white' : 'text-slate-600 hover:text-slate-900'" class="px-2.5 py-1 rounded transition-colors flex items-center gap-1 font-semibold">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                    Desktop
                                </button>
                                <button @click="deviceView = 'mobile'" :class="deviceView === 'mobile' ? 'bg-brand-600 text-white' : 'text-slate-600 hover:text-slate-900'" class="px-2.5 py-1 rounded transition-colors flex items-center gap-1 font-semibold">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                                    Mobile
                                </button>
                            </div>

                            <!-- Live URL Address -->
                            <div class="hidden sm:flex items-center gap-2 px-3 py-1 rounded-md border border-slate-200 bg-white text-[11px] font-mono text-slate-600">
                                <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                                <span x-text="'https://' + companyName.toLowerCase().replace(/[^a-z0-9]/g, '') + '.company-builder.com'"></span>
                            </div>
                        </div>

                        <!-- Split Content -->
                        <div class="grid grid-cols-1 md:grid-cols-12 min-h-[400px]">
                            
                            <!-- Left Controls -->
                            <div class="md:col-span-4 p-5 border-r border-slate-200 bg-slate-50 flex flex-col justify-between">
                                <div>
                                    <div class="text-[11px] font-bold uppercase tracking-wider mb-4 text-slate-500">Pilih Komponen Website</div>
                                    <div class="space-y-2">
                                        <button @click="componentTab = 'hero'" :class="componentTab === 'hero' ? 'bg-brand-600 text-white shadow-sm' : 'bg-white border border-slate-200 text-slate-700 hover:text-slate-900'" class="w-full p-3 rounded-lg text-left text-xs font-bold transition-all flex items-center justify-between shadow-sm">
                                            <span>1. Hero Banner Component</span>
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                        </button>
                                        <button @click="componentTab = 'contact'" :class="componentTab === 'contact' ? 'bg-brand-600 text-white shadow-sm' : 'bg-white border border-slate-200 text-slate-700 hover:text-slate-900'" class="w-full p-3 rounded-lg text-left text-xs font-bold transition-all flex items-center justify-between shadow-sm">
                                            <span>2. Global WhatsApp Contact</span>
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                        </button>
                                        <button @click="componentTab = 'catalog'" :class="componentTab === 'catalog' ? 'bg-brand-600 text-white shadow-sm' : 'bg-white border border-slate-200 text-slate-700 hover:text-slate-900'" class="w-full p-3 rounded-lg text-left text-xs font-bold transition-all flex items-center justify-between shadow-sm">
                                            <span>3. Universal Product Catalog</span>
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                        </button>
                                    </div>

                                    <!-- Reactive Form Binding -->
                                    <div class="mt-6 pt-5 border-t border-slate-200">
                                        <div class="text-[11px] font-bold uppercase tracking-wider mb-3 text-slate-500">Data Perusahaan (Binding)</div>
                                        <div class="space-y-3">
                                            <div>
                                                <label class="block text-[11px] font-semibold mb-1 text-slate-600">Nama Perusahaan</label>
                                                <input type="text" x-model="companyName" class="w-full rounded-md px-3 py-1.5 text-xs font-medium border border-slate-300 bg-white text-slate-900 focus:ring-1 focus:ring-brand-500">
                                            </div>
                                            <div>
                                                <label class="block text-[11px] font-semibold mb-1 text-slate-600">No. WhatsApp Direct</label>
                                                <input type="text" x-model="waNumber" class="w-full rounded-md px-3 py-1.5 text-xs font-mono font-bold text-emerald-600 border border-slate-300 bg-white focus:ring-1 focus:ring-brand-500">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-6 text-[11px] text-slate-500">
                                    * Data di sebelah kiri langsung ter-binding ke tampilan website tenant di sebelah kanan secara real-time.
                                </div>
                            </div>

                            <!-- Right Canvas Preview -->
                            <div class="md:col-span-8 p-6 flex items-center justify-center transition-all duration-300 bg-slate-100/70" :class="deviceView === 'mobile' ? 'max-w-sm mx-auto' : 'w-full'">
                                
                                <div class="w-full rounded-xl p-6 shadow-md border border-slate-200 bg-white">
                                    
                                    <!-- TAB 1: HERO CANVAS -->
                                    <div x-show="componentTab === 'hero'" class="space-y-4">
                                        <div class="flex items-center justify-between border-b border-slate-200 pb-3">
                                            <div class="font-bold text-sm text-slate-900" x-text="companyName"></div>
                                            <div class="text-xs text-slate-500 flex items-center gap-3">
                                                <span>Beranda</span>
                                                <span>Layanan</span>
                                                <span class="px-2 py-0.5 rounded bg-emerald-50 text-emerald-600 text-[10px] font-bold border border-emerald-200">Online</span>
                                            </div>
                                        </div>
                                        <div class="py-6 text-center space-y-3">
                                            <span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-brand-50 text-brand-600 border border-brand-200">Solusi Terpercaya 2026</span>
                                            <h3 class="text-xl font-bold text-slate-900">Mitra Strategis Untuk Pertumbuhan Bisnis Anda</h3>
                                            <p class="text-xs max-w-md mx-auto text-slate-600">Kami menghadirkan layanan profesional berkualitas tinggi dengan standar internasional.</p>
                                            <div class="pt-2">
                                                <a href="#" class="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold shadow-md shadow-emerald-600/20">
                                                    <span>Hubungi via WhatsApp</span>
                                                    <span class="font-mono" x-text="waNumber"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- TAB 2: CONTACT CANVAS -->
                                    <div x-show="componentTab === 'contact'" class="space-y-4">
                                        <div class="text-xs font-bold uppercase tracking-wider text-brand-600">Kontak Respon Cepat</div>
                                        <h3 class="text-lg font-bold text-slate-900">Hubungi Tim Layanan Pelanggan</h3>
                                        <div class="p-4 rounded-lg border border-slate-200 bg-slate-50 space-y-3">
                                            <div class="flex items-center justify-between text-xs">
                                                <span class="text-slate-500">WhatsApp Resmi:</span>
                                                <span class="font-mono text-emerald-600 font-bold" x-text="waNumber"></span>
                                            </div>
                                            <div class="flex items-center justify-between text-xs">
                                                <span class="text-slate-500">Email Resmi:</span>
                                                <span class="text-slate-800">contact@company.com</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- TAB 3: CATALOG CANVAS -->
                                    <div x-show="componentTab === 'catalog'" class="space-y-4">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-sm font-bold text-slate-900">Katalog Produk & Jasa</h3>
                                            <span class="text-[10px] text-slate-500">2 Item Ditampilkan</span>
                                        </div>
                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                            <div class="p-3 rounded-lg border border-slate-200 bg-slate-50">
                                                <div class="h-20 rounded mb-2 flex items-center justify-center text-[10px] bg-slate-200 text-slate-500 font-medium">Gambar Produk A</div>
                                                <div class="font-bold text-xs text-slate-900">Paket Konsultasi Bisnis</div>
                                                <div class="text-xs font-bold mt-1 text-brand-600">Rp 2.500.000</div>
                                            </div>
                                            <div class="p-3 rounded-lg border border-slate-200 bg-slate-50">
                                                <div class="h-20 rounded mb-2 flex items-center justify-center text-[10px] bg-slate-200 text-slate-500 font-medium">Gambar Produk B</div>
                                                <div class="font-bold text-xs text-slate-900">Layanan Audit Sistem</div>
                                                <div class="text-xs font-bold mt-1 text-brand-600">Rp 5.000.000</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </section>

            <!-- Features Grid Section -->
            <section id="fitur" class="py-20 border-y border-slate-200/80 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    
                    <div class="text-center max-w-3xl mx-auto mb-16">
                        <h2 class="text-xs font-bold uppercase tracking-widest mb-3 text-brand-600">Keunggulan Arsitektur Enterprise</h2>
                        <p class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">Performa Tinggi, Aman, & Mudah Dioperasikan</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        
                        <!-- 1 -->
                        <div class="p-6 rounded-xl border border-slate-200/80 bg-slate-50/50 hover:bg-white hover:border-brand-200 hover:shadow-md transition-all">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-5 bg-brand-50 text-brand-600 border border-brand-100">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                            </div>
                            <h3 class="text-base font-bold mb-2 text-slate-900">Single-Instance Multi-Tenancy</h3>
                            <p class="text-xs leading-relaxed text-slate-600">Seluruh website berjalan dalam 1 instance Laravel dengan pembatasan skema data otomatis berbasis subdomain atau custom domain.</p>
                        </div>

                        <!-- 2 -->
                        <div class="p-6 rounded-xl border border-slate-200/80 bg-slate-50/50 hover:bg-white hover:border-brand-200 hover:shadow-md transition-all">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-5 bg-brand-50 text-brand-600 border border-brand-100">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                            </div>
                            <h3 class="text-base font-bold mb-2 text-slate-900">Component-Driven Builder</h3>
                            <p class="text-xs leading-relaxed text-slate-600">100+ variasi komponen siap disusun (Hero, About, Service, Pricing, Galeri, Contact, Footer) tanpa menulis sebaris kode CSS.</p>
                        </div>

                        <!-- 3 -->
                        <div class="p-6 rounded-xl border border-slate-200/80 bg-slate-50/50 hover:bg-white hover:border-brand-200 hover:shadow-md transition-all">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-5 bg-brand-50 text-brand-600 border border-brand-100">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            </div>
                            <h3 class="text-base font-bold mb-2 text-slate-900">Global Data Binding</h3>
                            <p class="text-xs leading-relaxed text-slate-600">Perubahan nomor WhatsApp, Email, dan Alamat Perusahaan di satu tempat otomatis memperbarui seluruh tombol kontak di website.</p>
                        </div>

                        <!-- 4 -->
                        <div class="p-6 rounded-xl border border-slate-200/80 bg-slate-50/50 hover:bg-white hover:border-brand-200 hover:shadow-md transition-all">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-5 bg-brand-50 text-brand-600 border border-brand-100">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                            </div>
                            <h3 class="text-base font-bold mb-2 text-slate-900">Universal Content Type</h3>
                            <p class="text-xs leading-relaxed text-slate-600">Satu sistem terpadu untuk Artikel Blog, Katalog Produk & Jasa, Portofolio Proyek, FAQ, dan Berkas Unduhan PDF/Doc.</p>
                        </div>

                        <!-- 5 -->
                        <div class="p-6 rounded-xl border border-slate-200/80 bg-slate-50/50 hover:bg-white hover:border-brand-200 hover:shadow-md transition-all">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-5 bg-brand-50 text-brand-600 border border-brand-100">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                            </div>
                            <h3 class="text-base font-bold mb-2 text-slate-900">Auto SEO & Schema.org</h3>
                            <p class="text-xs leading-relaxed text-slate-600">Meta tag, Canonical, OpenGraph, JSON-LD Schema.org, dan Sitemap XML dibuat otomatis untuk meningkatkan peringkat pencarian.</p>
                        </div>

                        <!-- 6 -->
                        <div class="p-6 rounded-xl border border-slate-200/80 bg-slate-50/50 hover:bg-white hover:border-brand-200 hover:shadow-md transition-all">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-5 bg-brand-50 text-brand-600 border border-brand-100">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                            </div>
                            <h3 class="text-base font-bold mb-2 text-slate-900">SSL & Keamanan Terisolasi</h3>
                            <p class="text-xs leading-relaxed text-slate-600">Proteksi CSRF, XSS, rate-limiting per IP, serta SSL gratis yang diterbitkan secara otomatis untuk custom domain tenant.</p>
                        </div>

                    </div>

                </div>
            </section>

            <!-- Workflow Section -->
            <section id="cara-kerja" class="py-20">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    
                    <div class="text-center max-w-2xl mx-auto mb-16">
                        <h2 class="text-xs font-bold uppercase tracking-widest mb-3 text-brand-600">Langkah Penggunaan</h2>
                        <p class="text-3xl sm:text-4xl font-extrabold text-slate-900">4 Langkah Dari Nol Hingga Online</p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        
                        <div class="p-5 rounded-xl border border-slate-200 bg-white shadow-sm">
                            <div class="text-xs font-bold font-mono text-brand-600 mb-2">LANGKAH 01</div>
                            <h4 class="text-base font-bold text-slate-900 mb-2">Registrasi SaaS</h4>
                            <p class="text-xs text-slate-600">Buat akun perusahaan dan pilih paket berlangganan sesuai kebutuhan.</p>
                        </div>

                        <div class="p-5 rounded-xl border border-slate-200 bg-white shadow-sm">
                            <div class="text-xs font-bold font-mono text-brand-600 mb-2">LANGKAH 02</div>
                            <h4 class="text-base font-bold text-slate-900 mb-2">Pilih Template</h4>
                            <p class="text-xs text-slate-600">Pilih dari koleksi template teruji untuk sektor bisnis Anda.</p>
                        </div>

                        <div class="p-5 rounded-xl border border-slate-200 bg-white shadow-sm">
                            <div class="text-xs font-bold font-mono text-brand-600 mb-2">LANGKAH 03</div>
                            <h4 class="text-base font-bold text-slate-900 mb-2">Atur Konten & WA</h4>
                            <p class="text-xs text-slate-600">Isi identitas perusahaan, produk, artikel, dan komponen pendukung.</p>
                        </div>

                        <div class="p-5 rounded-xl border border-slate-200 bg-white shadow-sm">
                            <div class="text-xs font-bold font-mono text-emerald-600 mb-2">LANGKAH 04</div>
                            <h4 class="text-base font-bold text-slate-900 mb-2">Publish Instan</h4>
                            <p class="text-xs text-slate-600">Website aktif di subdomain atau custom domain dalam 1-klik.</p>
                        </div>

                    </div>

                </div>
            </section>

            <!-- Template Catalog Showcase -->
            <section id="template" class="py-20 border-y border-slate-200 bg-white" x-data="{ filter: 'all' }">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    
                    <div class="text-center max-w-2xl mx-auto mb-12">
                        <h2 class="text-xs font-bold uppercase tracking-widest mb-3 text-brand-600">Template Siap Pakai</h2>
                        <p class="text-3xl sm:text-4xl font-extrabold text-slate-900">Desain Profesional Siap Dalam Hitungan Menit</p>
                    </div>

                    <!-- Filters -->
                    <div class="flex flex-wrap items-center justify-center gap-2 mb-10">
                        <button @click="filter = 'all'" :class="filter === 'all' ? 'bg-brand-600 text-white shadow-sm' : 'bg-slate-100 border border-slate-200 text-slate-700 hover:bg-slate-200'" class="px-4 py-2 rounded-lg text-xs font-semibold transition-colors">Semua Industri</button>
                        <button @click="filter = 'corp'" :class="filter === 'corp' ? 'bg-brand-600 text-white shadow-sm' : 'bg-slate-100 border border-slate-200 text-slate-700 hover:bg-slate-200'" class="px-4 py-2 rounded-lg text-xs font-semibold transition-colors">Corporate & PT</button>
                        <button @click="filter = 'culinary'" :class="filter === 'culinary' ? 'bg-brand-600 text-white shadow-sm' : 'bg-slate-100 border border-slate-200 text-slate-700 hover:bg-slate-200'" class="px-4 py-2 rounded-lg text-xs font-semibold transition-colors">Restoran & Cafe</button>
                        <button @click="filter = 'service'" :class="filter === 'service' ? 'bg-brand-600 text-white shadow-sm' : 'bg-slate-100 border border-slate-200 text-slate-700 hover:bg-slate-200'" class="px-4 py-2 rounded-lg text-xs font-semibold transition-colors">Kontraktor & Jasa</button>
                    </div>

                    <!-- Template Items -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        
                        <!-- 1 -->
                        <div class="rounded-xl border border-slate-200 bg-slate-50/60 overflow-hidden flex flex-col justify-between shadow-sm hover:shadow-md transition-shadow" x-show="filter === 'all' || filter === 'corp'">
                            <div class="p-5 border-b border-slate-200">
                                <div class="flex items-center justify-between mb-3">
                                    <span class="px-2 py-0.5 rounded bg-brand-50 text-brand-600 text-[10px] font-bold border border-brand-100">Corporate</span>
                                    <span class="text-[10px] text-slate-500 font-medium">Multi Page</span>
                                </div>
                                <h4 class="font-bold text-base text-slate-900">Nusantara Capital Holding</h4>
                                <p class="text-xs text-slate-600 mt-1">Hero Variant 12 • Product Grid • WA Direct</p>
                            </div>
                            <div class="p-4 flex items-center justify-between bg-white">
                                <span class="text-xs text-slate-500">12 Komponen</span>
                                <a href="#" class="text-xs font-semibold text-brand-600 hover:underline">Preview Demo &rarr;</a>
                            </div>
                        </div>

                        <!-- 2 -->
                        <div class="rounded-xl border border-slate-200 bg-slate-50/60 overflow-hidden flex flex-col justify-between shadow-sm hover:shadow-md transition-shadow" x-show="filter === 'all' || filter === 'culinary'">
                            <div class="p-5 border-b border-slate-200">
                                <div class="flex items-center justify-between mb-3">
                                    <span class="px-2 py-0.5 rounded bg-amber-50 text-amber-700 text-[10px] font-bold border border-amber-200">Culinary</span>
                                    <span class="text-[10px] text-slate-500 font-medium">One Page</span>
                                </div>
                                <h4 class="font-bold text-base text-slate-900">Kopi Kenangan Senja</h4>
                                <p class="text-xs text-slate-600 mt-1">Katalog Menu • Jam Operasional • Maps</p>
                            </div>
                            <div class="p-4 flex items-center justify-between bg-white">
                                <span class="text-xs text-slate-500">8 Komponen</span>
                                <a href="#" class="text-xs font-semibold text-amber-700 hover:underline">Preview Demo &rarr;</a>
                            </div>
                        </div>

                        <!-- 3 -->
                        <div class="rounded-xl border border-slate-200 bg-slate-50/60 overflow-hidden flex flex-col justify-between shadow-sm hover:shadow-md transition-shadow" x-show="filter === 'all' || filter === 'service'">
                            <div class="p-5 border-b border-slate-200">
                                <div class="flex items-center justify-between mb-3">
                                    <span class="px-2 py-0.5 rounded bg-emerald-50 text-emerald-700 text-[10px] font-bold border border-emerald-200">Kontraktor</span>
                                    <span class="text-[10px] text-slate-500 font-medium">Multi Page</span>
                                </div>
                                <h4 class="font-bold text-base text-slate-900">Adhi Karya Konstruksi</h4>
                                <p class="text-xs text-slate-600 mt-1">Portofolio Proyek • Download Brosur PDF</p>
                            </div>
                            <div class="p-4 flex items-center justify-between bg-white">
                                <span class="text-xs text-slate-500">14 Komponen</span>
                                <a href="#" class="text-xs font-semibold text-emerald-700 hover:underline">Preview Demo &rarr;</a>
                            </div>
                        </div>

                    </div>

                </div>
            </section>

            <!-- Pricing Section -->
            <section id="harga" class="py-20" x-data="{ isYearly: false }">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    
                    <div class="text-center max-w-2xl mx-auto mb-10">
                        <h2 class="text-xs font-bold uppercase tracking-widest mb-3 text-brand-600">Paket & Investasi</h2>
                        <p class="text-3xl sm:text-4xl font-extrabold mb-6 text-slate-900">Pilih Paket Sesuai Kebutuhan Bisnis</p>
                        
                        <!-- Yearly Toggle -->
                        <div class="inline-flex items-center gap-3 p-1.5 rounded-xl border border-slate-200 bg-white text-xs shadow-sm">
                            <span :class="!isYearly ? 'text-slate-900 font-bold' : 'text-slate-500'">Bayar Bulanan</span>
                            <button @click="isYearly = !isYearly" class="w-12 h-6 rounded-full bg-slate-200 p-1 relative transition-colors">
                                <div class="w-4 h-4 rounded-full bg-brand-600 transition-transform" :class="isYearly ? 'translate-x-6' : 'translate-x-0'"></div>
                            </button>
                            <span :class="isYearly ? 'text-slate-900 font-bold' : 'text-slate-500'" class="flex items-center gap-1">
                                Bayar Tahunan
                                <span class="px-1.5 py-0.5 rounded bg-emerald-50 text-emerald-700 text-[10px] font-bold border border-emerald-200">Hemat 20%</span>
                            </span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                        
                        <!-- Basic -->
                        <div class="p-6 rounded-xl border border-slate-200 bg-white flex flex-col justify-between shadow-sm">
                            <div>
                                <h3 class="text-lg font-bold mb-1 text-slate-900">Basic</h3>
                                <p class="text-xs mb-4 text-slate-500">Untuk usaha mikro atau website darurat.</p>
                                <div class="text-3xl font-extrabold mb-6 text-slate-900">
                                    <span x-text="isYearly ? 'Rp 79rb' : 'Rp 99rb'"></span>
                                    <span class="text-xs font-normal text-slate-500">/bulan</span>
                                </div>
                                <ul class="space-y-2.5 text-xs text-slate-600 mb-8">
                                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 1 Website Subdomain</li>
                                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Maksimal 10 Halaman</li>
                                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Global WhatsApp Binding</li>
                                </ul>
                            </div>
                            <a href="{{ route('register') }}" class="w-full py-2.5 rounded-lg bg-slate-100 hover:bg-slate-200 text-center text-xs font-bold text-slate-900 transition-colors">Pilih Basic</a>
                        </div>

                        <!-- Professional (POPULAR) -->
                        <div class="p-6 rounded-xl border-2 border-brand-600 relative flex flex-col justify-between bg-white shadow-xl shadow-brand-600/10">
                            <div class="absolute -top-3 left-1/2 -translate-x-1/2 px-3 py-0.5 rounded-full bg-brand-600 text-white text-[10px] font-bold tracking-wider uppercase shadow-sm">Rekomendasi</div>
                            <div>
                                <h3 class="text-lg font-bold mb-1 text-slate-900">Professional</h3>
                                <p class="text-xs mb-4 text-slate-500">Untuk perusahaan & bisnis berkembang.</p>
                                <div class="text-3xl font-extrabold mb-6 text-slate-900">
                                    <span x-text="isYearly ? 'Rp 199rb' : 'Rp 249rb'"></span>
                                    <span class="text-xs font-normal text-slate-500">/bulan</span>
                                </div>
                                <ul class="space-y-2.5 text-xs text-slate-600 mb-8">
                                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Custom Domain Ready (`nama.com`)</li>
                                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Unlimited Halaman & Blog</li>
                                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Universal Katalog & Download</li>
                                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Automatic SEO & Schema.org</li>
                                </ul>
                            </div>
                            <a href="{{ route('register') }}" class="w-full py-2.5 rounded-lg bg-brand-600 hover:bg-brand-700 text-center text-xs font-bold text-white transition-colors shadow-md shadow-brand-600/25">Mulai Langganan</a>
                        </div>

                        <!-- Enterprise -->
                        <div class="p-6 rounded-xl border border-slate-200 bg-white flex flex-col justify-between shadow-sm">
                            <div>
                                <h3 class="text-lg font-bold mb-1 text-slate-900">Enterprise</h3>
                                <p class="text-xs mb-4 text-slate-500">Untuk holding & institusi besar.</p>
                                <div class="text-3xl font-extrabold mb-6 text-slate-900">
                                    <span x-text="isYearly ? 'Rp 499rb' : 'Rp 599rb'"></span>
                                    <span class="text-xs font-normal text-slate-500">/bulan</span>
                                </div>
                                <ul class="space-y-2.5 text-xs text-slate-600 mb-8">
                                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Semua Fitur Professional</li>
                                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Dedicated Support SLA 24/7</li>
                                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Request Custom Component</li>
                                </ul>
                            </div>
                            <a href="{{ route('register') }}" class="w-full py-2.5 rounded-lg bg-slate-100 hover:bg-slate-200 text-center text-xs font-bold text-slate-900 transition-colors">Hubungi Sales</a>
                        </div>

                    </div>

                </div>
            </section>

            <!-- FAQ Section -->
            <section id="faq" class="py-20 border-t border-slate-200 bg-white">
                <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{ openFaq: 1 }">
                    
                    <div class="text-center mb-12">
                        <h2 class="text-xs font-bold uppercase tracking-widest mb-3 text-brand-600">Pertanyaan Umum</h2>
                        <p class="text-3xl font-extrabold text-slate-900">Jawaban Untuk Pertanyaan Anda</p>
                    </div>

                    <div class="space-y-3">
                        
                        <div class="rounded-lg border border-slate-200 bg-slate-50/50 overflow-hidden">
                            <button @click="openFaq = openFaq === 1 ? 0 : 1" class="w-full p-4 text-left flex items-center justify-between font-bold text-sm text-slate-900">
                                <span>Apakah saya perlu menyewa web hosting terpisah?</span>
                                <svg class="w-4 h-4 text-slate-500 transition-transform" :class="openFaq === 1 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </button>
                            <div x-show="openFaq === 1" class="p-4 pt-0 text-xs leading-relaxed border-t border-slate-200 text-slate-600 bg-white">
                                Tidak perlu. Platform Company Builder adalah layanan SaaS Multi-Tenant penuh. Seluruh hosting, server, infrastruktur database, dan penerbitan SSL sudah ditangani secara otomatis.
                            </div>
                        </div>

                        <div class="rounded-lg border border-slate-200 bg-slate-50/50 overflow-hidden">
                            <button @click="openFaq = openFaq === 2 ? 0 : 2" class="w-full p-4 text-left flex items-center justify-between font-bold text-sm text-slate-900">
                                <span>Apakah website saya bisa memakai Custom Domain sendiri (seperti domain .com)?</span>
                                <svg class="w-4 h-4 text-slate-500 transition-transform" :class="openFaq === 2 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </button>
                            <div x-show="openFaq === 2" class="p-4 pt-0 text-xs leading-relaxed border-t border-slate-200 text-slate-600 bg-white">
                                Ya. Pada paket Professional dan Enterprise, Anda bisa mengarahkan CNAME / A Record domain milik Anda langsung ke platform ini. SSL certificate akan terbit secara otomatis.
                            </div>
                        </div>

                        <div class="rounded-lg border border-slate-200 bg-slate-50/50 overflow-hidden">
                            <button @click="openFaq = openFaq === 3 ? 0 : 3" class="w-full p-4 text-left flex items-center justify-between font-bold text-sm text-slate-900">
                                <span>Bagaimana jika saya ingin mengubah nomor WhatsApp di seluruh website?</span>
                                <svg class="w-4 h-4 text-slate-500 transition-transform" :class="openFaq === 3 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </button>
                            <div x-show="openFaq === 3" class="p-4 pt-0 text-xs leading-relaxed border-t border-slate-200 text-slate-600 bg-white">
                                Cukup perbarui di menu Pengaturan Data Perusahaan. Berkat fitur Global Data Binding, seluruh tombol kontak WhatsApp di semua komponen dan halaman website Anda akan ter-update otomatis seketika.
                            </div>
                        </div>

                    </div>

                </div>
            </section>

            <!-- Bottom CTA Banner -->
            <section class="py-16">
                <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="p-8 sm:p-12 rounded-2xl bg-gradient-to-r from-brand-600 to-indigo-700 text-white border border-brand-500 text-center relative overflow-hidden shadow-xl shadow-brand-600/20">
                        <h2 class="text-2xl sm:text-4xl font-extrabold tracking-tight mb-4">Siapkan Presence Online Perusahaan Anda Hari Ini</h2>
                        <p class="text-sm max-w-xl mx-auto mb-8 text-indigo-100 font-normal">Gabung bersama bisnis terpercaya lainnya dan bangun website company profile profesional dalam hitungan menit.</p>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-white text-slate-900 hover:bg-slate-100 font-extrabold text-sm transition-all shadow-lg">
                                <span>Buat Website Gratis Sekarang</span>
                                <svg class="w-4 h-4 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </a>
                        @endif
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <footer class="py-8 border-t border-slate-200 bg-white text-slate-500 text-xs">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div>
                        <span class="font-bold text-slate-900">Company<span class="text-brand-600">Builder</span></span>
                        <span class="ml-2">&copy; {{ date('Y') }} Platform Multi-Tenant SaaS. All rights reserved.</span>
                    </div>
                    <div class="flex items-center gap-6 font-medium">
                        <a href="#fitur" class="hover:text-slate-900 transition-colors">Fitur</a>
                        <a href="#harga" class="hover:text-slate-900 transition-colors">Harga</a>
                        <a href="#faq" class="hover:text-slate-900 transition-colors">FAQ</a>
                    </div>
                </div>
            </footer>

            <!-- Floating Scroll-To-Top Button -->
            <button @click="scrollToTop()" 
                    x-show="showScrollTop" 
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-10"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 translate-y-10"
                    class="fixed bottom-6 right-6 z-50 p-3 rounded-full bg-brand-600 hover:bg-brand-700 text-white shadow-lg shadow-brand-600/40 flex items-center justify-center transition-all hover:scale-110"
                    aria-label="Kembali ke Atas">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                </svg>
            </button>

        </div>

    </body>
</html>
