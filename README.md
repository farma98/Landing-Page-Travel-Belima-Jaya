# Sewa Hiace Tuban - Belima Jaya Travel | Landing Page

Landing page modern untuk promosi jasa sewa Hiace di Tuban bersama Belima Jaya Travel.

## 📋 Deskripsi

Website ini adalah landing page untuk mempromosikan **Belima Jaya Travel**, jasa sewa Hiace Tuban terpercaya. Landing page ini dirancang untuk menarik calon pelanggan yang ingin menyewa Hiace dengan armada terawat, sopir berpengalaman, dan harga terjangkau.

## ✨ Fitur Landing Page

- **Konsep AIDA** (Attention, Interest, Desire, Action)
- **Desain Modern** dengan nuansa biru/teal (tema travel & kepercayaan)
- **Responsif** (Mobile-first design)
- **Sticky Navbar** dengan smooth scroll
- **Hero Section** dengan CTA kuat
- **Problem → Solution Section**
- **Fitur Unggulan** (keunggulan sewa Hiace Tuban)
- **Cara Kerja** (3 langkah sederhana pesan Hiace)
- **Demo Preview** (tampilan armada)
- **Paket Harga** (tarif sewa Hiace berbagai rute)
- **Testimoni** pelanggan realistis
- **FAQ Accordion** (pertanyaan umum sewa Hiace)
- **Floating WhatsApp Button**
- **Call-to-Action** (CTA) di berbagai section

## 🎯 Target Aksi (CTA)

Semua tombol CTA mengarah ke WhatsApp: **0822-4000-1143** dengan pesan otomatis:

> "Halo Belima Jaya Travel, saya tertarik sewa Hiace Tuban. Mohon info harga dan ketersediaan unitnya ya."

## 🚀 Cara Menggunakan

### 🔥 1. Dengan XAMPP (DIREKOMENDASIKAN - Struktur Modular)

Karena menggunakan PHP includes, akses via XAMPP:

```
http://localhost/tubanweb/lp-travel-bj/
```

**Pastikan Apache di XAMPP sudah running!**

Kelebihan struktur modular:

- ✅ Setiap section terpisah di folder `sections/`
- ✅ Mudah edit tanpa scroll panjang
- ✅ Lebih maintainable untuk project jangka panjang

### 2. Menggunakan Server Lokal Lain (Opsional)

**Dengan PHP Built-in Server:**

```bash
php -S localhost:8000

# Buka browser: http://localhost:8000
```

**Dengan Live Server (VS Code):**

- Install extension "Live Server"
- Klik kanan pada `index.php`
- Pilih "Open with Live Server"

## 📁 Struktur Project

```
lp-travel-bj/
├── index.php           # File PHP utama dengan includes
├── promo.php           # Halaman promo khusus (untuk share WA)
├── sections/           # Folder berisi section-section modular
│   ├── header.php          # Navbar
│   ├── hero.php            # Hero section
│   ├── trustbar.php        # Trust bar
│   ├── problem-solution.php # Problem-solution comparison
│   ├── features.php        # Fitur unggulan
│   ├── cara-kerja.php      # Cara kerja 3 langkah
│   ├── demo.php            # Demo preview armada
│   ├── pricing.php         # Paket tarif sewa
│   ├── testimonials.php    # Testimoni pelanggan
│   ├── faq.php             # FAQ accordion
│   ├── bep.php             # Prospektus bisnis / BEP
│   ├── cta.php             # CTA penutup
│   ├── footer.php          # Footer
│   └── floating-wa.php     # Floating WhatsApp button
├── assets/
│   ├── img/            # Folder untuk gambar armada & promo
│   ├── css/            # Tailwind CSS output
│   └── js/
│       ├── script.js       # JavaScript utama
│       └── lazy-load.js    # Lazy loading gambar
├── sitemap.xml         # Sitemap untuk SEO
├── robots.txt          # Panduan crawler mesin pencari
└── README.md           # Dokumentasi ini
```

## 🛠️ Teknologi yang Digunakan

- **HTML5** - Struktur halaman
- **PHP** - Includes untuk struktur modular
- **Tailwind CSS** (via build) - Styling modern
- **JavaScript Vanilla** - FAQ accordion & interaktivitas
- **Google Fonts** (Inter) - Typography modern

## 🎨 Customization

### Mengubah Nomor WhatsApp

**📂 Struktur Modular (index.php) - DIREKOMENDASIKAN:**

Edit di beberapa file section:

- `sections/header.php` - Tombol navbar
- `sections/hero.php` - 2 Tombol CTA hero
- `sections/pricing.php` - Tombol paket tarif
- `sections/cta.php` - 2 Tombol CTA penutup
- `sections/footer.php` - Link footer
- `sections/floating-wa.php` - Floating button

Cari dan ganti di setiap file:

```
https://wa.me/6282240001143
```

Ganti dengan nomor Anda (format: 62XXXXXXXXXXX tanpa tanda +)

### Mengubah Warna Tema

Edit bagian `<style>` di `index.php`:

```css
.gradient-bg {
    background: linear-gradient(135deg, #2563eb 0%, #0891b2 100%);
}
```

Ganti kode warna sesuai keinginan Anda.

### Mengubah Konten

**📂 Struktur Modular (DIREKOMENDASIKAN):**

Edit file section yang sesuai di folder `sections/`:

- **Navbar Menu**: Edit `sections/header.php`
- **Headline Hero**: Edit `sections/hero.php`
- **Trust Bar Angka**: Edit `sections/trustbar.php`
- **Problem & Solution**: Edit `sections/problem-solution.php`
- **Fitur Keunggulan**: Edit `sections/features.php`
- **Cara Kerja 3 Langkah**: Edit `sections/cara-kerja.php`
- **Tampilan Armada**: Edit `sections/demo.php`
- **Paket Tarif Sewa**: Edit `sections/pricing.php`
- **Testimoni**: Edit `sections/testimonials.php`
- **FAQ**: Edit `sections/faq.php`
- **Prospektus BEP**: Edit `sections/bep.php`
- **CTA Penutup**: Edit `sections/cta.php`
- **Footer**: Edit `sections/footer.php`

**Kelebihan**: Tidak perlu scroll panjang, langsung edit section yang diinginkan.

## 📱 Deployment

### Deploy ke Hosting Berbayar/Gratis

1. **Netlify** (Gratis):
    - Drag & drop folder `lp-travel-bj` ke netlify.com
    - Atau gunakan Netlify CLI

2. **Vercel** (Gratis):

    ```bash
    npm i -g vercel
    vercel
    ```

3. **GitHub Pages** (Gratis):
    - Push folder ke GitHub Repository
    - Settings → Pages → Source: main branch

4. **Hosting Shared (cPanel)**:
    - Upload semua file via FTP/File Manager
    - Akses via domain Anda

### Deploy ke XAMPP Lokal

Jika sudah menggunakan XAMPP (seperti lokasi project ini):

```
c:\xampp\htdocs\tubanweb\lp-travel-bj\
```

Akses via browser:

```
http://localhost/tubanweb/lp-travel-bj/
```

## ✅ Checklist Sebelum Deploy

- [ ] Pastikan nomor WhatsApp sudah benar (6282240001143)
- [ ] Test semua tombol CTA WhatsApp
- [ ] Test FAQ accordion
- [ ] Test responsive di mobile & desktop
- [ ] Ganti email, alamat, dan sosial media di footer (jika perlu)
- [ ] Test di berbagai browser (Chrome, Firefox, Safari)
- [ ] Pastikan gambar armada sudah diupload di `assets/img/`

## 📞 Kontak

Jika ada pertanyaan atau butuh bantuan:

- **WhatsApp**: 0822-4000-1143
- **Email**: tubanictcode@gmail.com

## 📄 Lisensi

© 2026 Belima Jaya Travel - Sewa Hiace Tuban. All rights reserved.

---

**Catatan**: Landing page ini siap pakai dan sudah responsive. Dibangun dengan Tailwind CSS untuk tampilan modern dan premium. Cocok untuk hosting gratis atau berbayar.
