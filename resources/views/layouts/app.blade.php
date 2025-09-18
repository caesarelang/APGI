<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'APGI - Asosiasi Pengusaha Gula Indonesia')</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="@yield('meta_description', 'Asosiasi Pengusaha Gula Indonesia (APGI) - Organisasi yang menaungi para pengusaha gula di Indonesia untuk mengembangkan industri gula nasional yang berkelanjutan dan berdaya saing tinggi.')">
    <meta name="keywords" content="APGI, Asosiasi Pengusaha Gula Indonesia, industri gula, gula Indonesia, Surabaya, Margomulyo">
    <meta name="author" content="APGI - Asosiasi Pengusaha Gula Indonesia">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'APGI - Asosiasi Pengusaha Gula Indonesia')">
    <meta property="og:description" content="@yield('meta_description', 'Asosiasi Pengusaha Gula Indonesia (APGI) - Organisasi yang menaungi para pengusaha gula di Indonesia')">
    <meta property="og:image" content="{{ asset('images/logo-apgi.png') }}">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title', 'APGI - Asosiasi Pengusaha Gula Indonesia')">
    <meta property="twitter:description" content="@yield('meta_description', 'Asosiasi Pengusaha Gula Indonesia (APGI)')">
    <meta property="twitter:image" content="{{ asset('images/logo-apgi.png') }}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #2E7D32;
            --secondary-color: #4CAF50;
            --accent-color: #81C784;
            --dark-color: #1B5E20;
            --light-color: #E8F5E8;
            --text-primary: #2C3E50;
            --text-secondary: #7F8C8D;
            --gradient-primary: linear-gradient(135deg, #2E7D32 0%, #4CAF50 100%);
            --gradient-accent: linear-gradient(135deg, #4CAF50 0%, #81C784 100%);
            --shadow-soft: 0 4px 20px rgba(46, 125, 50, 0.1);
            --shadow-medium: 0 8px 30px rgba(46, 125, 50, 0.15);
            --shadow-strong: 0 15px 35px rgba(46, 125, 50, 0.2);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #ffffff;
            color: var(--text-primary);
            line-height: 1.7;
            overflow-x: hidden;
            scroll-behavior: smooth;
            scroll-padding-top: 100px; /* Account for sticky header */
        }
        
        /* Ensure sections have proper spacing from header */
        section {
            scroll-margin-top: 100px;
        }
        
        .text-gradient {
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Ensure hero title gradient is always green */
        .hero-title .text-gradient,
        .hero-section .text-gradient {
            background: var(--gradient-primary) !important;
            -webkit-background-clip: text !important;
            -webkit-text-fill-color: transparent !important;
            background-clip: text !important;
            color: transparent !important;
        }
        
        /* Animation-safe gradient for hero */
        .hero-section .text-gradient {
            animation: none !important;
            transition: none !important;
        }
        
        .btn-gradient {
            background: var(--gradient-primary);
            border: none;
            color: white;
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-soft);
            position: relative;
            overflow: hidden;
        }
        
        .btn-gradient::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .btn-gradient:hover::before {
            left: 100%;
        }
        
        .btn-gradient:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-medium);
            color: white;
        }
        
        /* Header Styling */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(46, 125, 50, 0.1);
            transition: all 0.3s ease;
            box-shadow: var(--shadow-soft);
        }
        
        .navbar.scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: var(--shadow-medium);
        }
        
        .logo-container {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .logo-icon {
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            transition: all 0.3s ease;
        }
        
        .logo-icon::after {
            display: none;
        }
        
        .logo-icon:hover {
            transform: scale(1.05);
        }
        
        .logo-icon:hover::after {
            display: none;
        }
        
        .logo-icon i {
            font-size: 24px;
            position: relative;
            z-index: 1;
        }
        
        .logo-image {
            width: 100%;
            height: 100%;
            object-fit: contain;
            position: relative;
            z-index: 1;
        }
        
        .brand-text {
            display: flex;
            flex-direction: column;
        }
        
        .brand-title {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 700;
            color: var(--primary-color);
            line-height: 1.2;
            margin: 0;
        }
        
        .brand-subtitle {
            font-size: 13px;
            color: var(--text-secondary);
            font-weight: 500;
            margin: 0;
        }
        
        .nav-link {
            color: var(--text-secondary) !important;
            font-weight: 500;
            font-size: 15px;
            padding: 10px 20px !important;
            border-radius: 25px;
            transition: all 0.3s ease;
            position: relative;
            margin: 0 5px;
        }
        
        .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 3px;
            background: var(--gradient-primary);
            border-radius: 2px;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover,
        .nav-link.active {
            color: var(--primary-color) !important;
            background: var(--light-color);
            transform: translateY(-1px);
        }
        
        .nav-link:hover::before,
        .nav-link.active::before {
            width: 30px;
        }
        
        .nav-link i {
            font-size: 14px;
            margin-right: 8px;
        }
        
        /* Hero Section */
        .page-section {
            padding: 80px 0;
        }
        
        .page-title {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 20px;
        }
        
        .page-subtitle {
            font-size: 1.2rem;
            color: var(--text-secondary);
            margin-bottom: 30px;
            font-weight: 400;
        }
        
        /* Cards */
        .feature-card {
            background: white;
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: var(--shadow-soft);
            border: 1px solid rgba(46, 125, 50, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            height: 100%;
        }
        
        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-primary);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-strong);
        }
        
        .feature-card:hover::before {
            transform: scaleX(1);
        }
        
        .feature-icon {
            width: 80px;
            height: 80px;
            background: var(--light-color);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 32px;
            color: var(--primary-color);
            transition: all 0.3s ease;
            position: relative;
        }
        
        .feature-card:hover .feature-icon {
            background: var(--gradient-primary);
            color: white;
            transform: scale(1.1);
        }
        
        .feature-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--text-primary);
        }
        
        .feature-text {
            color: var(--text-secondary);
            line-height: 1.6;
        }
        
        /* Map Container */
        .map-container {
            height: 200px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow-soft);
            border: 3px solid white;
            transition: all 0.3s ease;
        }
        
        .map-container:hover {
            box-shadow: var(--shadow-medium);
            transform: scale(1.02);
        }
        
        /* Footer */
        footer {
            background: linear-gradient(135deg, #e8f5e8 0%, #f1f8e9 100%);
            border-top: 1px solid rgba(46, 125, 50, 0.1);
            position: relative;
        }
        
        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--gradient-primary);
        }
        
        .footer-logo .logo-icon {
            background: none;
        }
        
        .footer-section h6 {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 20px;
            position: relative;
        }
        
        .footer-section h6::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 30px;
            height: 2px;
            background: var(--gradient-primary);
            border-radius: 1px;
        }
        
        .footer-link {
            color: var(--text-secondary);
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
            padding: 5px 0;
        }
        
        .footer-link:hover {
            color: var(--primary-color);
            transform: translateX(5px);
        }
        
        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }
        
        .contact-item:hover {
            transform: translateX(5px);
        }
        
        .contact-item i {
            color: var(--primary-color);
            margin-right: 12px;
            margin-top: 2px;
            font-size: 16px;
        }
        
        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Hero title specific - prevent gradient from being affected by fade-in */
        .hero-content .text-gradient {
            background: var(--gradient-primary) !important;
            -webkit-background-clip: text !important;
            -webkit-text-fill-color: transparent !important;
            background-clip: text !important;
            color: transparent !important;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .page-title {
                font-size: 2.5rem;
            }
            
            .page-subtitle {
                font-size: 1.1rem;
            }
            
            .brand-title {
                font-size: 24px;
            }
            
            .brand-subtitle {
                font-size: 12px;
            }
            
            .logo-icon {
                width: 55px;
                height: 55px;
            }
            
            .logo-icon i {
                font-size: 20px;
            }
        }
        
        @media (max-width: 576px) {
            .feature-card {
                padding: 30px 20px;
            }
        }
        
        /* Member Card Styles */
        .member-card {
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.1);
        }
        .member-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15) !important;
        }
        .member-logo {
            width: 100px;
            height: 100px;
            object-fit: contain;
            transition: transform 0.3s ease;
        }
        .member-card:hover .member-logo {
            transform: scale(1.1);
        }
        .member-card h6 {
            color: var(--bs-primary);
            font-weight: 600;
        }

        /* Struktur Styles */
        .struktur-chart {
            border: 1px solid rgba(0,0,0,0.1);
        }
        .position-card {
            padding: 1.5rem;
            border-radius: 0.75rem;
            background: rgba(46, 125, 50, 0.05);
            margin-bottom: 1rem;
            transition: all 0.3s ease;
        }
        .position-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        /* Kegiatan Styles */
        .kegiatan-card {
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.1);
            height: 100%;
        }
        .kegiatan-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15) !important;
        }
        .kegiatan-icon {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .kegiatan-icon i {
            font-size: 1.5rem;
        }

        /* Program Styles */
        .program-card {
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.1);
        }
        .program-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1) !important;
        }
        .program-icon {
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .progress {
            height: 8px;
        }

        /* Hero Section Styles */
        .hero-section {
            background: linear-gradient(135deg, rgba(46, 125, 50, 0.08) 0%, rgba(76, 175, 80, 0.08) 50%, rgba(129, 199, 132, 0.06) 100%);
            padding: 120px 0 100px;
            min-height: 100vh;
            position: relative;
        }
        
        .hero-section .container {
            position: relative;
            z-index: 2;
        }
        
        .min-vh-75 {
            min-height: 75vh;
        }
        
        .hero-content {
            padding-right: 2rem;
        }
        
        .hero-title {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 1.5rem;
        }
        
        .hero-title .text-gradient {
            background: var(--gradient-primary) !important;
            -webkit-background-clip: text !important;
            -webkit-text-fill-color: transparent !important;
            background-clip: text !important;
            color: transparent !important;
        }
        
        /* Ensure gradient persists during animations */
        .hero-title .text-gradient,
        .hero-title .text-gradient:hover,
        .hero-title .text-gradient:focus,
        .hero-title .text-gradient:active {
            background: var(--gradient-primary) !important;
            -webkit-background-clip: text !important;
            -webkit-text-fill-color: transparent !important;
            background-clip: text !important;
            color: transparent !important;
        }
        
        .hero-subtitle {
            color: #6c757d;
            font-weight: 500;
            margin-bottom: 2rem;
        }
        
        .hero-image-container {
            position: relative;
        }
        
        .hero-main-image {
            position: relative;
        }
        
        .hero-main-image img {
            max-width: 100%;
            height: auto;
            border-radius: 1.5rem;
            box-shadow: 0 8px 20px rgba(46, 125, 50, 0.1);
        }

        /* About Section Styles */
        .about-info-card {
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.05);
        }
        
        .about-info-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.1) !important;
        }
        
        /* Timeline Styles */
        .history-timeline {
            position: relative;
        }
        
        .timeline-year {
            position: relative;
            text-align: center;
        }
        
        .year-number {
            display: inline-block;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            font-weight: bold;
            font-size: 1.5rem;
            padding: 15px 20px;
            border-radius: 50px;
            box-shadow: 0 8px 20px rgba(46, 125, 50, 0.3);
            position: relative;
            z-index: 2;
        }
        
        .timeline-line {
            position: absolute;
            top: 50%;
            right: -20px;
            width: 40px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            border-radius: 2px;
            transform: translateY(-50%);
        }
        
        .achievement-highlight {
            transition: all 0.3s ease;
            border: 1px solid rgba(76, 175, 80, 0.2);
        }
        
        .achievement-highlight:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(76, 175, 80, 0.1);
        }
        
        .achievement-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        /* Vision Mission Styles */
        .vision-card,
        .mission-card {
            transition: all 0.3s ease;
            border: 1px solid rgba(25, 135, 84, 0.2) !important;
            background-color: rgba(25, 135, 84, 0.1) !important;
        }
        
        .vision-card:hover,
        .mission-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(25, 135, 84, 0.15) !important;
            border-color: rgba(25, 135, 84, 0.3) !important;
            background-color: rgba(25, 135, 84, 0.12) !important;
        }
        
        .vision-icon,
        .mission-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            background-color: #f8f9fa !important;
            border: 1px solid rgba(0,0,0,0.05);
        }
        
        .vision-card:hover .vision-icon {
            transform: scale(1.1);
            background-color: rgba(13, 110, 253, 0.1) !important;
        }
        
        .mission-card:hover .mission-icon {
            transform: scale(1.1);
            background-color: rgba(25, 135, 84, 0.15) !important;
        }
        
        .role-card {
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.1);
        }
        
        .role-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15) !important;
        }
        
        .role-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .role-card:hover .role-icon {
            transform: scale(1.1);
        }
        
        .role-icon i {
            font-size: 1.5rem;
        }
        
        /* Mobile responsiveness for timeline */
        @media (max-width: 768px) {
            .timeline-line {
                display: none;
            }
            
            .year-number {
                font-size: 1.2rem;
                padding: 12px 18px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg py-3">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand logo-container" href="/">
                    <div class="logo-icon">
                        <img src="{{ asset('images/logo-apgi.png') }}" alt="Logo APGI - Asosiasi Pengusaha Gula Indonesia" class="logo-image">
                    </div>
                    <div class="brand-text">
                        <h1 class="brand-title">APGI</h1>
                        <p class="brand-subtitle">Asosiasi Pengusaha Gula Indonesia</p>
                    </div>
                </a>
                
                <!-- Toggle button -->
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <!-- Navigation -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="/#home">
                                <i class="fas fa-home"></i><span class="nav-text" data-en="Home" data-id="Beranda">Beranda</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#about">
                                <i class="fas fa-info-circle"></i><span class="nav-text" data-en="About" data-id="Tentang">Tentang</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#member">
                                <i class="fas fa-users"></i><span class="nav-text" data-en="Members" data-id="Anggota">Anggota</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#struktur">
                                <i class="fas fa-sitemap"></i><span class="nav-text" data-en="Structure" data-id="Struktur">Struktur</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#galeri">
                                <i class="fas fa-images"></i><span class="nav-text" data-en="Gallery" data-id="Galeri">Galeri</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#contact">
                                <i class="fas fa-envelope"></i><span class="nav-text" data-en="Contact" data-id="Kontak">Kontak</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <div class="language-toggle">
                                <button class="btn btn-outline-success btn-sm" onclick="toggleLanguage()">
                                    <i class="fas fa-globe me-1"></i>
                                    <span id="lang-text">EN</span>
                                </button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="py-5 mt-5">
        <div class="container">
            <div class="row g-4">
                <!-- APGI Info -->
                <div class="col-lg-4">
                    <div class="footer-logo d-flex align-items-center mb-4">
                        <div class="logo-icon me-3">
                            <img src="{{ asset('images/logo-apgi.png') }}" alt="Logo APGI - Asosiasi Pengusaha Gula Indonesia" class="logo-image">
                        </div>
                        <div class="brand-text">
                            <h5 class="brand-title mb-0" style="font-size: 24px;">APGI</h5>
                            <small class="brand-subtitle">Asosiasi Pengusaha Gula Indonesia</small>
                        </div>
                    </div>
              
                    <div class="d-flex gap-3">
                        <a href="#" class="btn btn-outline-success btn-sm rounded-circle" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="btn btn-outline-success btn-sm rounded-circle" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="btn btn-outline-success btn-sm rounded-circle" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6">
                    <div class="footer-section">
                        <h6 data-en="Main Menu" data-id="Menu Utama">Menu Utama</h6>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="/#home" class="footer-link" data-en="Home" data-id="Beranda">Beranda</a></li>
                            <li class="mb-2"><a href="/#about" class="footer-link" data-en="About" data-id="Tentang">Tentang</a></li>
                            <li class="mb-2"><a href="/#member" class="footer-link" data-en="Members" data-id="Anggota">Anggota</a></li>
                            <li class="mb-2"><a href="/#struktur" class="footer-link" data-en="Structure" data-id="Struktur">Struktur</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Services -->
                <div class="col-lg-2 col-md-6">
                    <div class="footer-section">
                        <h6 data-en="Activities" data-id="Kegiatan">Kegiatan</h6>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="/#galeri" class="footer-link" data-en="Gallery" data-id="Galeri">Galeri</a></li>
                            <li class="mb-2"><a href="/#contact" class="footer-link" data-en="Contact" data-id="Kontak">Kontak</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Contact & Map -->
                <div class="col-lg-4">
                    <div class="footer-section">
                        <h6 data-en="Contact & Location" data-id="Kontak & Lokasi">Kontak & Lokasi</h6>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span data-en="Margomulyo, Surabaya<br>East Java, Indonesia" data-id="Margomulyo, Surabaya<br>Jawa Timur, Indonesia">Margomulyo, Surabaya<br>Jawa Timur, Indonesia</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <span>+62 31-033-011</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <span>info@apgi.or.id</span>
                        </div>
                        
                        <div class="map-container mt-3">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.2346838582!2d112.68614148166769!3d-7.256538938034943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMTUnMjMuNSJTIDExMsKwNDEnMTAuMSJF!5e0!3m2!1sen!2sid!4v1639123456789!5m2!1sen!2sid" 
                                width="100%" 
                                height="100%" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Footer Bottom -->
            <hr class="my-4" style="border-color: rgba(46, 125, 50, 0.2);">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <p class="text-muted mb-0" data-en="&copy; 2025 APGI - Indonesian Sugar Entrepreneurs Association. All rights reserved." data-id="&copy; 2025 APGI - Asosiasi Pengusaha Gula Indonesia. Semua hak dilindungi.">
                        &copy; 2025 APGI - Asosiasi Pengusaha Gula Indonesia. Semua hak dilindungi.
                    </p>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <a href="/privacy-policy" class="footer-link me-3" data-en="Privacy Policy" data-id="Kebijakan Privasi">Kebijakan Privasi</a>
                    <a href="/terms-of-service" class="footer-link" data-en="Terms & Conditions" data-id="Syarat & Ketentuan">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Fade in animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all fade-in elements
        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // Active nav link based on current page and section
        const currentLocation = window.location.pathname;
        const currentHash = window.location.hash;
        const navLinks = document.querySelectorAll('.nav-link');
        
        navLinks.forEach(link => {
            link.classList.remove('active');
            // Check if we're on home page and hash matches
            if (currentLocation === '/' && link.getAttribute('href') === '/' + currentHash) {
                link.classList.add('active');
            }
            // If no hash, make home active
            else if (currentLocation === '/' && !currentHash && link.getAttribute('href') === '/#home') {
                link.classList.add('active');
            }
        });

        // Smooth scroll for anchor links and update active states
        document.querySelectorAll('a[href^="/#"], a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const href = this.getAttribute('href');
                let targetId = href.includes('/#') ? href.split('/#')[1] : href.split('#')[1];
                
                // If clicking from same page, just scroll
                if (window.location.pathname === '/') {
                    const target = document.getElementById(targetId);
                    if (target) {
                        // Update active nav link
                        document.querySelectorAll('.nav-link').forEach(link => {
                            link.classList.remove('active');
                        });
                        this.classList.add('active');
                        
                        // Calculate header height for offset
                        const header = document.querySelector('header');
                        const headerHeight = header ? header.offsetHeight : 80;
                        const targetPosition = target.offsetTop - headerHeight - 20; // Extra 20px padding
                        
                        // Smooth scroll to target with offset
                        window.scrollTo({
                            top: Math.max(0, targetPosition),
                            behavior: 'smooth'
                        });
                        
                        // Update URL hash
                        history.pushState(null, null, '#' + targetId);
                    }
                } else {
                    // If on different page, navigate to home with hash
                    window.location.href = href;
                }
            });
        });

        // Update active nav link based on scroll position
        function updateActiveNavOnScroll() {
            if (window.location.pathname !== '/') return;
            
            const sections = ['home', 'about', 'member', 'struktur', 'galeri', 'contact'];
            let currentSection = 'home';
            
            // Calculate header height for consistent offset
            const header = document.querySelector('header');
            const headerHeight = header ? header.offsetHeight : 80;
            const offset = headerHeight + 50; // Extra padding for better detection
            
            sections.forEach(sectionId => {
                const section = document.getElementById(sectionId);
                if (section) {
                    const rect = section.getBoundingClientRect();
                    // Check if section is in view considering header offset
                    if (rect.top <= offset && rect.bottom >= offset) {
                        currentSection = sectionId;
                    }
                }
            });
            
            // Update active nav link
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '/#' + currentSection) {
                    link.classList.add('active');
                }
            });
        }

        // Throttled scroll event listener
        let scrollTimeout;
        window.addEventListener('scroll', () => {
            if (scrollTimeout) clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(updateActiveNavOnScroll, 100);
        });

        // Add hover effects to cards
        document.querySelectorAll('.feature-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Loading animation for images
        document.querySelectorAll('img').forEach(img => {
            img.addEventListener('load', function() {
                this.style.opacity = '1';
                this.style.transform = 'scale(1)';
            });
        });

        // Mobile menu auto-close on link click
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function() {
                const navbarCollapse = document.querySelector('.navbar-collapse');
                if (navbarCollapse.classList.contains('show')) {
                    const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                    bsCollapse.hide();
                }
            });
        });

        // Add loading states for buttons
        document.querySelectorAll('.btn-gradient').forEach(btn => {
            btn.addEventListener('click', function(e) {
                if (!this.classList.contains('loading')) {
                    this.classList.add('loading');
                    const originalText = this.innerHTML;
                    this.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Memproses...';
                    
                    setTimeout(() => {
                        this.classList.remove('loading');
                        this.innerHTML = originalText;
                    }, 2000);
                }
            });
        });

        // Lazy loading for iframes
        const iframes = document.querySelectorAll('iframe[data-src]');
        const iframeObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const iframe = entry.target;
                    iframe.src = iframe.dataset.src;
                    iframe.removeAttribute('data-src');
                    iframeObserver.unobserve(iframe);
                }
            });
        });

        iframes.forEach(iframe => iframeObserver.observe(iframe));

        // Add parallax effect to hero section
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const heroSection = document.querySelector('.hero-section');
            if (heroSection) {
                const rate = scrolled * -0.5;
                heroSection.style.transform = `translateY(${rate}px)`;
            }
        });



        // Add counter animation for stats
        function animateCounter(element, target, duration = 2000) {
            const start = 0;
            const startTime = performance.now();

            function update(currentTime) {
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);
                const current = Math.floor(progress * target);
                
                element.textContent = current + (element.textContent.includes('+') ? '+' : '');
                
                if (progress < 1) {
                    requestAnimationFrame(update);
                }
            }
            
            requestAnimationFrame(update);
        }

        // Initialize counters when they come into view
        const statNumbers = document.querySelectorAll('.stat-number');
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = parseInt(entry.target.textContent);
                    animateCounter(entry.target, target);
                    statsObserver.unobserve(entry.target);
                }
            });
        });

        statNumbers.forEach(stat => statsObserver.observe(stat));

        // Add search functionality (if needed)
        function initSearch() {
            const searchInput = document.querySelector('#search-input');
            if (searchInput) {
                searchInput.addEventListener('input', function(e) {
                    const query = e.target.value.toLowerCase();
                    // Add search logic here
                });
            }
        }

        // Initialize all functions
        document.addEventListener('DOMContentLoaded', function() {
            initSearch();
            
            // Add custom cursor effect
            const cursor = document.createElement('div');
            cursor.className = 'custom-cursor';
            document.body.appendChild(cursor);
            
            document.addEventListener('mousemove', function(e) {
                cursor.style.left = e.clientX + 'px';
                cursor.style.top = e.clientY + 'px';
            });
            
            // Add click ripple effect
            document.addEventListener('click', function(e) {
                const ripple = document.createElement('div');
                ripple.className = 'ripple';
                ripple.style.left = e.clientX + 'px';
                ripple.style.top = e.clientY + 'px';
                document.body.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });

        // Add custom styles for animations
        const style = document.createElement('style');
        style.textContent = `
            .language-toggle {
                padding: 8px 16px;
            }
            
            .language-toggle .btn {
                font-size: 0.85rem;
                padding: 6px 12px;
                border-radius: 20px;
                transition: all 0.3s ease;
            }
            
            .language-toggle .btn:hover {
                transform: translateY(-1px);
                box-shadow: 0 4px 12px rgba(46, 125, 50, 0.3);
            }
            
            .loading {
                pointer-events: none;
                opacity: 0.7;
            }
            
            .custom-cursor {
                position: fixed;
                width: 20px;
                height: 20px;
                border: 2px solid var(--primary-color);
                border-radius: 50%;
                pointer-events: none;
                z-index: 9999;
                transition: all 0.1s ease;
                display: none;
            }
            
            @media (min-width: 1024px) {
                .custom-cursor {
                    display: block;
                }
                
                body {
                    cursor: none;
                }
                
                a, button {
                    cursor: none;
                }
            }
            
            .ripple {
                position: fixed;
                border-radius: 50%;
                background: rgba(46, 125, 50, 0.3);
                transform: scale(0);
                animation: ripple-animation 0.6s linear;
                pointer-events: none;
                z-index: 9998;
                width: 20px;
                height: 20px;
                margin-left: -10px;
                margin-top: -10px;
            }
            
            @keyframes ripple-animation {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
            
            .navbar-toggler:focus {
                box-shadow: none;
            }
            
            .navbar-toggler {
                border: none;
                padding: 4px 8px;
            }
            
            .navbar-toggler-icon {
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='%232E7D32' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
            }
            
            @media (max-width: 767px) {
                .hero-section {
                    padding: 100px 0 80px;
                    min-height: 90vh;
                }
                
                .min-vh-75 {
                    min-height: 70vh;
                }
                
                .hero-title {
                    font-size: 2.2rem;
                    margin-bottom: 1rem;
                }
                
                .hero-subtitle {
                    font-size: 1.1rem;
                    margin-bottom: 1.5rem;
                }
                
                .hero-content {
                    padding-right: 0;
                    margin-bottom: 3rem;
                }
                
                .hero-main-image::before {
                    top: -10px;
                    left: -10px;
                    right: 10px;
                    bottom: 10px;
                }
                
                .feature-card {
                    margin-bottom: 20px;
                }
                
                .map-container {
                    height: 150px;
                }
            }
        `;
        document.head.appendChild(style);

        // Language Toggle Functionality
        let currentLanguage = 'id'; // Default to Indonesian
        
        function toggleLanguage() {
            currentLanguage = currentLanguage === 'id' ? 'en' : 'id';
            updateLanguage();
            
            // Save preference
            localStorage.setItem('apgi-language', currentLanguage);
        }
        
        function updateLanguage() {
            const elements = document.querySelectorAll('[data-en][data-id]');
            const langButton = document.getElementById('lang-text');
            
            elements.forEach(element => {
                if (currentLanguage === 'en') {
                    const englishContent = element.getAttribute('data-en');
                    // Check if content contains HTML tags
                    if (englishContent.includes('<') && englishContent.includes('>')) {
                        element.innerHTML = englishContent;
                    } else {
                        element.textContent = englishContent;
                    }
                } else {
                    const indonesianContent = element.getAttribute('data-id');
                    // Check if content contains HTML tags
                    if (indonesianContent.includes('<') && indonesianContent.includes('>')) {
                        element.innerHTML = indonesianContent;
                    } else {
                        element.textContent = indonesianContent;
                    }
                }
            });
            
            // Update language button text
            if (langButton) {
                langButton.textContent = currentLanguage === 'id' ? 'EN' : 'ID';
            }
            
            // Update document language attribute
            document.documentElement.lang = currentLanguage === 'id' ? 'id' : 'en';
            
            // Update page title and meta descriptions
            updateMetaTags();
        }
        
        function updateMetaTags() {
            const titles = {
                'id': 'APGI - Asosiasi Pengusaha Gula Indonesia',
                'en': 'APGI - Indonesian Sugar Entrepreneurs Association'
            };
            
            const descriptions = {
                'id': 'Asosiasi Pengusaha Gula Indonesia (APGI) - Organisasi yang menaungi para pengusaha gula di Indonesia untuk mengembangkan industri gula nasional yang berkelanjutan dan berdaya saing tinggi.',
                'en': 'Indonesian Sugar Entrepreneurs Association (APGI) - Organization that oversees sugar entrepreneurs in Indonesia to develop a sustainable and competitive national sugar industry.'
            };
            
            document.title = titles[currentLanguage];
            
            const metaDescription = document.querySelector('meta[name="description"]');
            if (metaDescription) {
                metaDescription.setAttribute('content', descriptions[currentLanguage]);
            }
        }
        
        // Initialize language on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Load saved language preference
            const savedLanguage = localStorage.getItem('apgi-language');
            if (savedLanguage) {
                currentLanguage = savedLanguage;
            }
            updateLanguage();
        });

        // Make toggleLanguage function global
        window.toggleLanguage = toggleLanguage;
    </script>
</body>
</html>