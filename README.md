# Company Builder - Enterprise Multi-Tenant SaaS Website Builder

**Company Builder** adalah platform SaaS (*Software as a Service*) berskala enterprise yang memungkinkan ribuan bisnis, perusahaan, UMKM, dan profesional untuk membangun, mengelola, dan mempublikasikan website *Company Profile*, *Product Catalog*, *Landing Page*, hingga *Custom Website* secara serba otomatis tanpa memerlukan pengadaan hosting, pengelolaan server, atau proses deployment manual.

---

## 🎯 Visi & Filosofi Produk

Platform ini membebaskan pengguna (Tenant) dari kompleksitas teknis pengembangan web. Pengguna cukup:
1. **Registrasi & Memilih Paket Berlangganan** (*Free, Basic, Professional, Enterprise*)
2. **Membuat Website & Memilih Template** (*Cafe, Sekolah, Rumah Sakit, Startup, Kontraktor, NGO, dll*)
3. **Mengatur Data Perusahaan Global & Memilih Komponen** (*Hero, About, Service, Product, Pricing, Contact, dll*)
4. **Mempublikasikan Website** — langsung online dan siap diakses secara global!

 Seluruh website tenant berjalan dalam **SATU aplikasi Laravel 12 yang sama** menggunakan arsitektur **Single-Instance Multi-Tenancy**. Tidak ada pembuat instalasi Laravel baru untuk setiap user.

---

## 🏗️ 20 Tahapan Perancangan Arsitektur Enterprise

Sesuai metodologi *Senior Software Architect*, proyek ini dikembangkan melalui 20 fase perancangan sistem secara ketat sebelum melangkah ke tahap coding:

- [x] **Tahap 1: Product Requirement Document (PRD)**
- [ ] **Tahap 2: Business Flow**
- [ ] **Tahap 3: User Flow**
- [ ] **Tahap 4: Sitemap & Information Architecture**
- [ ] **Tahap 5: System Architecture & Tech Stack Details**
- [ ] **Tahap 6: Multi-Tenant Architecture & Domain Resolution Strategy**
- [ ] **Tahap 7: Database Design & Normalization Schema**
- [ ] **Tahap 8: Entity Relationship Diagram (ERD)**
- [ ] **Tahap 9: Module & Component Breakdown**
- [ ] **Tahap 10: Folder Structure Laravel 12 & Clean Architecture**
- [ ] **Tahap 11: Permission & RBAC Matrix**
- [ ] **Tahap 12: UI/UX Wireframe & Design System Blueprint**
- [ ] **Tahap 13: RESTful & Internal API Design**
- [ ] **Tahap 14: Queue & Asynchronous Job Architecture**
- [ ] **Tahap 15: Storage Architecture & Media Quota Management**
- [ ] **Tahap 16: Deployment & Infrastructure Architecture (CI/CD, CDN, SSL)**
- [ ] **Tahap 17: Security Architecture, Compliance & Penetration Guidelines**
- [ ] **Tahap 18: Product Development Roadmap**
- [ ] **Tahap 19: Sprint Planning & Task Execution Matrix**
- [ ] **Tahap 20: Implementation & Coding Phase**

---

# 📄 TAHAP 1: PRODUCT REQUIREMENT DOCUMENT (PRD)

### 1. Informasi Dokumen
- **Nama Produk**: Company Builder Enterprise SaaS
- **Platform Stack**: Laravel 12, PHP 8.4, MySQL, Redis, Livewire, Volt, Tailwind CSS, Alpine.js
- **Versi PRD**: 1.0.0
- **Status**: APPROVED / ARCHITECTURE INITIALIZATION

---

### 2. User Roles & Access Hierarchy

#### 👥 2.1 Super Admin (Platform Owner)
Memiliki kontrol mutlak atas seluruh platform dan ekosistem tenant:
- **Tenant & User Management**: Monitoring seluruh tenant website, suspensi, upgrade/downgrade paket.
- **Master Assets & System Templates**: Pengawasan perpustakaan komponen global, sistem tema, dan template publik.
- **Subscription & Financials**: Integrasi Payment Gateway, invoicing, refund, laporan pendapatan (MRR, ARR, Churn Rate).
- **Domain & Infrastructure Routing**: Monitoring SSL otomatis, manajemen custom domain, DNS verification.
- **System Health & Observability**: Real-time server monitoring, Redis queue status, log audit keamanan, backup & restore database.

#### 🛠️ 2.2 Admin (Content & Template Creator)
Membuat dan memasok aset visual & struktur yang siap pakai oleh Tenant User:
- **Component Builder**: Membuat dan menyusun berbagai variasi komponen (misal: Hero 01–100, About 01–50, Pricing 01–30).
- **Template Design**: Menyusun koleksi halaman menjadi template industri (Sekolah, Rumah Sakit, Cafe, Startup, dll).
- **Theme & Styling Presets**: Menyusun palet warna, tipografi, radius border, shadow, dan efek animasi.
- **Asset & Icon Management**: Mengunggah pustaka ikon, gambar stok bebas lisensi, dan sampel aset.

#### 🏬 2.3 User (Tenant / Business Owner)
Mengelola 1 atau banyak website usaha miliknya sendiri secara terisolasi:
- **Site Management**: Membuat, mengedit, dan mengkonfigurasi identitas website.
- **Page & Content Builder**: Menambah/menghapus halaman, mengatur urutan komponen, mengubah tata letak.
- **Global Company Data**: Memasukkan data terpusat (No. WhatsApp, Email, Alamat, Sosmed) yang terikat langsung ke komponen.
- **Universal Content Manager**: Mengelola Artikel Blog, Katalog Produk/Jasa, Portofolio, Galeri, dan Download Center.
- **Domain & SEO**: Menghubungkan Subdomain atau Custom Domain (`namausaha.com`), meta tag SEO, Sitemap XML.
- **Analytics & Subscriptions**: Melihat grafik pengunjung, klik kontak/WhatsApp, serta mengelola paket langganan.

#### 🌐 2.4 End-User / Public Visitor
Pengunjung publik yang membuka website buatan tenant:
- Akses super cepat (< 100ms response time via cache) pada subdomain, custom domain, atau path slug.
- Interaksi dinamis: Pencarian katalog, filter artikel, formulir kontak, tombol WhatsApp langsung, dan unduh dokumen.

---

### 3. Modul & Spesifikasi Fitur Utama

#### 🚀 3.1 Multi-Tenant Engine
- **Tenant Identification**: Resolusi request dinamis berbasis middleware:
  - Subdomain: `namausaha.company-builder.com`
  - Custom Domain: `namausaha.com` atau `www.namausaha.com` (Paket Premium)
  - Path Slug: `company-builder.com/namausaha`
- **Data Isolation**: Isolasi data berbasis `tenant_id` / `website_id` di setiap query dengan scope otomatis Laravel Eloquent.

#### 🧩 3.2 Component-Driven Page Builder
- **Flexible Section Assembly**: Setiap halaman disusun dari blok komponen modular (Hero, About, Service, Feature, Portfolio, Team, Pricing, FAQ, Map, Video, Contact, CTA, Footer).
- **Component Variants**: Setiap tipe komponen memiliki puluhan variasi desain (Hero 01 hingga Hero 100).
- **Live Preview & Drag-and-Drop**: Pengeditan komponen secara real-time menggunakan Livewire & Alpine.js.

#### 🎨 3.3 Dynamic Theme & Design System Engine
- Pengaturan token desain global:
  - **Color Palette**: Primary, Secondary, Accent, Neutral, Dark Mode Backgrounds.
  - **Typography**: Google Fonts / Bunny Fonts (sans, serif, mono) dengan *type scale* terstandarisasi.
  - **Ui Attributes**: Border Radius, Box Shadow, Button Variant Styles, Spacing Scale, Animations.

#### 📦 3.4 Universal Content Type Engine
- Pengelolaan konten terpadu (*Unified Content Model*) untuk seluruh tipe konten:
  - **Blog / News**: Kategori, Tag, Author, Draft/Publish, Scheduled Post, SEO metadata.
  - **Universal Catalog**: Produk, Jasa, Menu Restoran, Properti, Kendaraan, Peralatan.
  - **Portfolio & Gallery**: Showcase proyek, kategori industri, gambar/video pop-up lightbox.
  - **Download Center**: Pusat berkas unduhan publik (PDF, Word, Excel, PowerPoint, ZIP).

#### 🏢 3.5 Global Company Data Binding Engine
- Terintegrasi secara *reactive* ke seluruh komponen website:
  - Identitas Perusahaan, Logo Light/Dark, Favicon.
  - Email Resmi, Nomor Telepon, WhatsApp Direct.
  - Alamat Fisik & Google Maps Embed Code.
  - Media Sosial (Instagram, Facebook, LinkedIn, YouTube, TikTok).
  - Jam Operasional Usaha.
- *Jika pengguna mengubah nomor WhatsApp di pengaturan global, seluruh tombol WhatsApp di seluruh halaman otomatis terupdate seketika.*

#### 💳 3.6 Subscription & Billing Engine
- **Paket Tiering**: Free, Basic, Professional, Enterprise.
- **Feature Gating**: Pembatasan jumlah halaman, custom domain, kuota storage, dan akses template berdasarkan paket.
- **Automated Lifecycle**: Pengingat perpanjangan, penguncian website otomatis jika kedaluwarsa, dan upgrade instan.

#### 🔍 3.7 SEO & Schema.org Engine
- Generasi meta tag otomatis: Meta Title, Description, Keywords, Canonical URL, Open Graph, Twitter Cards, Robots.txt.
- **Structured Data (JSON-LD)**: Schema.org otomatis untuk `Organization`, `LocalBusiness`, `Product`, `Article`, dan `FAQPage`.
- **Dynamic XML Sitemap**: Auto-generated untuk seluruh halaman dan konten aktif tenant.

---

### 4. Non-Functional Requirements (NFR)

1. **Performance**:
   - Time to First Byte (TTFB) halaman publik tenant < 100ms dengan Redis Caching.
   - Skor Google PageSpeed Insights > 90 (Desktop & Mobile).
2. **Scalability**:
   - Sanggup menangani > 10.000 tenant aktif dan jutaan *request pageview* harian.
3. **Security**:
   - Proteksi XSS, CSRF, SQL Injection, dan Strict Tenant Data Leaking Safeguards.
   - Isolation Tenant Audit Logs & Rate Limiting khusus per IP/Tenant.
4. **Availability**:
   - Uptime Target: 99.9% dengan arsitektur failover Redis & DB Read Replica ready.

---

### 🟢 Status Tahap Perancangan
- Tahap 1 (PRD) telah **RESMI DITETAPKAN**.
- Langkah selanjutnya: Menyiapkan dokumen arsitektur komprehensif untuk **Tahap 2 (Business Flow)** hingga **Tahap 19 (Sprint Planning)** secara runtut.
