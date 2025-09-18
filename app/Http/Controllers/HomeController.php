<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

class HomeController extends Controller
{
    public function index()
    {
        // Set SEO meta tags for homepage
        SEOMeta::setTitle('Beranda - Profil Perusahaan Terpercaya');
        SEOMeta::setDescription('Profil perusahaan terpercaya dengan layanan berkualitas tinggi di Indonesia. Temukan solusi terbaik untuk kebutuhan bisnis Anda.');
        SEOMeta::setKeywords(['profil perusahaan', 'layanan berkualitas', 'terpercaya', 'indonesia', 'solusi bisnis']);
        SEOMeta::setCanonical(url('/'));
        
        // Open Graph tags
        OpenGraph::setTitle('Beranda - Profil Perusahaan Terpercaya');
        OpenGraph::setDescription('Profil perusahaan terpercaya dengan layanan berkualitas tinggi di Indonesia');
        OpenGraph::setUrl(url('/'));
        OpenGraph::setType('website');
        OpenGraph::addImage(asset('images/logo.png'));
        OpenGraph::setSiteName('Perusahaan');
        OpenGraph::addProperty('locale', 'id_ID');
        
        // Twitter Card tags
        TwitterCard::setType('summary_large_image');
        TwitterCard::setTitle('Beranda - Profil Perusahaan Terpercaya');
        TwitterCard::setDescription('Profil perusahaan terpercaya dengan layanan berkualitas tinggi di Indonesia');
        TwitterCard::setImage(asset('images/logo.png'));
        
        // JSON-LD Structured Data
        JsonLd::setTitle('Profil Perusahaan Terpercaya');
        JsonLd::setDescription('Perusahaan terpercaya dengan layanan berkualitas tinggi di Indonesia');
        JsonLd::setType('Organization');
        JsonLd::addValue('address', [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Jl. Contoh No. 123',
            'addressLocality' => 'Jakarta',
            'addressRegion' => 'DKI Jakarta',
            'addressCountry' => 'ID'
        ]);
        JsonLd::addValue('contactPoint', [
            '@type' => 'ContactPoint',
            'contactType' => 'customer service',
            'availableLanguage' => 'Indonesian'
        ]);
        
        return view('home');
    }
    
    public function about()
    {
        // Set SEO meta tags for about page
        SEOMeta::setTitle('Tentang Kami - Profil Perusahaan');
        SEOMeta::setDescription('Mengenal lebih dekat tentang perusahaan kami, visi misi, sejarah, dan komitmen terhadap kualitas layanan');
        SEOMeta::setKeywords(['tentang kami', 'profil perusahaan', 'visi misi', 'sejarah perusahaan']);
        SEOMeta::setCanonical(url('/tentang'));
        
        // Open Graph tags
        OpenGraph::setTitle('Tentang Kami - Profil Perusahaan');
        OpenGraph::setDescription('Mengenal lebih dekat tentang perusahaan kami dan komitmen terhadap kualitas');
        OpenGraph::setUrl(url('/tentang'));
        
        return view('about');
    }
    
    public function services()
    {
        // Set SEO Meta Tags
        SEOMeta::setTitle('Layanan Kami - ' . config('app.name'));
        SEOMeta::setDescription('Temukan berbagai layanan berkualitas tinggi yang kami tawarkan untuk memenuhi kebutuhan bisnis Anda.');
        SEOMeta::setKeywords(array_merge(config('company.keywords'), ['layanan', 'solusi bisnis', 'konsultasi']));
        SEOMeta::setCanonical(url('/layanan'));
        
        // Set Open Graph
        OpenGraph::setTitle('Layanan Kami - ' . config('app.name'));
        OpenGraph::setDescription('Temukan berbagai layanan berkualitas tinggi yang kami tawarkan untuk memenuhi kebutuhan bisnis Anda.');
        OpenGraph::setUrl(url('/layanan'));
        
        // Set Twitter Card
        TwitterCard::setTitle('Layanan Kami - ' . config('app.name'));
        TwitterCard::setDescription('Temukan berbagai layanan berkualitas tinggi yang kami tawarkan untuk memenuhi kebutuhan bisnis Anda.');
        
        // Set JSON-LD
        JsonLd::setTitle('Layanan Kami - ' . config('app.name'));
        JsonLd::setDescription('Temukan berbagai layanan berkualitas tinggi yang kami tawarkan untuk memenuhi kebutuhan bisnis Anda.');
        JsonLd::setType('Service');
        
        return view('services');
    }
    
    public function contact()
    {
        // Set SEO Meta Tags
        SEOMeta::setTitle('Kontak Kami - ' . config('app.name'));
        SEOMeta::setDescription('Hubungi ' . config('app.name') . ' untuk konsultasi dan informasi lebih lanjut. Tim kami siap membantu Anda.');
        SEOMeta::setKeywords(array_merge(config('company.keywords'), ['kontak', 'hubungi kami', 'konsultasi']));
        SEOMeta::setCanonical(url('/kontak'));
        
        // Set Open Graph
        OpenGraph::setTitle('Kontak Kami - ' . config('app.name'));
        OpenGraph::setDescription('Hubungi ' . config('app.name') . ' untuk konsultasi dan informasi lebih lanjut. Tim kami siap membantu Anda.');
        OpenGraph::setUrl(url('/kontak'));
        
        // Set Twitter Card
        TwitterCard::setTitle('Kontak Kami - ' . config('app.name'));
        TwitterCard::setDescription('Hubungi ' . config('app.name') . ' untuk konsultasi dan informasi lebih lanjut. Tim kami siap membantu Anda.');
        
        // Set JSON-LD
        JsonLd::setTitle('Kontak Kami - ' . config('app.name'));
        JsonLd::setDescription('Hubungi ' . config('app.name') . ' untuk konsultasi dan informasi lebih lanjut. Tim kami siap membantu Anda.');
        JsonLd::setType('ContactPage');
        
        return view('contact');
    }
}
