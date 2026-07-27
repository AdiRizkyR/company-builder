@extends('layouts.customer')

@section('title', 'Visual Section Builder - Customer Portal')
@section('page_title', 'Visual Section Builder System')

@section('content')

<div x-data="{
    device: 'desktop',
    activeTab: 'reorder',
    selectedSection: 'hero',
    sections: [
        { id: 'hero', name: 'Hero Banner Utama', active: true, tag: 'Utama', icon: '🚀', title: 'Organizing the world’s information in Indonesia', subtitle: 'Menghubungkan jutaan masyarakat Indonesia dengan solusi teknologi terbaik dunia.' },
        { id: 'stats', name: 'Angka & Statistik Kunci', active: true, tag: 'Metrics', icon: '📊', title: 'Ringkasan Pencapaian Utama', subtitle: '15+ Tahun Pengalaman, 500+ Proyek, 99.8% Kepuasan Klien' },
        { id: 'about', name: 'Tentang Perusahaan & Visi', active: true, tag: 'Profil', icon: '🏢', title: 'Tentang Google Indonesia', subtitle: 'Sejarah, Visi Misi, dan nilai-nilai inti korporasi kami.' },
        { id: 'services', name: 'Layanan Unggulan', active: true, tag: 'Solusi', icon: '⚙️', title: 'Solusi Teknologi Enterprise', subtitle: 'Layanan konsultasi, pengolahan data, dan infrastruktur cloud.' },
        { id: 'products', name: 'Katalog Produk Resmi', active: true, tag: 'Katalog', icon: '📦', title: 'Produk & Inovasi Perusahaan', subtitle: 'Lini produk unggulan berkinerja tinggi.' },
        { id: 'team', name: 'Tim Manajerial & Eksekutif', active: true, tag: 'Organisasi', icon: '👥', title: 'Struktur Kepemimpinan', subtitle: 'Para pemimpin berpengalaman dibalik arah eksekusi.' },
        { id: 'contact', name: 'Form Kontak & Peta Lokasi', active: true, tag: 'Kontak', icon: '📍', title: 'Hubungi Tim Kami', subtitle: 'Form komunikasi langsung dan alamat kantor pusat.' }
    ],
    moveUp(index) {
        if (index > 0) {
            const item = this.sections.splice(index, 1)[0];
            this.sections.splice(index - 1, 0, item);
        }
    },
    moveDown(index) {
        if (index < this.sections.length - 1) {
            const item = this.sections.splice(index, 1)[0];
            this.sections.splice(index + 1, 0, item);
        }
    }
}" class="h-[calc(100vh-120px)] flex flex-col">

    <!-- Top Builder Bar (Light Clean Design) -->
    <div class="bg-white border border-slate-200 p-4 rounded-2xl mb-4 flex flex-col md:flex-row items-center justify-between gap-4 shrink-0 shadow-sm">
        <div class="flex items-center gap-3">
            <span class="w-3 h-3 rounded-full bg-emerald-500 animate-pulse"></span>
            <div>
                <h2 class="text-sm font-bold text-slate-900">Visual Section Composer</h2>
                <p class="text-[11px] text-slate-500">Tenant: <strong class="text-indigo-600">Google Indonesia</strong></p>
            </div>
        </div>

        <!-- Responsive Device Switcher Buttons -->
        <div class="flex items-center gap-1 bg-slate-100 p-1 rounded-xl border border-slate-200">
            <button @click="device = 'desktop'" :class="device === 'desktop' ? 'bg-white text-indigo-700 font-bold shadow-sm' : 'text-slate-600 hover:text-slate-900'" class="px-3 py-1.5 rounded-lg text-xs flex items-center gap-1.5 transition">
                <span>Desktop</span>
            </button>
            <button @click="device = 'tablet'" :class="device === 'tablet' ? 'bg-white text-indigo-700 font-bold shadow-sm' : 'text-slate-600 hover:text-slate-900'" class="px-3 py-1.5 rounded-lg text-xs flex items-center gap-1.5 transition">
                <span>Tablet</span>
            </button>
            <button @click="device = 'mobile'" :class="device === 'mobile' ? 'bg-white text-indigo-700 font-bold shadow-sm' : 'text-slate-600 hover:text-slate-900'" class="px-3 py-1.5 rounded-lg text-xs flex items-center gap-1.5 transition">
                <span>Mobile</span>
            </button>
        </div>

        <!-- Action Buttons -->
        <div class="flex items-center gap-3">
            <a href="{{ url('/google-indonesia') }}" target="_blank" class="px-3.5 py-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold transition">
                Lihat Hasil Live
            </a>
            <button type="button" class="px-5 py-2 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-bold shadow-md transition">
                Simpan Perubahan Section
            </button>
        </div>
    </div>

    <!-- Main Workspace Split-Screen (Light Mode) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 flex-grow min-h-0">
        
        <!-- Left Sidebar: Section List & Re-order Controls -->
        <div class="lg:col-span-5 bg-white p-4 rounded-2xl border border-slate-200 shadow-sm flex flex-col justify-between overflow-hidden">
            <div class="flex items-center justify-between pb-3 border-b border-slate-200 mb-3">
                <div class="flex items-center gap-2">
                    <button @click="activeTab = 'reorder'" :class="activeTab === 'reorder' ? 'text-indigo-600 font-extrabold border-b-2 border-indigo-600' : 'text-slate-500'" class="pb-1 text-xs">
                        Urutan Section
                    </button>
                    <button @click="activeTab = 'editor'" :class="activeTab === 'editor' ? 'text-indigo-600 font-extrabold border-b-2 border-indigo-600' : 'text-slate-500'" class="pb-1 text-xs ml-4">
                        Edit Konten Section
                    </button>
                </div>
                <span class="text-[10px] text-slate-500 font-mono" x-text="sections.filter(s => s.active).length + ' / ' + sections.length + ' Tampil'"></span>
            </div>

            <!-- Tab 1: Re-order & Toggle List -->
            <div x-show="activeTab === 'reorder'" class="space-y-2 overflow-y-auto custom-scrollbar flex-grow pr-1">
                <template x-for="(sec, idx) in sections" :key="sec.id">
                    <div class="p-3 rounded-xl bg-slate-50 border border-slate-200 hover:border-indigo-300 transition flex items-center justify-between group">
                        <div class="flex items-center gap-3">
                            <span class="text-sm" x-text="sec.icon"></span>
                            <div>
                                <div class="flex items-center gap-2">
                                    <span class="text-xs font-bold" :class="sec.active ? 'text-slate-900' : 'text-slate-400 line-through'" x-text="sec.name"></span>
                                </div>
                                <span class="text-[10px] text-slate-500 truncate block max-w-[180px]" x-text="sec.subtitle"></span>
                            </div>
                        </div>

                        <div class="flex items-center gap-2">
                            <button @click="sec.active = !sec.active" 
                                    :class="sec.active ? 'bg-emerald-600 text-white' : 'bg-slate-200 text-slate-600'" 
                                    class="px-2.5 py-0.5 rounded text-[10px] font-bold transition">
                                <span x-text="sec.active ? 'Tampil' : 'Sembunyi'"></span>
                            </button>

                            <div class="flex items-center gap-1 bg-white rounded p-0.5 border border-slate-200">
                                <button @click="moveUp(idx)" :disabled="idx === 0" class="text-slate-600 hover:text-indigo-600 disabled:opacity-30 px-1 text-xs">▲</button>
                                <button @click="moveDown(idx)" :disabled="idx === sections.length - 1" class="text-slate-600 hover:text-indigo-600 disabled:opacity-30 px-1 text-xs">▼</button>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Tab 2: Quick Section Editor -->
            <div x-show="activeTab === 'editor'" class="space-y-4 overflow-y-auto custom-scrollbar flex-grow pr-1">
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Pilih Section</label>
                    <select x-model="selectedSection" class="w-full px-3 py-2 rounded-xl bg-slate-50 border border-slate-300 text-xs text-slate-900 font-bold">
                        <template x-for="sec in sections" :key="sec.id">
                            <option :value="sec.id" x-text="sec.name"></option>
                        </template>
                    </select>
                </div>

                <template x-for="sec in sections.filter(s => s.id === selectedSection)" :key="sec.id">
                    <div class="space-y-3 p-4 rounded-xl bg-slate-50 border border-slate-200">
                        <h4 class="text-xs font-bold text-indigo-600 uppercase">Input Editor</h4>
                        <div>
                            <label class="block text-[11px] font-bold text-slate-700 mb-1">Judul Utama</label>
                            <input type="text" x-model="sec.title" class="w-full px-3 py-2 rounded-lg bg-white border border-slate-300 text-xs text-slate-900">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold text-slate-700 mb-1">Sub-judul / Deskripsi</label>
                            <textarea rows="3" x-model="sec.subtitle" class="w-full px-3 py-2 rounded-lg bg-white border border-slate-300 text-xs text-slate-900"></textarea>
                        </div>
                    </div>
                </template>
            </div>
        </div>

        <!-- Right Canvas: Live Responsive Device Preview -->
        <div class="lg:col-span-7 bg-slate-100 rounded-2xl border border-slate-200 p-4 flex flex-col items-center justify-center relative overflow-hidden">
            <div class="text-xs text-slate-600 font-mono mb-2">
                Ukuran Layar: <strong class="text-indigo-600 uppercase" x-text="device"></strong>
            </div>

            <div class="transition-all duration-300 bg-white rounded-xl border border-slate-300 shadow-xl overflow-y-auto custom-scrollbar h-[500px] w-full"
                 :class="{
                    'max-w-full': device === 'desktop',
                    'max-w-[768px]': device === 'tablet',
                    'max-w-[375px]': device === 'mobile'
                 }">

                <div class="p-6 space-y-6">
                    <template x-for="sec in sections" :key="sec.id">
                        <div x-show="sec.active" class="p-5 rounded-xl bg-slate-50 border border-slate-200 relative group">
                            <span class="absolute top-3 right-3 px-2 py-0.5 rounded text-[9px] font-bold bg-indigo-100 text-indigo-700 border border-indigo-200" x-text="sec.name"></span>
                            
                            <span class="text-xs font-bold text-sky-600 uppercase block mb-1" x-text="sec.tag"></span>
                            <h3 class="text-lg font-bold text-slate-900" x-text="sec.title"></h3>
                            <p class="text-xs text-slate-600 mt-1 leading-relaxed" x-text="sec.subtitle"></p>
                        </div>
                    </template>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection
