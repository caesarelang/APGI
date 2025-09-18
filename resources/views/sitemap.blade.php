<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ now()->toISOString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ url('/#about') }}</loc>
        <lastmod>{{ now()->toISOString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>{{ url('/#member') }}</loc>
        <lastmod>{{ now()->toISOString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/#struktur') }}</loc>
        <lastmod>{{ now()->toISOString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/#galeri') }}</loc>
        <lastmod>{{ now()->toISOString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.7</priority>
    </url>
    <url>
        <loc>{{ url('/#contact') }}</loc>
        <lastmod>{{ now()->toISOString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
    <url>
        <loc>{{ url('/privacy-policy') }}</loc>
        <lastmod>{{ now()->toISOString() }}</lastmod>
        <changefreq>yearly</changefreq>
        <priority>0.3</priority>
    </url>
    <url>
        <loc>{{ url('/terms-of-service') }}</loc>
        <lastmod>{{ now()->toISOString() }}</lastmod>
        <changefreq>yearly</changefreq>
        <priority>0.3</priority>
    </url>
</urlset>