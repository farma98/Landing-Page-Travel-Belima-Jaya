# HIPPAM Smart Water - Landing Page

Landing page modern untuk promosi Platform Website HIPPAM (Pembayaran Air Warga).

## 📋 Deskripsi

Website ini adalah landing page untuk mempromosikan **HIPPAM Smart Water**, platform digital untuk pengelolaan air warga berbasis tagihan bulanan. Landing page ini dirancang untuk menarik pengurus HIPPAM, Kepala Desa, Perangkat Desa, dan BUMDes agar menggunakan sistem ini.

## ✨ Fitur Landing Page

- **Konsep AIDA** (Attention, Interest, Desire, Action)
- **Desain Modern** dengan nuansa biru/teal (tema air & teknologi)
- **Responsif** (Mobile-first design)
- **Sticky Navbar** dengan smooth scroll
- **Hero Section** dengan CTA kuat
- **Problem → Solution Section**
- **Fitur Unggulan** (12 fitur dalam icon grid)
- **Cara Kerja** (3 langkah sederhana)
- **Demo Preview** (mockup dashboard)
- **Paket Harga** (3 paket: Basic, Pro, Enterprise)
- **Testimoni** pelanggan realistis
- **FAQ Accordion** (11 pertanyaan)
- **Floating WhatsApp Button**
- **Call-to-Action** (CTA) di berbagai section

## 🎯 Target Aksi (CTA)

Semua tombol CTA mengarah ke WhatsApp: **0822-4000-1143** (6285731147138) dengan pesan otomatis:

> "Saya tertarik untuk memesan aplikasi HIPPAM Smart Water. Mohon info demo dan harganya ya."

## 🚀 Cara Menggunakan

### 🔥 1. Dengan XAMPP (DIREKOMENDASIKAN - Struktur Modular)

Karena menggunakan PHP includes, akses via XAMPP:

```
http://localhost/tubanweb/hippam/hippam-landing/
```

**Pastikan Apache di XAMPP sudah running!**

Kelebihan struktur modular:

- ✅ Setiap section terpisah di folder `sections/`
- ✅ Mudah edit tanpa scroll panjang
- ✅ Lebih maintainable untuk project jangka panjang

### 2. Langsung Buka index.html (Alternatif - Monolithic)

Jika tidak ingin pakai XAMPP, buka file `index.html` yang monolitik:

```bash
# Double click index.html atau jalankan:
start index.html   # Windows
open index.html    # Mac
xdg-open index.html # Linux
```

⚠️ **Catatan**: File `index.html` adalah backup dengan semua section dalam 1 file.

### 3. Menggunakan Server Lokal Lain (Opsional)

**Dengan Python:**

```bash
# Python 3
python -m http.server 8000

# Buka browser: http://localhost:8000
```

**Dengan PHP Built-in Server:**

```bash
php -S localhost:8000

# Buka browser: http://localhost:8000
```

**Dengan Live Server (VS Code):**

- Install extension "Live Server"
- Klik kanan pada `index.php` atau `index.html`
- Pilih "Open with Live Server"

## 📁 Struktur Project

```
hippam-landing/
├── index.php           # File PHP utama dengan includes
├── index.html          # File HTML monolitik (backup/alternatif)
├── sections/           # Folder berisi section-section modular
│   ├── header.php          # Navbar
│   ├── hero.php            # Hero section
│   ├── trustbar.php        # Trust bar
│   ├── problem-solution.php # Problem-solution comparison
│   ├── features.php        # Fitur unggulan
│   ├── cara-kerja.php      # Cara kerja 3 langkah
│   ├── demo.php            # Demo preview
│   ├── pricing.php         # Paket harga
│   ├── testimonials.php    # Testimoni
│   ├── faq.php             # FAQ accordion
│   ├── cta.php             # CTA penutup
│   ├── footer.php          # Footer
│   └── floating-wa.php     # Floating WhatsApp button
├── assets/
│   ├── img/            # Folder untuk gambar (opsional)
│   └── js/
│       └── script.js   # JavaScript untuk FAQ accordion
└── README.md           # Dokumentasi ini
```

## 🛠️ Teknologi yang Digunakan

- **HTML5** - Struktur halaman
- **PHP** - Includes untuk struktur modular (opsional)
- **Tailwind CSS** (via CDN) - Styling modern
- **JavaScript Vanilla** - FAQ accordion functionality
- **Google Fonts** (Inter) - Typography modern

## 🎨 Customization

### Mengubah Nomor WhatsApp

**📂 Struktur Modular (index.php) - DIREKOMENDASIKAN:**

Edit di beberapa file section:

- `sections/header.php` - Tombol navbar
- `sections/hero.php` - 2 Tombol CTA hero
- `sections/pricing.php` - 3 Tombol paket harga
- `sections/cta.php` - 2 Tombol CTA penutup
- `sections/footer.php` - Link footer
- `sections/floating-wa.php` - Floating button

Cari dan ganti di setiap file:

```
https://wa.me/6285731147138
```

Ganti dengan nomor Anda (format: 62XXXXXXXXXXX tanpa tanda +)

**📄 File Monolitik (index.html):**

Cari dan ganti semua link WhatsApp di 1 file saja (ctrl+F "wa.me").

### Mengubah Warna Tema

Edit bagian `<style>` di `index.php` atau `index.html`:

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
- **12 Fitur**: Edit `sections/features.php`
- **Cara Kerja 3 Langkah**: Edit `sections/cara-kerja.php`
- **Demo Preview**: Edit `sections/demo.php`
- **3 Paket Harga**: Edit `sections/pricing.php`
- **3 Testimoni**: Edit `sections/testimonials.php`
- **11 FAQ**: Edit `sections/faq.php`
- **CTA Penutup**: Edit `sections/cta.php`
- **Footer**: Edit `sections/footer.php`

**Kelebihan**: Tidak perlu scroll panjang, langsung edit section yang diinginkan.

**📄 File Monolitik:**

Edit langsung di `index.html` (scroll panjang, cari section dengan `id="fitur"`, `id="harga"`, dll.)

## 📱 Deployment

### Deploy ke Hosting Berbayar/Gratis

1. **Netlify** (Gratis):
    - Drag & drop folder `hippam-landing` ke netlify.com
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
c:\xampp\htdocs\tubanweb\hippam\hippam-landing\
```

Akses via browser:

```
http://localhost/tubanweb/hippam/hippam-landing/
```

## ✅ Checklist Sebelum Deploy

- [ ] Pastikan nomor WhatsApp sudah benar (6285731147138)
- [ ] Test semua tombol CTA WhatsApp
- [ ] Test FAQ accordion
- [ ] Test responsive di mobile & desktop
- [ ] Ganti email, alamat, dan sosial media di footer (jika perlu)
- [ ] Test di berbagai browser (Chrome, Firefox, Safari)

## 📞 Kontak

Jika ada pertanyaan atau butuh bantuan:

- **WhatsApp**: 0822-4000-1143
- **Email**: tubanweb1@gmail.com

## 📄 Lisensi

© 2026 HIPPAM Smart Water. All rights reserved.

---

**Catatan**: Landing page ini siap pakai dan sudah responsive. Tidak perlu instalasi dependencies karena menggunakan Tailwind CSS via CDN. Cocok untuk hosting gratis atau berbayar.
