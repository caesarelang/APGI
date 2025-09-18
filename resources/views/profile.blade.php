@extends('layouts.app')

@section('title', 'Profile - APGI')

@section('content')
<div class="profile-container">

    <section class="profile-hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="profile-card">
                        <div class="profile-header">
                            <div class="profile-avatar">
                                @if(Auth::user()->avatar)
                                    <img src="{{ Auth::user()->avatar }}" alt="Avatar" class="rounded-circle">
                                @else
                                    <div class="default-avatar">
                                        <i class="fas fa-user-circle"></i>
                                    </div>
                                @endif
                            </div>
                            <div class="profile-info">
                                <h1 class="profile-name">{{ Auth::user()->name }}</h1>
                                <p class="profile-email">{{ Auth::user()->email }}</p>
                                <span class="profile-badge">
                                    <i class="fab fa-google me-1"></i>
                                    <span data-en="Google Account" data-id="Akun Google">Akun Google</span>
                                </span>
                            </div>
                        </div>
                        
                        <div class="profile-details">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-item">
                                        <label data-en="Full Name" data-id="Nama Lengkap">Nama Lengkap</label>
                                        <p>{{ Auth::user()->name }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="detail-item">
                                        <label data-en="Email Address" data-id="Alamat Email">Alamat Email</label>
                                        <p>{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="detail-item">
                                        <label data-en="Account Type" data-id="Tipe Akun">Tipe Akun</label>
                                        <p>
                                            <i class="fab fa-google me-1"></i>
                                            <span data-en="Google OAuth" data-id="Google OAuth">Google OAuth</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="detail-item">
                                        <label data-en="Member Since" data-id="Bergabung Sejak">Bergabung Sejak</label>
                                        <p>{{ Auth::user()->created_at->format('d M Y') }}</p>
                                    </div>
                                </div>
                                @if(Auth::user()->google_id)
                                <div class="col-md-6">
                                    <div class="detail-item">
                                        <label data-en="Google ID" data-id="Google ID">Google ID</label>
                                        <p class="text-muted">{{ Str::limit(Auth::user()->google_id, 20) }}</p>
                                    </div>
                                </div>
                                @endif
                                <div class="col-md-6">
                                    <div class="detail-item">
                                        <label data-en="Last Updated" data-id="Terakhir Diperbarui">Terakhir Diperbarui</label>
                                        <p>{{ Auth::user()->updated_at->format('d M Y H:i') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="profile-actions">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="/" class="btn btn-outline-primary btn-lg w-100">
                                        <i class="fas fa-home me-2"></i>
                                        <span data-en="Back to Home" data-id="Kembali ke Beranda">Kembali ke Beranda</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <form action="{{ route('logout') }}" method="POST" class="d-inline w-100">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-lg w-100">
                                            <i class="fas fa-sign-out-alt me-2"></i>
                                            <span data-en="Logout" data-id="Keluar">Keluar</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <section class="profile-additional py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="info-card">
                        <h3 data-en="About APGI Membership" data-id="Tentang Keanggotaan APGI">Tentang Keanggotaan APGI</h3>
                        <p data-en="As a logged-in member, you have access to exclusive content and updates from APGI (Asosiasi Pengusaha Gula Indonesia). Stay connected with the latest news, events, and industry insights." 
                           data-id="Sebagai anggota yang telah login, Anda memiliki akses ke konten eksklusif dan update dari APGI (Asosiasi Pengusaha Gula Indonesia). Tetap terhubung dengan berita terbaru, acara, dan wawasan industri.">
                           Sebagai anggota yang telah login, Anda memiliki akses ke konten eksklusif dan update dari APGI (Asosiasi Pengusaha Gula Indonesia). Tetap terhubung dengan berita terbaru, acara, dan wawasan industri.
                        </p>
                        
                        <div class="features-grid">
                            <div class="feature-item">
                                <i class="fas fa-newspaper"></i>
                                <h5 data-en="Latest News" data-id="Berita Terbaru">Berita Terbaru</h5>
                                <p data-en="Get the latest updates from sugar industry" data-id="Dapatkan update terbaru dari industri gula">Dapatkan update terbaru dari industri gula</p>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-calendar-alt"></i>
                                <h5 data-en="Events" data-id="Acara">Acara</h5>
                                <p data-en="Join exclusive events and networking" data-id="Ikuti acara eksklusif dan networking">Ikuti acara eksklusif dan networking</p>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-chart-line"></i>
                                <h5 data-en="Market Insights" data-id="Wawasan Pasar">Wawasan Pasar</h5>
                                <p data-en="Access market analysis and trends" data-id="Akses analisis pasar dan tren">Akses analisis pasar dan tren</p>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-users"></i>
                                <h5 data-en="Community" data-id="Komunitas">Komunitas</h5>
                                <p data-en="Connect with other members" data-id="Terhubung dengan anggota lain">Terhubung dengan anggota lain</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
.profile-container {
    min-height: 100vh;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    padding-top: 120px;
}

.profile-hero {
    padding: 2rem 0;
}

.profile-card {
    background: white;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    overflow: hidden;
    margin-bottom: 2rem;
}

.profile-header {
    background: linear-gradient(135deg, var(--primary-color) 0%, #45a049 100%);
    color: white;
    padding: 3rem 2rem 2rem;
    text-align: center;
    position: relative;
}

.profile-avatar {
    margin-bottom: 1.5rem;
}

.profile-avatar img {
    width: 120px;
    height: 120px;
    border: 4px solid white;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
}

.default-avatar {
    width: 120px;
    height: 120px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
}

.default-avatar i {
    font-size: 4rem;
    color: var(--primary-color);
}

.profile-name {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
}

.profile-email {
    font-size: 1.1rem;
    opacity: 0.9;
    margin-bottom: 1rem;
}

.profile-badge {
    background: rgba(255,255,255,0.2);
    padding: 0.5rem 1rem;
    border-radius: 50px;
    font-size: 0.9rem;
    backdrop-filter: blur(10px);
}

.profile-details {
    padding: 2rem;
}

.detail-item {
    margin-bottom: 1.5rem;
}

.detail-item label {
    font-weight: 600;
    color: var(--primary-color);
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 0.5rem;
    display: block;
}

.detail-item p {
    font-size: 1.1rem;
    color: #333;
    margin: 0;
    padding: 0.5rem 0;
    border-bottom: 1px solid #eee;
}

.profile-actions {
    padding: 0 2rem 2rem;
}

.profile-actions .btn {
    border-radius: 50px;
    padding: 0.75rem 1.5rem;
    font-weight: 600;
    transition: all 0.3s ease;
}

.profile-actions .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.profile-additional {
    background: transparent;
}

.info-card {
    background: white;
    border-radius: 20px;
    padding: 2rem;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

.info-card h3 {
    color: var(--primary-color);
    font-weight: 700;
    margin-bottom: 1rem;
    text-align: center;
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-top: 2rem;
}

.feature-item {
    text-align: center;
    padding: 1.5rem;
    border-radius: 15px;
    background: #f8f9fa;
    transition: all 0.3s ease;
}

.feature-item:hover {
    transform: translateY(-5px);
    background: var(--light-green);
}

.feature-item i {
    font-size: 2.5rem;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

.feature-item h5 {
    font-weight: 600;
    margin-bottom: 0.5rem;
    color: var(--primary-color);
}

.feature-item p {
    color: #666;
    font-size: 0.9rem;
    margin: 0;
}

@media (max-width: 768px) {
    .profile-container {
        padding-top: 100px;
    }
    
    .profile-header {
        padding: 2rem 1rem;
    }
    
    .profile-avatar img,
    .default-avatar {
        width: 100px;
        height: 100px;
    }
    
    .default-avatar i {
        font-size: 3rem;
    }
    
    .profile-name {
        font-size: 1.5rem;
    }
    
    .profile-details {
        padding: 1.5rem;
    }
    
    .profile-actions {
        padding: 0 1.5rem 1.5rem;
    }
    
    .features-grid {
        grid-template-columns: 1fr;
    }
}
</style>
@endsection