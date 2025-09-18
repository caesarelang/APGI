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

    'name' => env('COMPANY_NAME', 'Nama Perusahaan'),
    'description' => env('COMPANY_DESCRIPTION', 'Profil perusahaan terpercaya dengan layanan berkualitas tinggi di Indonesia'),
    'address' => env('COMPANY_ADDRESS', 'Jl. Contoh No. 123, Jakarta'),
    'city' => env('COMPANY_CITY', 'Jakarta'),
    'province' => env('COMPANY_PROVINCE', 'DKI Jakarta'),
    'postal_code' => env('COMPANY_POSTAL_CODE', '12345'),
    'phone' => env('COMPANY_PHONE', '+62 21 1234 5678'),
    'email' => env('COMPANY_EMAIL', 'info@perusahaan.com'),
    'website' => env('COMPANY_WEBSITE', 'https://www.perusahaan.com'),

    // Social Media
    'facebook' => env('COMPANY_FACEBOOK', ''),
    'twitter' => env('COMPANY_TWITTER', ''),
    'instagram' => env('COMPANY_INSTAGRAM', ''),
    'linkedin' => env('COMPANY_LINKEDIN', ''),
    'youtube' => env('COMPANY_YOUTUBE', ''),

    // Business Information
    'founded_year' => env('COMPANY_FOUNDED_YEAR', '2020'),
    'employees_count' => env('COMPANY_EMPLOYEES_COUNT', '50-100'),
    'industry' => env('COMPANY_INDUSTRY', 'Teknologi'),
    'tax_id' => env('COMPANY_TAX_ID', ''),

    // SEO Settings
    'keywords' => [
        'profil perusahaan',
        'layanan berkualitas',
        'terpercaya',
        'indonesia',
        'teknologi',
        'solusi bisnis'
    ],
];