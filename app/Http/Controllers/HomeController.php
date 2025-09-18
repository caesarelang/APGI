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
        SEOMeta::setTitle('Beranda - APGI | Asosiasi Pengusaha Gula Indonesia');
        SEOMeta::setDescription('APGI (Asosiasi Pengusaha Gula Indonesia) adalah organisasi profesional yang menaungi para pengusaha gula di Indonesia sejak 2002. Bergabunglah dengan kami untuk mengembangkan industri gula nasional.');
        SEOMeta::setKeywords(['APGI', 'Asosiasi Pengusaha Gula Indonesia', 'industri gula', 'gula Indonesia', 'pedagang gula', 'Surabaya']);
        SEOMeta::setCanonical(url('/'));
        
        // Open Graph tags
        OpenGraph::setTitle('Beranda - APGI | Asosiasi Pengusaha Gula Indonesia');
        OpenGraph::setDescription('APGI adalah organisasi profesional yang menaungi para pengusaha gula di Indonesia sejak 2002');
        OpenGraph::setUrl(url('/'));
        OpenGraph::setType('website');
        OpenGraph::addImage(asset('images/logo-apgi.png'));
        OpenGraph::setSiteName('APGI');
        OpenGraph::addProperty('locale', 'id_ID');
        
        // Twitter Card tags
        TwitterCard::setType('summary_large_image');
        TwitterCard::setTitle('Beranda - APGI | Asosiasi Pengusaha Gula Indonesia');
        TwitterCard::setDescription('APGI adalah organisasi profesional yang menaungi para pengusaha gula di Indonesia sejak 2002');
        TwitterCard::setImage(asset('images/logo-apgi.png'));
        TwitterCard::setSite('@apgi_indonesia');
        
        // JSON-LD Structured Data
        JsonLd::setTitle('APGI - Asosiasi Pengusaha Gula Indonesia');
        JsonLd::setDescription('Asosiasi Pengusaha Gula Indonesia (APGI) adalah organisasi profesional yang menaungi para pengusaha gula di Indonesia sejak 2002');
        JsonLd::setType('Organization');
        JsonLd::addValue('url', url('/'));
        JsonLd::addValue('logo', asset('images/logo-apgi.png'));
        JsonLd::addValue('sameAs', [
            'https://www.facebook.com/apgi.indonesia',
            'https://www.instagram.com/apgi_indonesia',
            'https://www.linkedin.com/company/apgi-indonesia'
        ]);
        JsonLd::addValue('address', [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Margomulyo',
            'addressLocality' => 'Surabaya',
            'addressRegion' => 'Jawa Timur',
            'postalCode' => '60183',
            'addressCountry' => 'ID'
        ]);
        JsonLd::addValue('contactPoint', [
            '@type' => 'ContactPoint',
            'telephone' => '+62-31-033-011',
            'contactType' => 'customer service',
            'email' => 'contact@asosiasipengusahagulaindonesia.or.id',
            'availableLanguage' => ['Indonesian', 'English']
        ]);
        JsonLd::addValue('foundingDate', '2002');
        JsonLd::addValue('numberOfEmployees', '8+');
        JsonLd::addValue('industry', 'Sugar Industry Association');
        
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
