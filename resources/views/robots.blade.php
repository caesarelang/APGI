User-agent: *
Allow: /

# Disallow admin and private areas
Disallow: /admin/
Disallow: /dashboard/
Disallow: /auth/
Disallow: /profile

# Allow important pages for APGI
Allow: /
Allow: /#about
Allow: /#member
Allow: /#struktur
Allow: /#galeri
Allow: /#contact
Allow: /privacy-policy
Allow: /terms-of-service

# Sitemap location
Sitemap: {{ url('/sitemap.xml') }}