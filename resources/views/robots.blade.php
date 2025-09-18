User-agent: *
Allow: /

# Disallow admin and private areas
Disallow: /admin/
Disallow: /dashboard/
Disallow: /login
Disallow: /register

# Allow important pages
Allow: /
Allow: /tentang
Allow: /layanan
Allow: /kontak

# Sitemap location
Sitemap: {{ url('/sitemap.xml') }}