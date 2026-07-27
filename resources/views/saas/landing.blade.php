@extends('layouts.saas')

@section('title', 'Company Builder SaaS - Buat Website Perusahaan dengan Mudah & Cepat')

@section('content')

<!-- Hero Section (Light Clean Design) -->
<section class="relative overflow-hidden pt-12 pb-20 lg:pt-20 lg:pb-28 bg-gradient-to-b from-indigo-50/50 via-slate-50 to-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto space-y-6">
            <!-- Simple Badge -->
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-indigo-100 border border-indigo-200 text-indigo-700 text-xs font-bold shadow-sm">
                <span>✨ Platform Pembuat Website Perusahaan #1</span>
            </div>

            <!-- Main Heading -->
            <h1 class="text-4xl sm:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.15]">
                Buat Website Company Profile 
                <span class="text-indigo-600 block mt-2">Mudah, Cepat, dan Tanpa Coding</span>
            </h1>

            <!-- Subtitle -->
            <p class="text-base sm:text-lg text-slate-600 leading-relaxed font-normal">
                Pilih tema resmi perusahaan Anda, atur section sesuai kebutuhan, dan publikasikan situs profil bisnis profesional Anda dalam 5 menit.
            </p>

            <!-- CTA Action Buttons (Daftar & Masuk) -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
                <a href="{{ url('/register') }}" class="w-full sm:w-auto px-8 py-4 text-sm font-bold text-white bg-indigo-600 hover:bg-indigo-700 rounded-2xl shadow-lg shadow-indigo-600/20 hover:shadow-indigo-600/30 transition transform hover:-translate-y-0.5 text-center">
                    🚀 Daftar Gratis Sekarang
                </a>
                <a href="{{ url('/login') }}" class="w-full sm:w-auto px-8 py-4 text-sm font-bold text-slate-700 bg-white hover:bg-slate-100 border border-slate-300 rounded-2xl transition shadow-sm text-center">
                    🔑 Masuk ke Akun
                </a>
                <a href="{{ url('/google-indonesia') }}" target="_blank" class="w-full sm:w-auto px-6 py-4 text-sm font-bold text-indigo-600 bg-indigo-50 hover:bg-indigo-100 rounded-2xl transition text-center flex items-center justify-center gap-1.5">
                    <span>Lihat Contoh Demo</span> &rarr;
                </a>
            </div>

            <!-- Feature Checklist Badges -->
            <div class="pt-6 flex flex-wrap items-center justify-center gap-6 text-xs text-slate-600 font-semibold">
                <span class="flex items-center gap-1.5"><svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Tanpa Biaya Server / Hosting</span>
                <span class="flex items-center gap-1.5"><svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Subdomain & Domain Kustom</span>
                <span class="flex items-center gap-1.5"><svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg> Tampilan Sederhana & Responsif</span>
            </div>
        </div>

        <!-- Clean Preview Mockup Frame -->
        <div class="mt-14 max-w-5xl mx-auto rounded-2xl bg-white p-2 shadow-2xl border border-slate-200">
            <!-- Browser Top Bar -->
            <div class="bg-slate-100 rounded-t-xl px-4 py-3 border-b border-slate-200 flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full bg-rose-400 inline-block"></span>
                    <span class="w-3 h-3 rounded-full bg-amber-400 inline-block"></span>
                    <span class="w-3 h-3 rounded-full bg-emerald-400 inline-block"></span>
                </div>
                <div class="bg-white px-5 py-1 rounded-lg border border-slate-300 text-xs text-slate-700 font-mono flex items-center gap-2">
                    <svg class="w-3.5 h-3.5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                    <span>primaryweb.com/<strong class="text-indigo-600">google-indonesia</strong></span>
                </div>
                <div class="text-xs text-slate-500 font-bold hidden sm:block">Contoh Website Tenant</div>
            </div>

            <!-- Preview Image Area -->
            <div class="bg-slate-50 rounded-b-xl overflow-hidden relative">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1200&q=80" alt="Demo Preview" class="w-full h-80 sm:h-96 object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/30 to-transparent flex flex-col justify-end p-8 text-white">
                    <span class="text-xs font-bold uppercase tracking-wider text-indigo-300">Preset Tema Korporat</span>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-white">Google Indonesia Corporate</h3>
                    <p class="text-xs sm:text-sm text-slate-200 mt-1 max-w-lg">Profil perusahaan modern, cepat, dan mudah diakses dari perangkat HP maupun Laptop.</p>
                    <div class="mt-4">
                        <a href="{{ url('/google-indonesia') }}" target="_blank" class="px-4 py-2 rounded-xl bg-indigo-600 text-white font-bold text-xs shadow hover:bg-indigo-700 transition inline-block">
                            Buka Preview Website Lengkap &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Grid (Simple Light Cards) -->
<section id="features" class="py-20 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
            <span class="text-xs font-bold text-indigo-600 uppercase tracking-wider">Keunggulan Platform</span>
            <h2 class="text-3xl font-extrabold text-slate-900">Mengapa Menggunakan Company Builder?</h2>
            <p class="text-slate-600 text-sm">Dirancang sederhana agar siapa saja dapat mengelola situs profil perusahaan dengan cepat.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 space-y-3">
                <div class="w-12 h-12 rounded-xl bg-indigo-100 text-indigo-600 flex items-center justify-center font-bold text-xl">🧩</div>
                <h3 class="text-base font-bold text-slate-900">Section Builder Visual</h3>
                <p class="text-xs text-slate-600 leading-relaxed">Atur urutan Hero, Profil, Layanan, Produk, dan Kontak dengan tombol sederhana tanpa merusak layout.</p>
            </div>

            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 space-y-3">
                <div class="w-12 h-12 rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center font-bold text-xl">🎨</div>
                <h3 class="text-base font-bold text-slate-900">Pilihan Tema Modular</h3>
                <p class="text-xs text-slate-600 leading-relaxed">Ganti tema sesuai jenis industri Anda tanpa perlu mengunggah ulang data artikel dan produk.</p>
            </div>

            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 space-y-3">
                <div class="w-12 h-12 rounded-xl bg-sky-100 text-sky-600 flex items-center justify-center font-bold text-xl">📱</div>
                <h3 class="text-base font-bold text-slate-900">100% Responsif di Semua Perangkat</h3>
                <p class="text-xs text-slate-600 leading-relaxed">Tampilan otomatis menyesuaikan layar Smartphone, Tablet, hingga Layar Komputer dengan sempurna.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section Builder Interactive Teaser -->
<section id="builder" class="py-20 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-5">
                <span class="text-xs font-bold text-indigo-600 uppercase tracking-wider">Kemudahan Pengelolaan</span>
                <h2 class="text-3xl font-extrabold text-slate-900">Atur Isi Halaman Sesuai Keinginan Anda</h2>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Anda cukup memilih bagian mana yang ingin ditampilkan atau disembunyikan. Semua perubahan dapat dilihat secara langsung sebelum dipublikasikan.
                </p>

                <div class="space-y-3 pt-2">
                    <div class="p-4 rounded-xl bg-white border border-slate-200 shadow-sm flex items-center gap-4">
                        <div class="w-8 h-8 rounded-lg bg-indigo-600 text-white font-bold flex items-center justify-center text-xs shrink-0">1</div>
                        <div>
                            <h4 class="text-xs font-bold text-slate-900">Aktifkan atau Sembunyikan Section</h4>
                            <p class="text-[11px] text-slate-500 mt-0.5">Toggle ON/OFF untuk Hero, Tentang Kami, Produk, Layanan, dan Kontak.</p>
                        </div>
                    </div>

                    <div class="p-4 rounded-xl bg-white border border-slate-200 shadow-sm flex items-center gap-4">
                        <div class="w-8 h-8 rounded-lg bg-purple-600 text-white font-bold flex items-center justify-center text-xs shrink-0">2</div>
                        <div>
                            <h4 class="text-xs font-bold text-slate-900">Ubah Urutan Posisi</h4>
                            <p class="text-[11px] text-slate-500 mt-0.5">Gunakan panah Ke Atas / Ke Bawah untuk mengatur posisi section.</p>
                        </div>
                    </div>
                </div>

                <div class="pt-2">
                    <a href="{{ url('/customer/builder') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white font-bold text-xs shadow-md transition">
                        Coba Simulasi Builder &rarr;
                    </a>
                </div>
            </div>

            <!-- Light Interactive Simulator -->
            <div x-data="{
                sections: [
                    { id: 'hero', name: 'Hero Banner Utama', active: true },
                    { id: 'about', name: 'Tentang Perusahaan', active: true },
                    { id: 'services', name: 'Layanan Utama', active: true },
                    { id: 'products', name: 'Katalog Produk', active: true },
                    { id: 'team', name: 'Tim Manajerial', active: true },
                    { id: 'contact', name: 'Form Kontak & Lokasi', active: true }
                ]
            }" class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xl">
                <div class="flex items-center justify-between pb-3 border-b border-slate-200 mb-4">
                    <span class="text-xs font-bold text-slate-900 uppercase">Simulasi Section Control</span>
                    <span class="text-[10px] text-indigo-600 font-bold bg-indigo-50 px-2 py-0.5 rounded">Live Demo</span>
                </div>

                <div class="space-y-2.5">
                    <template x-for="(sec, idx) in sections" :key="sec.id">
                        <div class="flex items-center justify-between p-3 rounded-xl bg-slate-50 border border-slate-200">
                            <div class="flex items-center gap-3">
                                <span class="text-xs font-mono text-slate-400" x-text="'#' + (idx + 1)"></span>
                                <span class="text-xs font-bold" :class="sec.active ? 'text-slate-800' : 'text-slate-400 line-through'" x-text="sec.name"></span>
                            </div>
                            <button @click="sec.active = !sec.active" 
                                    :class="sec.active ? 'bg-emerald-600 text-white' : 'bg-slate-200 text-slate-600'" 
                                    class="px-3 py-1 rounded-lg text-[11px] font-bold transition">
                                <span x-text="sec.active ? 'TAMPIL' : 'SEMBUNYI'"></span>
                            </button>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Themes Showcase -->
<section id="themes" class="py-20 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14 space-y-3">
            <span class="text-xs font-bold text-indigo-600 uppercase tracking-wider">Pilihan Tema</span>
            <h2 class="text-3xl font-extrabold text-slate-900">Desain Profesional Siap Pakai</h2>
            <p class="text-slate-600 text-sm">Pilih desain yang paling sesuai dengan identitas bisnis Anda.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-slate-50 rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md transition">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=600&q=80" alt="Corporate" class="w-full h-44 object-cover">
                <div class="p-5 space-y-2">
                    <span class="text-[10px] font-bold text-sky-700 bg-sky-100 px-2 py-0.5 rounded uppercase">Corporate</span>
                    <h3 class="text-base font-bold text-slate-900">Corporate Executive</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">Cocok untuk perusahaan manufaktur, finansial, dan jasa profesional B2B.</p>
                    <div class="pt-3 border-t border-slate-200 flex justify-between items-center text-xs">
                        <span class="text-slate-500 font-mono text-[10px]">#T-CORP</span>
                        <a href="{{ url('/pt-maju-bersama?theme=corporate') }}" target="_blank" class="font-bold text-sky-600 hover:underline">Pratinjau &rarr;</a>
                    </div>
                </div>
            </div>

            <div class="bg-slate-50 rounded-2xl overflow-hidden border-2 border-indigo-600 shadow-md">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=600&q=80" alt="Startup" class="w-full h-44 object-cover">
                <div class="p-5 space-y-2">
                    <span class="text-[10px] font-bold text-indigo-700 bg-indigo-100 px-2 py-0.5 rounded uppercase">Tech & Startup</span>
                    <h3 class="text-base font-bold text-slate-900">Tech & Innovation</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">Desain modern untuk perusahaan teknologi, software house, dan agensi digital.</p>
                    <div class="pt-3 border-t border-slate-200 flex justify-between items-center text-xs">
                        <span class="text-slate-500 font-mono text-[10px]">#T-STARTUP</span>
                        <a href="{{ url('/google-indonesia?theme=startup') }}" target="_blank" class="font-bold text-indigo-600 hover:underline">Pratinjau &rarr;</a>
                    </div>
                </div>
            </div>

            <div class="bg-slate-50 rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md transition">
                <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=600&q=80" alt="Minimal" class="w-full h-44 object-cover">
                <div class="p-5 space-y-2">
                    <span class="text-[10px] font-bold text-emerald-700 bg-emerald-100 px-2 py-0.5 rounded uppercase">Minimalist</span>
                    <h3 class="text-base font-bold text-slate-900">Minimalist Studio</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">Tampilan bersih berbasis tipografi elegan untuk studio arsitektur & kreator.</p>
                    <div class="pt-3 border-t border-slate-200 flex justify-between items-center text-xs">
                        <span class="text-slate-500 font-mono text-[10px]">#T-MINIMAL</span>
                        <a href="{{ url('/tgrj?theme=minimal') }}" target="_blank" class="font-bold text-emerald-600 hover:underline">Pratinjau &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Plans (Light Clean Cards) -->
<section id="pricing" class="py-20 bg-slate-50 border-b border-slate-200" x-data="{ yearly: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12 space-y-3">
            <span class="text-xs font-bold text-indigo-600 uppercase tracking-wider">Harga Terjangkau</span>
            <h2 class="text-3xl font-extrabold text-slate-900">Pilih Paket Sesuai Kebutuhan Bisnis</h2>
            <p class="text-slate-600 text-sm">Tanpa biaya tersembunyi. Dapat di-upgrade atau dibatalkan kapan saja.</p>

            <div class="pt-3 flex items-center justify-center gap-4">
                <span class="text-xs font-bold" :class="!yearly ? 'text-slate-900' : 'text-slate-400'">Tagihan Bulanan</span>
                <button @click="yearly = !yearly" class="w-12 h-7 rounded-full p-1 bg-indigo-600 transition relative focus:outline-none">
                    <div class="w-5 h-5 rounded-full bg-white shadow transform transition" :class="yearly ? 'translate-x-5' : 'translate-x-0'"></div>
                </button>
                <span class="text-xs font-bold flex items-center gap-1.5" :class="yearly ? 'text-slate-900' : 'text-slate-400'">
                    Tagihan Tahunan <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-700">Hemat 20%</span>
                </span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <!-- Free -->
            <div class="bg-white p-6 rounded-2xl border border-slate-200 flex flex-col justify-between shadow-sm">
                <div>
                    <h3 class="text-base font-bold text-slate-900">Free Starter</h3>
                    <p class="text-xs text-slate-500 mt-1">Uji coba awal</p>
                    <div class="my-5">
                        <span class="text-3xl font-extrabold text-slate-900">Rp 0</span>
                    </div>
                    <ul class="space-y-2.5 text-xs text-slate-600">
                        <li>✓ Subdomain primaryweb.com/slug</li>
                        <li>✓ Max 5 Section Builder</li>
                        <li>✓ Storage Media 100MB</li>
                    </ul>
                </div>
                <a href="{{ url('/register') }}" class="mt-6 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 font-bold text-xs text-center transition">Daftar Gratis</a>
            </div>

            <!-- Basic -->
            <div class="bg-white p-6 rounded-2xl border border-slate-200 flex flex-col justify-between shadow-sm">
                <div>
                    <h3 class="text-base font-bold text-slate-900">Basic Profile</h3>
                    <p class="text-xs text-slate-500 mt-1">Profil bisnis berkembang</p>
                    <div class="my-5">
                        <span class="text-3xl font-extrabold text-slate-900" x-text="yearly ? 'Rp 79rb' : 'Rp 99rb'"></span>
                        <span class="text-xs text-slate-500"> /bulan</span>
                    </div>
                    <ul class="space-y-2.5 text-xs text-slate-600">
                        <li>✓ Subdomain Dedicated</li>
                        <li>✓ Semua Section Unlimited</li>
                        <li>✓ Storage Media 2 GB</li>
                    </ul>
                </div>
                <a href="{{ url('/register') }}" class="mt-6 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 font-bold text-xs text-center transition">Pilih Basic</a>
            </div>

            <!-- Professional -->
            <div class="bg-white p-6 rounded-2xl border-2 border-indigo-600 flex flex-col justify-between shadow-lg relative">
                <div class="absolute -top-3 left-1/2 -translate-x-1/2 px-3 py-0.5 rounded-full bg-indigo-600 text-white text-[10px] font-bold">REKOMENDASI</div>
                <div>
                    <h3 class="text-base font-bold text-slate-900">Professional</h3>
                    <p class="text-xs text-slate-500 mt-1">Untuk PT & Perusahaan Resmi</p>
                    <div class="my-5">
                        <span class="text-3xl font-extrabold text-slate-900" x-text="yearly ? 'Rp 199rb' : 'Rp 249rb'"></span>
                        <span class="text-xs text-slate-500"> /bulan</span>
                    </div>
                    <ul class="space-y-2.5 text-xs text-slate-700">
                        <li class="font-bold text-indigo-600">✓ Domain Kustom (.com / .co.id)</li>
                        <li>✓ Semua Tema Unlocked</li>
                        <li>✓ Storage Media 10 GB</li>
                        <li>✓ Analytics Lanjutan</li>
                    </ul>
                </div>
                <a href="{{ url('/register') }}" class="mt-6 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white font-bold text-xs text-center shadow transition">Pilih Professional</a>
            </div>

            <!-- Enterprise -->
            <div class="bg-white p-6 rounded-2xl border border-slate-200 flex flex-col justify-between shadow-sm">
                <div>
                    <h3 class="text-base font-bold text-slate-900">Enterprise</h3>
                    <p class="text-xs text-slate-500 mt-1">Group Holdings</p>
                    <div class="my-5">
                        <span class="text-3xl font-extrabold text-slate-900" x-text="yearly ? 'Rp 499rb' : 'Rp 599rb'"></span>
                        <span class="text-xs text-slate-500"> /bulan</span>
                    </div>
                    <ul class="space-y-2.5 text-xs text-slate-600">
                        <li>✓ Multi Domain Kustom</li>
                        <li>✓ SLA Dedicated 99.99%</li>
                        <li>✓ Storage Unlimited</li>
                    </ul>
                </div>
                <a href="{{ url('/register') }}" class="mt-6 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 font-bold text-xs text-center transition">Pilih Enterprise</a>
            </div>
        </div>
    </div>
</section>

<!-- Simple CTA Banner -->
<section class="py-16 bg-indigo-600 text-white text-center">
    <div class="max-w-4xl mx-auto px-4 space-y-5">
        <h2 class="text-3xl font-extrabold">Mulai Buat Website Perusahaan Anda Hari Ini</h2>
        <p class="text-indigo-100 text-sm max-w-xl mx-auto">Daftar akun gratis sekarang dan nikmati kemudahan pembuatan profil bisnis yang sederhana & profesional.</p>
        <div class="pt-2 flex justify-center gap-4">
            <a href="{{ url('/register') }}" class="px-8 py-3.5 rounded-xl bg-white text-indigo-600 font-extrabold text-xs shadow-lg hover:bg-indigo-50 transition">
                Daftar Sekarang &rarr;
            </a>
            <a href="{{ url('/login') }}" class="px-6 py-3.5 rounded-xl bg-indigo-700 text-white font-bold text-xs hover:bg-indigo-800 transition">
                Masuk ke Akun
            </a>
        </div>
    </div>
</section>

@endsection
