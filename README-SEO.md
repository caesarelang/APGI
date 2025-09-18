# Website Profil Perusahaan dengan SEO Optimal

Website profil perusahaan yang telah dioptimasi dengan berbagai tools SEO untuk meningkatkan visibilitas di mesin pencari.

## Fitur SEO yang Sudah Diimplementasikan

### 📊 SEO Tools & Analytics
- ✅ **SEO Tools Laravel** (artesaos/seotools) - Meta tags, Open Graph, Twitter Cards, JSON-LD
- ✅ **Sitemap Generator** (spatie/laravel-sitemap) - Sitemap XML otomatis
- ✅ **Google Analytics** - Tracking pengunjung dan behavior
- ✅ **Google Tag Manager** - Manajemen tag terpusat
- ✅ **Google Search Console** - Monitoring performa di Google
- ✅ **Bing Webmaster Tools** - Monitoring performa di Bing
- ✅ **Facebook Pixel** - Tracking untuk iklan Facebook

### 🔍 Meta Tags & Structured Data
- ✅ **Meta Tags** - Title, Description, Keywords, Canonical
- ✅ **Open Graph** - Untuk sharing di social media
- ✅ **Twitter Cards** - Untuk sharing di Twitter
- ✅ **JSON-LD Structured Data** - Schema.org untuk Organization
- ✅ **Robots Meta** - Index/Follow directives
- ✅ **Language & Geo Tags** - Targeting pasar Indonesia

### 🚀 Performance & Technical SEO
- ✅ **Responsive Design** - Mobile-friendly dengan Bootstrap 5
- ✅ **Progressive Web App** - Manifest file dan service worker ready
- ✅ **Favicon & Icons** - Complete icon set untuk berbagai device
- ✅ **Robots.txt** - Panduan crawling untuk search engine
- ✅ **Sitemap.xml** - Peta situs untuk indexing
- ✅ **DNS Prefetch** - Optimasi loading external resources
- ✅ **Font Loading** - Optimized Google Fonts loading

### 🎨 User Experience
- ✅ **Cookie Consent** - GDPR compliance
- ✅ **Skip to Content** - Accessibility feature
- ✅ **Smooth Scrolling** - Enhanced user experience
- ✅ **Loading Optimization** - Lazy loading images

## Setup & Installation

### 1. Clone & Install Dependencies
```bash
git clone <repository-url>
cd APGI-New
composer install
npm install
```

### 2. Environment Configuration
```bash
cp .env.example .env
php artisan key:generate
```

### 3. Configure Company Information
Edit file `.env` dan isi informasi perusahaan:

```env
# Company Information
COMPANY_NAME="Nama Perusahaan Anda"
COMPANY_DESCRIPTION="Deskripsi perusahaan untuk SEO"
COMPANY_ADDRESS="Alamat lengkap perusahaan"
COMPANY_PHONE="+62 21 1234 5678"
COMPANY_EMAIL="info@perusahaan.com"

# Social Media
COMPANY_FACEBOOK="https://facebook.com/perusahaan"
COMPANY_TWITTER="https://twitter.com/perusahaan"
COMPANY_INSTAGRAM="https://instagram.com/perusahaan"

# Analytics & SEO
GOOGLE_ANALYTICS_ID="GA_MEASUREMENT_ID"
GOOGLE_TAG_MANAGER_ID="GTM-XXXXXXX"
GOOGLE_SEARCH_CONSOLE_VERIFICATION="verification_code"
```

### 4. Database Setup
```bash
php artisan migrate
```

### 5. Build Assets
```bash
npm run build
# atau untuk development
npm run dev
```

### 6. Start Development Server
```bash
php artisan serve
```

## SEO Configuration

### Google Analytics
1. Buat account di [Google Analytics](https://analytics.google.com)
2. Dapatkan Measurement ID (format: G-XXXXXXXXXX)
3. Tambahkan ke `.env` sebagai `GOOGLE_ANALYTICS_ID`

### Google Tag Manager
1. Buat account di [Google Tag Manager](https://tagmanager.google.com)
2. Dapatkan Container ID (format: GTM-XXXXXXX)
3. Tambahkan ke `.env` sebagai `GOOGLE_TAG_MANAGER_ID`

### Google Search Console
1. Verify website di [Google Search Console](https://search.google.com/search-console)
2. Dapatkan verification meta tag
3. Tambahkan ke `.env` sebagai `GOOGLE_SEARCH_CONSOLE_VERIFICATION`

### Bing Webmaster Tools
1. Verify website di [Bing Webmaster Tools](https://www.bing.com/webmasters)
2. Dapatkan verification meta tag
3. Tambahkan ke `.env` sebagai `BING_WEBMASTER_VERIFICATION`

## Images & Assets yang Diperlukan

Tambahkan file-file berikut ke folder `public/images/`:

### Logo & Branding
- `logo.png` - Logo perusahaan (200x200px)
- `logo.jpg` - Logo untuk structured data

### Open Graph & Social Media
- `og-image.jpg` - Default Open Graph image (1200x630px)
- `og-home.jpg` - Home page Open Graph image (1200x630px)
- `twitter-home.jpg` - Twitter card image (1200x600px)

### Website Content
- `hero-image.png` - Hero section image
- `about-preview.jpg` - About section preview image
- `testimonial-1.jpg` - Client testimonial photo
- `testimonial-2.jpg` - Client testimonial photo
- `testimonial-3.jpg` - Client testimonial photo

### Icons & Favicons
- `favicon-16x16.png` - Favicon 16x16
- `favicon-32x32.png` - Favicon 32x32
- `apple-touch-icon.png` - Apple touch icon 180x180
- `icon-72x72.png` through `icon-512x512.png` - PWA icons

## Halaman yang Tersedia

- `/` - Halaman utama (Beranda)
- `/tentang` - Tentang perusahaan
- `/layanan` - Layanan yang ditawarkan
- `/kontak` - Informasi kontak
- `/privacy-policy` - Kebijakan privasi
- `/terms-of-service` - Syarat dan ketentuan
- `/sitemap.xml` - Sitemap XML
- `/robots.txt` - Robots.txt

## Customization

### Mengubah Warna Brand
Edit file `resources/views/layouts/app.blade.php` dan ubah CSS custom di bagian `@push('head')`.

### Menambah Halaman Baru
1. Tambahkan route di `routes/web.php`
2. Tambahkan method di `HomeController.php`
3. Buat view file di `resources/views/`
4. Update sitemap di `resources/views/sitemap.blade.php`

### Mengubah Konten
Edit file view yang sesuai di folder `resources/views/`:
- `home.blade.php` - Halaman utama
- `layouts/app.blade.php` - Layout utama

## SEO Checklist

- ✅ Meta title dan description unik untuk setiap halaman
- ✅ URL structure yang SEO-friendly
- ✅ Heading tags (H1, H2, H3) terstruktur dengan baik
- ✅ Alt text untuk semua gambar
- ✅ Internal linking yang baik
- ✅ Sitemap XML yang up-to-date
- ✅ Robots.txt yang properly configured
- ✅ Schema markup untuk Organization
- ✅ Open Graph dan Twitter Cards
- ✅ Mobile-responsive design
- ✅ Fast loading times
- ✅ HTTPS ready
- ✅ Canonical URLs

## Monitoring & Analytics

Setelah website live, monitor performance melalui:
1. **Google Search Console** - Index status, search queries, clicks
2. **Google Analytics** - Traffic, user behavior, conversions
3. **Google PageSpeed Insights** - Performance metrics
4. **GTmetrix** - Detailed performance analysis

## Support

Untuk pertanyaan atau dukungan teknis, silakan hubungi tim development.

---

**Note**: Pastikan untuk mengganti semua placeholder content dengan informasi perusahaan yang sebenarnya sebelum go-live.