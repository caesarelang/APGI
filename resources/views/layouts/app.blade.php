<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {!! SEO::generate() !!}
    
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}?v={{ time() }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo-apgi.png') }}?v={{ time() }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo-apgi.png') }}?v={{ time() }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo-apgi.png') }}?v={{ time() }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}?v={{ time() }}">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/leadership-grid.css') }}">
    
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
            scroll-padding-top: 100px; 
        }
        
        
        section {
            scroll-margin-top: 100px;
        }
        
        .text-gradient {
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        
        .hero-title .text-gradient,
        .hero-section .text-gradient {
            background: var(--gradient-primary) !important;
            -webkit-background-clip: text !important;
            -webkit-text-fill-color: transparent !important;
            background-clip: text !important;
            color: transparent !important;
        }
        
        
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
        
        
        @media (min-width: 992px) {
            .logo-icon {
                width: 75px;
                height: 75px;
            }
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
            align-items: center;
            transition: all 0.3s ease;
            margin-bottom: 8px;
        }
        
        .contact-item:hover {
            transform: translateX(3px);
        }
        
        .contact-item i {
            color: var(--primary-color);
            font-size: 14px;
            min-width: 20px;
            margin-right: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        
        .map-container {
            position: relative;
            cursor: pointer;
            transition: all 0.3s ease;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        .map-container:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        
        .map-container::after {
            content: '📍 Klik untuk membuka di Google Maps';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(46, 125, 50, 0.9);
            color: white;
            padding: 8px;
            font-size: 12px;
            text-align: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .map-container:hover::after {
            opacity: 1;
        }
        
        
        .navbar .dropdown-menu {
            border: none;
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
            border-radius: 12px;
            padding: 8px 0;
            margin-top: 8px;
        }
        
        .navbar .dropdown-item {
            padding: 8px 20px;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
        }
        
        .navbar .dropdown-item:hover {
            background-color: var(--light-green);
            color: var(--primary-color);
            transform: translateX(5px);
        }
        
        
        .navbar .dropdown-item.active {
            background-color: transparent !important;
            color: inherit !important;
        }
        
        .navbar .dropdown-toggle::after {
            margin-left: 0.5em;
        }
        
        
        @media (min-width: 992px) {
            .navbar-nav .nav-link {
                padding: 8px 16px;
                border-radius: 8px;
                transition: all 0.3s ease;
                margin: 0 4px;
                position: relative;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                min-width: 70px;
            }
            
            .navbar-nav .nav-link:hover {
                background-color: var(--light-green);
                transform: translateY(-2px);
                color: var(--primary-green);
            }
            
            .navbar-nav .nav-link.active {
                background-color: rgba(40, 167, 69, 0.15);
                color: var(--primary-green);
            }
            
            .navbar-nav .nav-link i {
                font-size: 20px;
                margin-bottom: 4px;
                margin-left: 8px;
            }
            
            .nav-label {
                font-size: 0.75rem;
                font-weight: 500;
                text-align: center;
            }
            
            .navbar .dropdown-toggle::after {
                margin-left: 8px;
            }
            
            
            .navbar-nav .dropdown:hover .dropdown-menu {
                display: block;
                margin-top: 0;
                animation: fadeInUp 0.3s ease;
            }
            
            .navbar-nav .dropdown-menu {
                border: none;
                box-shadow: 0 4px 20px rgba(0,0,0,0.15);
                border-radius: 12px;
                padding: 0.5rem 0;
                margin-top: 0.5rem;
            }
            
            .navbar-nav .dropdown-item {
                padding: 0.75rem 1.25rem;
                transition: all 0.2s ease;
            }
            
            .navbar-nav .dropdown-item:hover {
                background-color: var(--light-green);
                color: var(--primary-green);
                transform: translateX(5px);
            }
            
            
            .btn-google-minimal {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                background: white;
                border: 2px solid #e0e0e0;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: all 0.3s ease;
                box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            }
            
            .btn-google-minimal:hover {
                box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                transform: translateY(-2px);
                border-color: #4285f4;
            }
            
            .btn-google-minimal i {
                color: #4285f4;
                font-size: 16px;
            }
            
            
            .btn-profile-minimal {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                border: 2px solid #e0e0e0;
                background: white;
                padding: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: all 0.3s ease;
                box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            }
            
            .btn-profile-minimal:hover {
                box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                transform: translateY(-2px);
                border-color: var(--primary-green);
            }
            
            .btn-profile-minimal::after {
                display: none; 
            }
            
            .profile-avatar {
                width: 36px;
                height: 36px;
                border-radius: 50%;
                object-fit: cover;
            }
            
            .profile-avatar-default {
                width: 36px;
                height: 36px;
                border-radius: 50%;
                background: var(--light-green);
                display: flex;
                align-items: center;
                justify-content: center;
                color: var(--primary-green);
            }
            
            .profile-avatar-default i {
                font-size: 18px;
            }
        }
        
        
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        
        .splash-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('/images/splash.jpeg') center center;
            background-size: cover;
            background-repeat: no-repeat;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            transition: opacity 1.2s ease, visibility 1.2s ease;
        }

        /* Add overlay to maintain readability */
        .splash-screen::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(46, 125, 50, 0.7);
            z-index: 1;
        }

        .splash-screen.hidden {
            opacity: 0;
            visibility: hidden;
        }

        .splash-content {
            text-align: center;
            color: white;
            z-index: 2;
            position: relative;
            max-width: 600px;
            padding: 2rem;
        }

        .splash-logo {
            margin-bottom: 2rem;
            opacity: 0;
            transform: scale(0.1);
        }

        .splash-logo.loaded {
            animation: logoZoomDramatic 2s ease-out forwards;
            animation-delay: 0.2s;
        }

        .splash-logo-img {
            width: 280px;
            height: 280px;
            object-fit: contain;
            filter: drop-shadow(0 0 40px rgba(255,255,255,0.8)) brightness(1.3) contrast(1.2);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .splash-logo-img.loaded {
            opacity: 1;
        }

        .splash-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, #ffffff, #e8f5e8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: titleSlideIn 1s ease-out 0.3s both;
        }

        .splash-subtitle {
            font-size: 1.8rem;
            font-weight: 500;
            margin-bottom: 1rem;
            opacity: 0.9;
            animation: titleSlideIn 1s ease-out 0.6s both;
        }

        .splash-tagline {
            font-size: 1.1rem;
            opacity: 0.8;
            margin-bottom: 2rem;
            animation: titleSlideIn 1s ease-out 0.9s both;
        }

        .splash-loader {
            width: 200px;
            margin: 0 auto;
            animation: titleSlideIn 1s ease-out 1.2s both;
        }

        .loader-bar {
            width: 100%;
            height: 4px;
            background: rgba(255,255,255,0.2);
            border-radius: 2px;
            overflow: hidden;
            margin-bottom: 0.5rem;
            position: relative;
        }

        .loader-bar::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, #28a745, #20c997);
            border-radius: 2px;
            animation: loadingBar 2s ease-in-out infinite;
        }

        .loader-text {
            font-size: 0.9rem;
            opacity: 0.7;
        }

        
        .splash-copyright {
            position: fixed;
            bottom: 30px;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 1000;
            animation: fadeInUp 1.5s ease-out 2s both;
        }

        .splash-copyright p {
            margin: 5px 0;
            font-size: 0.8rem;
            opacity: 0.8;
            color: rgba(255,255,255,0.9);
        }

        .splash-copyright .developed-by {
            font-size: 0.75rem;
            opacity: 0.7;
        }

        .splash-copyright strong {
            color: rgba(255,255,255,0.9);
            font-weight: 600;
        }

        
        .splash-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .bg-particles {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .particle {
            position: absolute;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            animation: particleFloat 6s ease-in-out infinite;
        }

        .particle:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .particle:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 60%;
            right: 15%;
            animation-delay: 1s;
        }

        .particle:nth-child(3) {
            width: 60px;
            height: 60px;
            bottom: 20%;
            left: 20%;
            animation-delay: 2s;
        }

        .particle:nth-child(4) {
            width: 100px;
            height: 100px;
            top: 10%;
            right: 20%;
            animation-delay: 3s;
        }

        .particle:nth-child(5) {
            width: 70px;
            height: 70px;
            bottom: 30%;
            right: 30%;
            animation-delay: 4s;
        }

        
        @keyframes logoZoomDramatic {
            0% {
                transform: scale(0.1) rotate(-10deg);
                opacity: 0;
                filter: blur(10px) brightness(0.5);
            }
            25% {
                transform: scale(0.6) rotate(-5deg);
                opacity: 0.4;
                filter: blur(5px) brightness(0.8);
            }
            50% {
                transform: scale(1.4) rotate(2deg);
                opacity: 0.9;
                filter: blur(0px) brightness(1.5);
            }
            75% {
                transform: scale(0.95) rotate(-1deg);
                opacity: 1;
                filter: blur(0px) brightness(1.3);
            }
            100% {
                transform: scale(1) rotate(0deg);
                opacity: 1;
                filter: brightness(1.3) contrast(1.2) drop-shadow(0 0 40px rgba(255, 255, 255, 0.8));
            }
        }

        @keyframes titleSlideIn {
            0% {
                transform: translateY(30px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes loadingBar {
            0% {
                left: -100%;
            }
            50% {
                left: 0%;
            }
            100% {
                left: 100%;
            }
        }

        @keyframes particleFloat {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            33% {
                transform: translateY(-20px) rotate(120deg);
            }
            66% {
                transform: translateY(20px) rotate(240deg);
            }
        }

        
        @media (max-width: 768px) {
            .splash-title {
                font-size: 2rem;
            }
            
            .splash-subtitle {
                font-size: 1.4rem;
            }
            
            .splash-tagline {
                font-size: 1rem;
            }
            
            .splash-logo-img {
                width: 80px;
                height: 80px;
            }
        }
        
        
        .hero-content .text-gradient {
            background: var(--gradient-primary) !important;
            -webkit-background-clip: text !important;
            -webkit-text-fill-color: transparent !important;
            background-clip: text !important;
            color: transparent !important;
        }
        
        .caecode-green {
            color: #28a745 !important;
            font-weight: 600 !important;
        }
        
        .caecode-red {
            color: #dc3545 !important;
            font-weight: 700 !important;
        }
        
        .text-muted .caecode-green {
            color: #28a745 !important;
        }
        
        .text-muted .caecode-red {
            color: #dc3545 !important;
        }
        
        p.text-muted strong.caecode-green {
            color: #28a745 !important;
        }
        
        p.text-muted strong.caecode-red {
            color: #dc3545 !important;
        }
        
        /* Force CaeCode colors in footer */
        footer strong[style*="color: #28a745"] {
            color: #28a745 !important;
        }
        
        footer strong[style*="color: #dc3545"] {
            color: #dc3545 !important;
        }
        
        .caecode-white {
            color: #ffffff !important;
            font-weight: 600 !important;
            text-shadow: 0 1px 3px rgba(0,0,0,0.3);
        }
        
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

        
        .about-info-card {
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.05);
        }
        
        .about-info-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.1) !important;
        }
        
        
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
    <div id="splashScreen" class="splash-screen">
        <div class="splash-content">
            <div class="splash-logo">
                <img src="{{ asset('images/logo-apgi.png') }}" alt="APGI Logo" class="splash-logo-img">
            </div>
            <div class="splash-text">
                <h1 class="splash-title" data-en="Welcome to" data-id="Selamat Datang di">Selamat Datang di</h1>
                <h2 class="splash-subtitle" data-en="Indonesian Sugar Entrepreneurs Association" data-id="Asosiasi Pengusaha Gula Indonesia">Asosiasi Pengusaha Gula Indonesia</h2>
                <div class="splash-tagline">
                    <p data-en="Building Indonesia's Sugar Industry Together" data-id="Membangun Industri Gula Indonesia Bersama">Membangun Industri Gula Indonesia Bersama</p>
                </div>
            </div>
            <div class="splash-loader">
                <div class="loader-bar"></div>
                <div class="loader-text" data-en="Loading..." data-id="Memuat...">Memuat...</div>
            </div>
            
            <div class="splash-copyright">
                <p class="developed-by">Developed by <strong class="caecode-white">CaeCode</strong></p>
            </div>
        </div>
        <div class="splash-background">
            <div class="bg-particles">
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
            </div>
        </div>
    </div>

    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg py-3">
            <div class="container">
                <a class="navbar-brand logo-container" href="/">
                    <div class="logo-icon">
                        <img src="{{ asset('images/logo-apgi.png') }}" alt="Logo APGI - Asosiasi Pengusaha Gula Indonesia" class="logo-image">
                    </div>
                    <div class="brand-text">
                        <h1 class="brand-title">APGI</h1>
                        <p class="brand-subtitle">Asosiasi Pengusaha Gula Indonesia</p>
                    </div>
                </a>
                
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="/#home" title="Beranda">
                                <i class="fas fa-home"></i><span class="nav-text d-lg-none" data-en="Home" data-id="Beranda">Beranda</span>
                                <span class="nav-label d-none d-lg-block" data-en="Home" data-id="Beranda">Beranda</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#about" title="Tentang">
                                <i class="fas fa-info-circle"></i><span class="nav-text d-lg-none" data-en="About" data-id="Tentang">Tentang</span>
                                <span class="nav-label d-none d-lg-block" data-en="About" data-id="Tentang">Tentang</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Organisasi">
                                <i class="fas fa-users"></i><span class="nav-text d-lg-none" data-en="Organization" data-id="Organisasi">Organisasi</span>
                                <span class="nav-label d-none d-lg-block" data-en="Organization" data-id="Organisasi">Organisasi</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/#member">
                                    <i class="fas fa-users me-2"></i><span data-en="Members" data-id="Anggota">Anggota</span>
                                </a></li>
                                <li><a class="dropdown-item" href="/#struktur">
                                    <i class="fas fa-sitemap me-2"></i><span data-en="Structure" data-id="Struktur">Struktur</span>
                                </a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Kegiatan">
                                <i class="fas fa-calendar"></i><span class="nav-text d-lg-none" data-en="Activities" data-id="Kegiatan">Kegiatan</span>
                                <span class="nav-label d-none d-lg-block" data-en="Activities" data-id="Kegiatan">Kegiatan</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/#galeri">
                                    <i class="fas fa-images me-2"></i><span data-en="Gallery" data-id="Galeri">Galeri</span>
                                </a></li>
                                <li><a class="dropdown-item" href="/#events">
                                    <i class="fas fa-star me-2"></i><span data-en="Event" data-id="Event">Event</span>
                                </a></li>
                                <li><a class="dropdown-item" href="/#social">
                                    <i class="fas fa-heart me-2"></i><span data-en="Social" data-id="Sosial">Sosial</span>
                                </a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#news" title="News">
                                <i class="fas fa-newspaper"></i><span class="nav-text d-lg-none" data-en="News" data-id="News">News</span>
                                <span class="nav-label d-none d-lg-block" data-en="News" data-id="News">News</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#contact" title="Kontak">
                                <i class="fas fa-envelope"></i><span class="nav-text d-lg-none" data-en="Contact" data-id="Kontak">Kontak</span>
                                <span class="nav-label d-none d-lg-block" data-en="Contact" data-id="Kontak">Kontak</span>
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
                        <li class="nav-item">
                            <div class="auth-section">
                                @guest
                                    <a href="{{ route('google.login') }}" class="btn btn-google-minimal">
                                        <i class="fab fa-google"></i>
                                    </a>
                                @else
                                    <div class="dropdown">
                                        <button class="btn btn-profile-minimal dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                            @if(Auth::user()->avatar)
                                                <img src="{{ Auth::user()->avatar }}" alt="Avatar" class="profile-avatar">
                                            @else
                                                <div class="profile-avatar-default">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                            @endif
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{{ route('profile') }}" class="dropdown-item">
                                                    <i class="fas fa-user me-1"></i>
                                                    <span data-en="Profile" data-id="Profil">Profil</span>
                                                </a>
                                            </li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li>
                                                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item">
                                                        <i class="fas fa-sign-out-alt me-1"></i>
                                                        <span data-en="Logout" data-id="Keluar">Keluar</span>
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                @endguest
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="py-4 mt-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="footer-logo d-flex align-items-center mb-3">
                        <div class="logo-icon me-3">
                            <img src="{{ asset('images/logo-apgi.png') }}" alt="Logo APGI - Asosiasi Pengusaha Gula Indonesia" class="logo-image">
                        </div>
                        <div class="brand-text">
                            <h5 class="brand-title mb-0" style="font-size: 20px;">APGI</h5>
                            <small class="brand-subtitle">Asosiasi Pengusaha Gula Indonesia</small>
                        </div>
                    </div>
                    
                    <p class="text-muted mb-3" data-en="Professional organization for sugar entrepreneurs in Indonesia since 2001. Building sustainable and competitive national sugar industry." data-id="Organisasi profesional pengusaha gula di Indonesia sejak 2001. Membangun industri gula nasional yang berkelanjutan dan berdaya saing.">
                        Organisasi profesional pengusaha gula di Indonesia sejak 2001. Membangun industri gula nasional yang berkelanjutan dan berdaya saing.
                    </p>
              
                    <div class="d-flex gap-2">
                        <a href="{{ config('company.facebook') }}" class="btn btn-outline-success btn-sm rounded-circle" style="width: 35px; height: 35px; display: flex; align-items: center; justify-content: center;">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="{{ config('company.instagram') }}" class="btn btn-outline-success btn-sm rounded-circle" style="width: 35px; height: 35px; display: flex; align-items: center; justify-content: center;">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="{{ config('company.linkedin') }}" class="btn btn-outline-success btn-sm rounded-circle" style="width: 35px; height: 35px; display: flex; align-items: center; justify-content: center;">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="{{ config('company.twitter') }}" class="btn btn-outline-success btn-sm rounded-circle" style="width: 35px; height: 35px; display: flex; align-items: center; justify-content: center;">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6">
                    <div class="footer-section">
                        <h6 data-en="Main Menu" data-id="Menu Utama">Menu Utama</h6>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="/#home" class="footer-link" data-en="Home" data-id="Beranda">Beranda</a></li>
                            <li class="mb-2"><a href="/#about" class="footer-link" data-en="About" data-id="Tentang">Tentang</a></li>
                            <li class="mb-2"><a href="/#member" class="footer-link" data-en="Members" data-id="Anggota">Anggota</a></li>
                            <li class="mb-2"><a href="/#struktur" class="footer-link" data-en="Structure" data-id="Struktur">Struktur</a></li>
                            <li class="mb-2"><a href="/#contact" class="footer-link" data-en="Contact" data-id="Kontak">Kontak</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6">
                    <div class="footer-section">
                        <h6 data-en="Activities" data-id="Kegiatan">Kegiatan</h6>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="/#galeri" class="footer-link" data-en="Gallery" data-id="Galeri">Galeri</a></li>
                            <li class="mb-2"><a href="#" class="footer-link" data-en="Event" data-id="Event">Event</a></li>
                            <li class="mb-2"><a href="#" class="footer-link" data-en="Social" data-id="Sosial">Sosial</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-3">
                    <div class="footer-section">
                        <h6 data-en="Contact & Location" data-id="Kontak & Lokasi">Kontak & Lokasi</h6>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span data-en="Jl. Tanjung Batu No.38-54, Perak Barat, Krembangan, Surabaya, East Java (60177)" data-id="Jl. Tanjung Batu No.38-54, Perak Barat, Kecamatan Krembangan, Kota Surabaya, Jawa Timur (60177)">Jl. Tanjung Batu No.38-54, Perak Barat, Kecamatan Krembangan, Kota Surabaya, Jawa Timur (60177)</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <span>+62 317490000</span>
                        </div>
                        <div class="contact-item mb-3">
                            <i class="fas fa-envelope"></i>
                            <span>sekretariat@pengusahagulaindonesia.com</span>
                        </div>
                        
                        <div class="map-container mt-3" style="height: 150px; border-radius: 8px; overflow: hidden;" onclick="window.open('https://maps.google.com/?q=Jl.+Tanjung+Batu+No.38-54+Perak+Barat+Krembangan+Surabaya+Jawa+Timur+60177', '_blank')">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5234567890!2d112.7234567!3d-7.2345678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbc123456789%3A0x123456789abcdef!2sJl.+Tanjung+Batu+No.38-54%2C+Perak+Barat%2C+Krembangan%2C+Surabaya%2C+Jawa+Timur+60177!5e0!3m2!1sen!2sid!4v1639123456789!5m2!1sen!2sid" 
                                width="100%" 
                                height="100%" 
                                style="border:0; pointer-events: none;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
            
            <hr class="my-3" style="border-color: rgba(46, 125, 50, 0.2);">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <p class="text-muted mb-0" data-en="&copy; 2025 APGI - Indonesian Sugar Entrepreneurs Association. All rights reserved. | Developed by CaeCode" data-id="&copy; 2025 APGI - Asosiasi Pengusaha Gula Indonesia. Semua hak dilindungi. | Developed by CaeCode">
                    </p>
                </div>
                <div class="col-md-4 text-md-end">
                    <a href="/privacy-policy" class="footer-link me-3" data-en="Privacy Policy" data-id="Kebijakan Privasi">Kebijakan Privasi</a>
                    <a href="/terms-of-service" class="footer-link" data-en="Terms & Conditions" data-id="Syarat & Ketentuan">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Splash Logo Loading Handler
        document.addEventListener('DOMContentLoaded', function() {
            const splashLogo = document.querySelector('.splash-logo');
            const splashLogoImg = document.querySelector('.splash-logo-img');
            
            if (splashLogoImg) {
                // Function to start animation
                function startLogoAnimation() {
                    splashLogoImg.classList.add('loaded');
                    setTimeout(() => {
                        splashLogo.classList.add('loaded');
                    }, 100);
                }
                
                // Check if image is already loaded
                if (splashLogoImg.complete && splashLogoImg.naturalHeight !== 0) {
                    startLogoAnimation();
                } else {
                    // Wait for image to load
                    splashLogoImg.addEventListener('load', startLogoAnimation);
                    splashLogoImg.addEventListener('error', function() {
                        // Even if image fails to load, start animation to prevent endless waiting
                        startLogoAnimation();
                    });
                }
            }
        });

        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });


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


        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });


        const currentLocation = window.location.pathname;
        const currentHash = window.location.hash;
        const navLinks = document.querySelectorAll('.nav-link');
        
        navLinks.forEach(link => {
            link.classList.remove('active');

            if (currentLocation === '/' && link.getAttribute('href') === '/' + currentHash) {
                link.classList.add('active');
            }

            else if (currentLocation === '/' && !currentHash && link.getAttribute('href') === '/#home') {
                link.classList.add('active');
            }
        });


        document.querySelectorAll('a[href^="/#"], a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const href = this.getAttribute('href');
                let targetId = href.includes('/#') ? href.split('/#')[1] : href.split('#')[1];
                

                if (window.location.pathname === '/') {
                    const target = document.getElementById(targetId);
                    if (target) {

                        document.querySelectorAll('.nav-link').forEach(link => {
                            link.classList.remove('active');
                        });
                        this.classList.add('active');
                        

                        const header = document.querySelector('header');
                        const headerHeight = header ? header.offsetHeight : 80;
                        const targetPosition = target.offsetTop - headerHeight - 20; 
                        

                        window.scrollTo({
                            top: Math.max(0, targetPosition),
                            behavior: 'smooth'
                        });
                        

                        history.pushState(null, null, '#' + targetId);
                    }
                } else {

                    window.location.href = href;
                }
            });
        });


        function updateActiveNavOnScroll() {
            if (window.location.pathname !== '/') return;
            
            const sections = ['home', 'about', 'member', 'struktur', 'galeri', 'events', 'social', 'news', 'contact'];
            let currentSection = 'home';
            

            const header = document.querySelector('header');
            const headerHeight = header ? header.offsetHeight : 80;
            const offset = headerHeight + 50; 
            
            sections.forEach(sectionId => {
                const section = document.getElementById(sectionId);
                if (section) {
                    const rect = section.getBoundingClientRect();

                    if (rect.top <= offset && rect.bottom >= offset) {
                        currentSection = sectionId;
                    }
                }
            });
            

            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
            });
            

            document.querySelectorAll('.dropdown-item').forEach(item => {
                item.classList.remove('active');
            });


            if (currentSection === 'member' || currentSection === 'struktur') {
                const organisasiLink = document.querySelector('.dropdown-toggle[title="Organisasi"]');
                if (organisasiLink) {
                    organisasiLink.classList.add('active');
                }
            } else if (currentSection === 'galeri' || currentSection === 'events' || currentSection === 'social') {
                // Set Kegiatan nav sebagai active untuk sub-sections
                const kegiatanLink = document.querySelector('.dropdown-toggle[title="Kegiatan"]');
                if (kegiatanLink) {
                    kegiatanLink.classList.add('active');
                }
            } else {

                const targetLink = document.querySelector(`a.nav-link[href="/#${currentSection}"]`);
                if (targetLink) {
                    targetLink.classList.add('active');
                }
            }
        }


        let scrollTimeout;
        window.addEventListener('scroll', () => {
            if (scrollTimeout) clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(updateActiveNavOnScroll, 100);
        });


        document.querySelectorAll('.feature-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });


        document.querySelectorAll('img').forEach(img => {
            img.addEventListener('load', function() {
                this.style.opacity = '1';
                this.style.transform = 'scale(1)';
            });
        });


        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                // Jangan tutup navbar jika ini adalah dropdown toggle
                if (this.classList.contains('dropdown-toggle')) {
                    e.stopPropagation();
                    return;
                }
                
                const navbarCollapse = document.querySelector('.navbar-collapse');
                if (navbarCollapse.classList.contains('show')) {
                    const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                    bsCollapse.hide();
                }
            });
        });

        // Handle dropdown behavior di mobile
        document.addEventListener('DOMContentLoaded', function() {
            // Hanya tutup navbar saat dropdown item di klik, bukan dropdown toggle
            document.querySelectorAll('.dropdown-item').forEach(item => {
                item.addEventListener('click', function() {
                    const navbarCollapse = document.querySelector('.navbar-collapse');
                    if (navbarCollapse.classList.contains('show')) {
                        const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                        bsCollapse.hide();
                    }
                });
            });

            // Prevent navbar collapse saat klik dropdown toggle di mobile
            document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
                toggle.addEventListener('click', function(e) {
                    // Hanya untuk mobile (screen width < 992px)
                    if (window.innerWidth < 992) {
                        e.stopPropagation();
                        
                        // Toggle dropdown secara manual untuk mobile
                        const dropdownMenu = this.nextElementSibling;
                        if (dropdownMenu && dropdownMenu.classList.contains('dropdown-menu')) {
                            const isShowing = dropdownMenu.classList.contains('show');
                            
                            // Tutup semua dropdown lain
                            document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                                menu.classList.remove('show');
                            });
                            
                            // Toggle dropdown yang diklik
                            if (!isShowing) {
                                dropdownMenu.classList.add('show');
                            }
                        }
                    }
                });
            });

            // Tutup dropdown saat klik di luar area dropdown di mobile
            document.addEventListener('click', function(e) {
                if (window.innerWidth < 992) {
                    if (!e.target.closest('.dropdown')) {
                        document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                            menu.classList.remove('show');
                        });
                    }
                }
            });

            // Android specific fixes
            const isAndroid = /Android/i.test(navigator.userAgent);
            if (isAndroid) {
                // Tambahan delay untuk Android touch events
                document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
                    let touchStartTime;
                    
                    toggle.addEventListener('touchstart', function() {
                        touchStartTime = Date.now();
                    });
                    
                    toggle.addEventListener('touchend', function(e) {
                        const touchDuration = Date.now() - touchStartTime;
                        
                        // Hanya proses jika touch duration wajar (bukan swipe)
                        if (touchDuration < 300) {
                            e.preventDefault();
                            e.stopPropagation();
                            
                            setTimeout(() => {
                                this.click();
                            }, 50);
                        }
                    });
                });
                
                // Prevent double tap zoom pada dropdown items
                document.querySelectorAll('.dropdown-item').forEach(item => {
                    item.addEventListener('touchend', function(e) {
                        e.preventDefault();
                        setTimeout(() => {
                            this.click();
                        }, 50);
                    });
                });
            }
        });


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


        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const heroSection = document.querySelector('.hero-section');
            if (heroSection) {
                const rate = scrolled * -0.5;
                heroSection.style.transform = `translateY(${rate}px)`;
            }
        });




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


        function initSearch() {
            const searchInput = document.querySelector('#search-input');
            if (searchInput) {
                searchInput.addEventListener('input', function(e) {
                    const query = e.target.value.toLowerCase();

                });
            }
        }


        document.addEventListener('DOMContentLoaded', function() {
            initSearch();
            

            const cursor = document.createElement('div');
            cursor.className = 'custom-cursor';
            document.body.appendChild(cursor);
            
            document.addEventListener('mousemove', function(e) {
                cursor.style.left = e.clientX + 'px';
                cursor.style.top = e.clientY + 'px';
            });
            

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


        const style = document.createElement('style');
        style.textContent = `
            .language-toggle, .auth-section {
                padding: 8px 16px;
            }
            
            .language-toggle .btn, .auth-section .btn {
                font-size: 0.85rem;
                padding: 6px 12px;
                border-radius: 20px;
                transition: all 0.3s ease;
            }
            
            .language-toggle .btn:hover, .auth-section .btn:hover {
                transform: translateY(-1px);
                box-shadow: 0 4px 12px rgba(46, 125, 50, 0.3);
            }
            
            .auth-section .dropdown-menu {
                border-radius: 12px;
                border: none;
                box-shadow: 0 8px 25px rgba(0,0,0,0.15);
                padding: 8px 0;
            }
            
            .auth-section .dropdown-item {
                padding: 8px 16px;
                transition: all 0.2s ease;
            }
            
            .auth-section .dropdown-item:hover {
                background-color: var(--light-green);
                color: var(--primary-color);
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
            
            /* Mobile touch improvements */
            @media (max-width: 991px) {
                .navbar-nav .nav-link {
                    padding: 15px 20px;
                    border-bottom: 1px solid rgba(0,0,0,0.05);
                    -webkit-tap-highlight-color: transparent;
                    touch-action: manipulation;
                }
                
                .navbar-nav .dropdown-toggle {
                    position: relative;
                    -webkit-tap-highlight-color: transparent;
                    touch-action: manipulation;
                }
                
                .navbar-nav .dropdown-toggle::after {
                    position: absolute;
                    right: 20px;
                    top: 50%;
                    transform: translateY(-50%);
                }
                
                .navbar .dropdown-item {
                    -webkit-tap-highlight-color: transparent;
                    touch-action: manipulation;
                    min-height: 44px;
                    display: flex;
                    align-items: center;
                }
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
                
                
                .navbar .dropdown-menu {
                    border: none;
                    box-shadow: none;
                    background-color: rgba(248, 249, 250, 0.95);
                    padding: 8px 0;
                    margin: 8px 0;
                    position: static;
                    border-radius: 8px;
                    backdrop-filter: blur(10px);
                    transform: none;
                    display: none;
                }
                
                .navbar .dropdown-menu.show {
                    display: block;
                    animation: slideDown 0.3s ease;
                }
                
                @keyframes slideDown {
                    from {
                        opacity: 0;
                        transform: translateY(-10px);
                    }
                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }
                
                .navbar .dropdown-item {
                    padding: 12px 24px;
                    color: var(--text-secondary);
                    background: transparent;
                    border-radius: 6px;
                    margin: 2px 8px;
                    transition: all 0.2s ease;
                    font-size: 14px;
                }
                
                .navbar .dropdown-item:hover,
                .navbar .dropdown-item:focus {
                    background-color: var(--primary-color);
                    color: white;
                    transform: translateX(5px);
                }
                
                .navbar .dropdown-item i {
                    width: 16px;
                    margin-right: 8px;
                }
                
                .navbar .dropdown-toggle::after {
                    transition: transform 0.3s ease;
                }
                
                .navbar .dropdown.show .dropdown-toggle::after {
                    transform: rotate(180deg);
                }
                
                .navbar-nav .nav-item .auth-section .btn {
                    font-size: 0.8rem;
                    padding: 4px 8px;
                }
                
                .language-toggle .btn {
                    font-size: 0.8rem;
                    padding: 4px 8px;
                }
                
                
                .map-container {
                    height: 100px !important;
                }
                
                .map-container::after {
                    font-size: 10px;
                    padding: 5px;
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


        let currentLanguage = 'id'; 
        
        function toggleLanguage() {
            currentLanguage = currentLanguage === 'id' ? 'en' : 'id';
            updateLanguage();
            

            localStorage.setItem('apgi-language', currentLanguage);
        }
        
        function updateLanguage() {
            const elements = document.querySelectorAll('[data-en][data-id]');
            const langButton = document.getElementById('lang-text');
            
            elements.forEach(element => {
                if (currentLanguage === 'en') {
                    const englishContent = element.getAttribute('data-en');

                    if (englishContent.includes('<') && englishContent.includes('>')) {
                        element.innerHTML = englishContent;
                    } else {
                        element.textContent = englishContent;
                    }
                } else {
                    const indonesianContent = element.getAttribute('data-id');

                    if (indonesianContent.includes('<') && indonesianContent.includes('>')) {
                        element.innerHTML = indonesianContent;
                    } else {
                        element.textContent = indonesianContent;
                    }
                }
            });
            

            if (langButton) {
                langButton.textContent = currentLanguage === 'id' ? 'EN' : 'ID';
            }
            

            document.documentElement.lang = currentLanguage === 'id' ? 'id' : 'en';
            

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
        

        document.addEventListener('DOMContentLoaded', function() {

            const savedLanguage = localStorage.getItem('apgi-language');
            if (savedLanguage) {
                currentLanguage = savedLanguage;
            }
            updateLanguage();
        });


        window.toggleLanguage = toggleLanguage;


        document.addEventListener('DOMContentLoaded', function() {
            const splashScreen = document.getElementById('splashScreen');
            const minimumDisplayTime = 4000; // Increased to accommodate logo animation
            const startTime = Date.now();
            let logoAnimationCompleted = false;

            // Track logo animation completion
            const splashLogo = document.querySelector('.splash-logo');
            if (splashLogo) {
                splashLogo.addEventListener('animationend', function() {
                    logoAnimationCompleted = true;
                });
            }

            function hideSplashScreen() {
                const elapsedTime = Date.now() - startTime;
                const remainingTime = Math.max(0, minimumDisplayTime - elapsedTime);
                
                // Wait for both minimum time and logo animation to complete
                const checkAndHide = () => {
                    if (logoAnimationCompleted || elapsedTime >= minimumDisplayTime) {
                        splashScreen.classList.add('hidden');
                        document.body.style.overflow = 'auto'; 
                        
                        setTimeout(() => {
                            splashScreen.remove();
                        }, 1200);
                    } else {
                        setTimeout(checkAndHide, 100);
                    }
                };
                
                setTimeout(checkAndHide, remainingTime);
            }

            // Set body overflow hidden initially
            document.body.style.overflow = 'hidden';


            if (document.readyState === 'complete') {
                hideSplashScreen();
            } else {
                window.addEventListener('load', hideSplashScreen);
            }


            updateLanguage();
        });
        

        document.addEventListener('DOMContentLoaded', function() {
            const currentHash = window.location.hash;
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
            const dropdownToggle = document.querySelector('.dropdown-toggle[title="Organisasi"]');
            const kegiatanToggle = document.querySelector('.dropdown-toggle[title="Kegiatan"]');
            

            navLinks.forEach(link => link.classList.remove('active'));
            document.querySelectorAll('.dropdown-item').forEach(item => {
                item.classList.remove('active');
            });
            

            const currentSection = currentHash.replace('#', '');
            if (currentSection === 'member' || currentSection === 'struktur') {

                if (dropdownToggle) {
                    dropdownToggle.classList.add('active');
                }
            } else if (currentSection === 'galeri' || currentSection === 'events' || currentSection === 'social') {
                // Set Kegiatan nav sebagai active untuk sub-sections
                if (kegiatanToggle) {
                    kegiatanToggle.classList.add('active');
                }
            } else if (currentSection) {

                const targetLink = document.querySelector(`a.nav-link[href="/#${currentSection}"]`);
                if (targetLink) {
                    targetLink.classList.add('active');
                }
            } else {

                const homeLink = document.querySelector('a.nav-link[href="/#home"]');
                if (homeLink) {
                    homeLink.classList.add('active');
                }
            }
            

            window.addEventListener('hashchange', function() {
                const newHash = window.location.hash.replace('#', '');
                navLinks.forEach(link => link.classList.remove('active'));
                document.querySelectorAll('.dropdown-item').forEach(item => {
                    item.classList.remove('active');
                });
                
                if (newHash === 'member' || newHash === 'struktur') {
                    if (dropdownToggle) {
                        dropdownToggle.classList.add('active');
                    }
                } else if (newHash === 'galeri' || newHash === 'events' || newHash === 'social') {
                    // Set Kegiatan nav sebagai active untuk sub-sections
                    if (kegiatanToggle) {
                        kegiatanToggle.classList.add('active');
                    }
                } else if (newHash) {
                    const targetLink = document.querySelector(`a.nav-link[href="/#${newHash}"]`);
                    if (targetLink) {
                        targetLink.classList.add('active');
                    }
                } else {
                    const homeLink = document.querySelector('a.nav-link[href="/#home"]');
                    if (homeLink) {
                        homeLink.classList.add('active');
                    }
                }
            });
        });
    </script>
</body>
</html>