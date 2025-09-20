<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Company Information
    |--------------------------------------------------------------------------
    |
    | Here you can set your company information that will be used
    | throughout the application for SEO and contact purposes.
    |
    */

    'name' => env('COMPANY_NAME', 'APGI - Asosiasi Pengusaha Gula Indonesia'),
    'description' => env('COMPANY_DESCRIPTION', 'Asosiasi Pengusaha Gula Indonesia (APGI) adalah organisasi profesional yang menaungi para pengusaha gula di Indonesia sejak 2002'),
    'address' => env('COMPANY_ADDRESS', 'Margomulyo, Surabaya'),
    'city' => env('COMPANY_CITY', 'Surabaya'),
    'province' => env('COMPANY_PROVINCE', 'Jawa Timur'),
    'postal_code' => env('COMPANY_POSTAL_CODE', '60183'),
    'phone' => env('COMPANY_PHONE', '+62 31-033-011'),
    'email' => env('COMPANY_EMAIL', 'contact@pengusahagulaindonesia.com'),
    'website' => env('COMPANY_WEBSITE', 'https://pengusahagulaindonesia.com'),

    // Social Media
    'facebook' => env('COMPANY_FACEBOOK', 'https://facebook.com/apgi.indonesia'),
    'twitter' => env('COMPANY_TWITTER', 'https://twitter.com/apgi_indonesia'),
    'instagram' => env('COMPANY_INSTAGRAM', 'https://instagram.com/apgi_indonesia'),
    'linkedin' => env('COMPANY_LINKEDIN', 'https://linkedin.com/company/apgi-indonesia'),
    'youtube' => env('COMPANY_YOUTUBE', 'https://youtube.com/c/apgi-indonesia'),

    // Business Information
    'founded_year' => env('COMPANY_FOUNDED_YEAR', '2002'),
    'employees_count' => env('COMPANY_EMPLOYEES_COUNT', '43 Anggota Aktif'),
    'industry' => env('COMPANY_INDUSTRY', 'Industri Gula dan Perdagangan'),
    'tax_id' => env('COMPANY_TAX_ID', ''),

    // SEO Settings
    'keywords' => [
        'APGI',
        'Asosiasi Pengusaha Gula Indonesia',
        'industri gula',
        'gula Indonesia',
        'pedagang gula',
        'petani tebu',
        'Surabaya',
        'perdagangan gula',
        'ekspor impor gula',
        'harga gula',
        'stabilisasi pasar gula',
        'kemitraan gula',
        'investasi gula',
        'pengusahagulaindonesia.com'
    ],
];