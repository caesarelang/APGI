@extends('layouts.app')
@section('title', 'Beranda - APGI Asosiasi Pengusaha Gula Indonesia')

@section('meta_description', 'Selamat datang di Asosiasi Pengusaha Gula Indonesia (APGI). Mengembangkan stabilitas perdagangan gula nasional menuju swasembada pangan dengan inovasi dan kualitas terbaik.')

@section('content')
<!-- Hero Section -->
<section id="home" class="hero-section py-5">
    <div class="container">
        <div class="row align-items-center min-vh-75">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1 class="hero-title display-4 fw-bold mb-4">
                        <span class="text-gradient" data-en="Indonesian Sugar Entrepreneurs Association" data-id="Asosiasi Pengusaha Gula Indonesia">Asosiasi Pengusaha Gula Indonesia</span>
                    </h1>
                    <h2 class="hero-subtitle h4 text-muted mb-4" data-en="Developing National Sugar Trade Stability" data-id="Mengembangkan Stabilitas Perdagangan Gula Nasional">
                        Mengembangkan Stabilitas Perdagangan Gula Nasional
                    </h2>
                    <p class="lead mb-5" style="line-height: 1.8; color: #6c757d;" data-en="Providing the latest information and useful resources for the advancement of Indonesia's sugar industry towards food self-sufficiency." data-id="Menyediakan informasi terkini dan sumber daya yang berguna untuk kemajuan industri gula Indonesia menuju swasembada pangan.">
                        Menyediakan informasi terkini dan sumber daya yang berguna untuk kemajuan industri gula Indonesia menuju swasembada pangan.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#about" class="btn btn-gradient btn-lg">
                            <i class="fas fa-arrow-right me-2"></i><span data-en="Learn More" data-id="Pelajari Lebih Lanjut">Pelajari Lebih Lanjut</span>
                        </a>
                        <a href="#member" class="btn btn-outline-success btn-lg">
                            <i class="fas fa-users me-2"></i><span data-en="View Members" data-id="Lihat Anggota">Lihat Anggota</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-image-container text-center">
                    <div class="hero-carousel-container position-relative">
                        <!-- Carousel -->
                        <div class="hero-carousel">
                            <div class="carousel-track">
                                <div class="carousel-slide active">
                                    <img src="{{ asset('images/people/people-1.png') }}" alt="Pieko Njotosetiadi - Ketua Umum APGI" class="img-fluid rounded-4 shadow-lg">
                                </div>
                                <div class="carousel-slide">
                                    <img src="{{ asset('images/people/people-2.png') }}" alt="Dimas Agung Mahendra, S.P. - Humas Dan Kelembagaan APGI" class="img-fluid rounded-4 shadow-lg">
                                </div>
                                <div class="carousel-slide">
                                    <img src="{{ asset('images/people/people-3.png') }}" alt="Teguh Dwi Jadmiko, S.E. - Sekjen APGI" class="img-fluid rounded-4 shadow-lg">
                                </div>
                                <div class="carousel-slide">
                                    <img src="{{ asset('images/people/people-4.png') }}" alt="Sugianto, S.E. - Kabid Kemitraan APGI" class="img-fluid rounded-4 shadow-lg">
                                </div>
                                <div class="carousel-slide">
                                    <img src="{{ asset('images/people/people-5.png') }}" alt="Liem Wan Seng - Kabid Perdagangan Dalam Negeri APGI" class="img-fluid rounded-4 shadow-lg">
                                </div>
                                <div class="carousel-slide">
                                    <img src="{{ asset('images/people/people-6.png') }}" alt="Drs. Chandra Harsono - Ketua Harian APGI" class="img-fluid rounded-4 shadow-lg">
                                </div>
                                <div class="carousel-slide">
                                    <img src="{{ asset('images/people/people-7.png') }}" alt="Drs. Bambang Senggono - Kabid SDM & Hukum APGI" class="img-fluid rounded-4 shadow-lg">
                                </div>
                                <div class="carousel-slide">
                                    <img src="{{ asset('images/people/people-8.png') }}" alt="H. Massat Zakariyah, S.E. - Kabid Pengembangan APGI" class="img-fluid rounded-4 shadow-lg">
                                </div>
                            </div>
                        </div>
                        
                        <!-- Person Info -->
                        <div class="person-info-container">
                            <div class="person-info active" data-slide="0">
                                <h5 class="person-name">Pieko Njotosetiadi</h5>
                                <p class="person-position" data-en="General Chairman of APGI" data-id="Ketua Umum APGI">Ketua Umum APGI</p>
                            </div>
                            <div class="person-info" data-slide="1">
                                <h5 class="person-name">Dimas Agung Mahendra, S.P.</h5>
                                <p class="person-position" data-en="PR and Institutional APGI" data-id="Humas Dan Kelembagaan APGI">Humas Dan Kelembagaan APGI</p>
                            </div>
                            <div class="person-info" data-slide="2">
                                <h5 class="person-name">Teguh Dwi Jadmiko, S.E.</h5>
                                <p class="person-position" data-en="Secretary General APGI" data-id="Sekjen APGI">Sekjen APGI</p>
                            </div>
                            <div class="person-info" data-slide="3">
                                <h5 class="person-name">Sugianto, S.E.</h5>
                                <p class="person-position" data-en="Head of Partnership Division APGI" data-id="Kabid Kemitraan APGI">Kabid Kemitraan APGI</p>
                            </div>
                            <div class="person-info" data-slide="4">
                                <h5 class="person-name">Liem Wan Seng</h5>
                                <p class="person-position" data-en="Head of Domestic Trade Division APGI" data-id="Kabid Perdagangan Dalam Negeri APGI">Kabid Perdagangan Dalam Negeri APGI</p>
                            </div>
                            <div class="person-info" data-slide="5">
                                <h5 class="person-name">Drs. Chandra Harsono</h5>
                                <p class="person-position">Ketua Harian APGI</p>
                            </div>
                            <div class="person-info" data-slide="6">
                                <h5 class="person-name">Drs. Bambang Senggono</h5>
                                <p class="person-position">Kabid SDM & Hukum APGI</p>
                            </div>
                            <div class="person-info" data-slide="7">
                                <h5 class="person-name">H. Massat Zakariyah, S.E.</h5>
                                <p class="person-position">Kabid Pengembangan APGI</p>
                            </div>
                        </div>
                        
                        <!-- Navigation Arrows -->
                        <button class="carousel-btn carousel-btn-prev" onclick="prevSlide()">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="carousel-btn carousel-btn-next" onclick="nextSlide()">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                        
                        <!-- Dots Indicator -->
                        <div class="carousel-dots">
                            <span class="dot active" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                            <span class="dot" onclick="currentSlide(4)"></span>
                            <span class="dot" onclick="currentSlide(5)"></span>
                            <span class="dot" onclick="currentSlide(6)"></span>
                            <span class="dot" onclick="currentSlide(7)"></span>
                            <span class="dot" onclick="currentSlide(8)"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-5">
    <div class="container">
        <!-- Header Section -->
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h3 class="display-6 fw-bold text-gradient mb-4" data-en="About Indonesian Sugar Entrepreneurs Association" data-id="Tentang Asosiasi Pengusaha Gula Indonesia">Tentang Asosiasi Pengusaha Gula Indonesia</h3>
                <p class="lead mb-0" data-en="The Indonesian Sugar Entrepreneurs Association (APGI) is a professional organization that has united business actors in the national sugar trading sector since 2002. We are committed to realizing the stability, sustainability, and welfare of Indonesian and global sugar trade." data-id="Asosiasi Pengusaha Gula Indonesia (APGI) adalah organisasi profesi yang sejak 2002 menyatukan para pelaku usaha di sektor perdagangan gula nasional. Kami berkomitmen mewujudkan stabilitas, keberlanjutan, dan kesejahteraan perdagangan gula Indonesia dan dunia.">
                    Asosiasi Pengusaha Gula Indonesia (APGI) adalah organisasi profesi yang sejak 2002 menyatukan para pelaku usaha di sektor perdagangan gula nasional. Kami berkomitmen mewujudkan stabilitas, keberlanjutan, dan kesejahteraan perdagangan gula Indonesia dan dunia.
                </p>
            </div>
        </div>

        <!-- Sejarah Section -->
        <div class="row mb-5">
            <div class="col-lg-10 mx-auto">
                <div class="about-info-card bg-white rounded-4 shadow p-5">
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center mb-4 mb-md-0">
                            <div class="history-timeline">
                                <div class="timeline-year">
                                    <span class="year-number">2002</span>
                                    <div class="timeline-line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <h4 class="fw-bold text-gradient mb-4">
                                <i class="fas fa-seedling text-success me-3"></i><span data-en="History of APGI Foundation" data-id="Sejarah Berdirinya APGI">Sejarah Berdirinya APGI</span>
                            </h4>
                            <p class="text-muted mb-4" style="line-height: 1.8;">
                                <span data-en="Amid the turmoil of the national sugar industry after its independence from Bulog, Indonesian sugarcane farmers felt adrift. Market uncertainty and unfair business practices became a specter that haunted them. Seeing this condition, <strong class='text-primary'>Pieko Njotosetiadi</strong>, a sugar entrepreneur who cared about the fate of farmers, took the initiative to establish the Indonesian Sugar Farmers Association (APGI) in <strong class='text-success'>2002</strong>." data-id="Di tengah gejolak industri gula nasional pasca lepas dari Bulog, para petani tebu Indonesia merasa terombang-ambing. Ketidakpastian pasar dan praktik bisnis yang tidak adil menjadi momok yang menghantui mereka. Melihat kondisi tersebut, <strong class='text-primary'>Pieko Njotosetiadi</strong>, seorang pengusaha gula yang peduli pada nasib petani, berinisiatif mendirikan Asosiasi Petani Gula Indonesia (APGI) pada tahun <strong class='text-success'>2002</strong>.">
                                    Di tengah gejolak industri gula nasional pasca lepas dari Bulog, para petani tebu Indonesia merasa terombang-ambing. Ketidakpastian pasar dan praktik bisnis yang tidak adil menjadi momok yang menghantui mereka. Melihat kondisi tersebut, <strong class="text-primary">Pieko Njotosetiadi</strong>, seorang pengusaha gula yang peduli pada nasib petani, berinisiatif mendirikan Asosiasi Petani Gula Indonesia (APGI) pada tahun <strong class="text-success">2002</strong>.
                                </span>
                            </p>
                            <p class="text-muted mb-4" style="line-height: 1.8;">
                                <span data-en="APGI emerged as an oasis in the midst of the dry sugar business desert. With a spirit of togetherness, APGI strives to realize farmers' dreams of prosperity and independence." data-id="APGI hadir sebagai oase di tengah gurun bisnis gula yang kering. Dengan semangat kebersamaan, APGI berupaya untuk mewujudkan impian para petani akan kesejahteraan dan kemandirian.">
                                    APGI hadir sebagai oase di tengah gurun bisnis gula yang kering. Dengan semangat kebersamaan, APGI berupaya untuk mewujudkan impian para petani akan kesejahteraan dan kemandirian.
                                </span>
                            </p>
                            <div class="achievement-highlight bg-success bg-opacity-10 rounded-3 p-3">
                                <div class="d-flex align-items-center">
                                    <div class="achievement-icon bg-success bg-opacity-20 rounded-circle p-2 me-3">
                                        <i class="fas fa-users text-success"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 text-success" data-en="Current Achievement" data-id="Pencapaian Saat Ini">Pencapaian Saat Ini</h6>
                                        <p class="mb-0 text-muted small">
                                            <span data-en="APGI has become a home for <strong>60 members</strong> from various sugarcane producing regions in Indonesia" data-id="APGI telah menjadi rumah bagi <strong>60 anggota</strong> dari berbagai daerah penghasil tebu di Indonesia">
                                                APGI telah menjadi rumah bagi <strong>60 anggota</strong> dari berbagai daerah penghasil tebu di Indonesia
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Visi & Misi -->
        <div class="row mb-5">
            <div class="col-lg-6 mb-4">
                <div class="vision-card bg-success bg-opacity-10 rounded-4 p-4 h-100 shadow-sm border border-success border-opacity-20">
                    <div class="text-center mb-3">
                        <div class="vision-icon bg-light rounded-circle p-3 mb-3 mx-auto" style="width: 70px; height: 70px;">
                            <i class="fas fa-eye text-primary" style="font-size: 1.5rem;"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-3" data-en="Vision" data-id="Visi">Visi</h5>
                    </div>
                    <p class="text-muted text-center mb-0" style="line-height: 1.8; font-size: 1.05rem;">
                        <span data-en="To become the <strong>leading organization</strong> in realizing <strong>sustainable stability and welfare</strong> for all sugar industry players in Indonesia" data-id="Menjadi <strong>organisasi terdepan</strong> dalam mewujudkan <strong>stabilitas dan kesejahteraan berkelanjutan</strong> bagi seluruh pelaku industri gula di Indonesia">
                            Menjadi <strong>organisasi terdepan</strong> dalam mewujudkan <strong>stabilitas dan kesejahteraan berkelanjutan</strong> bagi seluruh pelaku industri gula di Indonesia
                        </span>
                    </p>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="mission-card bg-success bg-opacity-10 rounded-4 p-4 h-100 shadow-sm border border-success border-opacity-20">
                    <div class="text-center mb-3">
                        <div class="mission-icon bg-light rounded-circle p-3 mb-3 mx-auto" style="width: 70px; height: 70px;">
                            <i class="fas fa-bullseye text-success" style="font-size: 1.5rem;"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-3" data-en="Mission" data-id="Misi">Misi</h5>
                    </div>
                    <ul class="text-muted mb-0" style="line-height: 1.8; font-size: 0.95rem;">
                        <li class="mb-2">
                            <span data-en="<strong>Strengthen the bargaining position</strong> of sugar traders in national and international markets" data-id="<strong>Memperkuat posisi tawar</strong> pedagang gula dalam pasar nasional dan internasional">
                                <strong>Memperkuat posisi tawar</strong> pedagang gula dalam pasar nasional dan internasional
                            </span>
                        </li>
                        <li class="mb-2">
                            <span data-en="<strong>Ensure stable sugar supply</strong> and affordable for Indonesian consumers" data-id="<strong>Memastikan pasokan gula</strong> yang stabil dan terjangkau bagi konsumen Indonesia">
                                <strong>Memastikan pasokan gula</strong> yang stabil dan terjangkau bagi konsumen Indonesia
                            </span>
                        </li>
                        <li class="mb-2">
                            <span data-en="<strong>Improve the welfare</strong> of sugarcane farmers and all workers in the sugar sector" data-id="<strong>Meningkatkan kesejahteraan</strong> petani tebu dan seluruh pekerja di sektor gula">
                                <strong>Meningkatkan kesejahteraan</strong> petani tebu dan seluruh pekerja di sektor gula
                            </span>
                        </li>
                        <li class="mb-2">
                            <span data-en="<strong>Build strategic partnerships</strong> with government, producers, and consumers" data-id="<strong>Membangun kemitraan strategis</strong> dengan pemerintah, produsen, dan konsumen">
                                <strong>Membangun kemitraan strategis</strong> dengan pemerintah, produsen, dan konsumen
                            </span>
                        </li>
                        <li class="mb-0">
                            <span data-en="<strong>Promote responsible business practices</strong> and sustainable" data-id="<strong>Mendorong praktik bisnis</strong> yang bertanggung jawab dan berkelanjutan">
                                <strong>Mendorong praktik bisnis</strong> yang bertanggung jawab dan berkelanjutan
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Peran APGI -->
        <div class="row">
            <div class="col-12">
                <div class="text-center mb-5">
                    <h4 class="fw-bold text-gradient mb-3" data-en="APGI's Role" data-id="Peran APGI">Peran APGI</h4>
                    <p class="lead text-muted" data-en="Since its inception, APGI has played an active role in various activities to develop the national sugar industry" data-id="Sejak awal berdirinya, APGI berperan aktif dalam berbagai kegiatan untuk mengembangkan industri gula nasional">Sejak awal berdirinya, APGI berperan aktif dalam berbagai kegiatan untuk mengembangkan industri gula nasional</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="role-card text-center p-4 bg-white rounded-3 shadow h-100">
                            <div class="role-icon bg-primary bg-opacity-10 rounded-circle p-3 mb-3 mx-auto" style="width: 70px; height: 70px;">
                                <i class="fas fa-users text-primary"></i>
                            </div>
                            <h6 class="mb-2" data-en="Coordination & Representation Hub" data-id="Wadah Koordinasi & Representasi">Wadah Koordinasi & Representasi</h6>
                            <p class="text-muted small mb-0" data-en="Become a representative voice for Indonesian sugar traders" data-id="Menjadi representasi suara pedagang gula Indonesia">Menjadi representasi suara pedagang gula Indonesia</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="role-card text-center p-4 bg-white rounded-3 shadow h-100">
                            <div class="role-icon bg-success bg-opacity-10 rounded-circle p-3 mb-3 mx-auto" style="width: 70px; height: 70px;">
                                <i class="fas fa-university text-success"></i>
                            </div>
                            <h6 class="mb-2" data-en="Government Liaison" data-id="Penghubung dengan Pemerintah">Penghubung dengan Pemerintah</h6>
                            <p class="text-muted small mb-0" data-en="Policy advocacy that impacts the sugar sector" data-id="Advokasi kebijakan yang berdampak pada sektor pergulaan">Advokasi kebijakan yang berdampak pada sektor pergulaan</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="role-card text-center p-4 bg-white rounded-3 shadow h-100">
                            <div class="role-icon bg-warning bg-opacity-10 rounded-circle p-3 mb-3 mx-auto" style="width: 70px; height: 70px;">
                                <i class="fas fa-balance-scale text-warning"></i>
                            </div>
                            <h6 class="mb-2" data-en="Sugar Trade Controller" data-id="Pengendali Tata Niaga Gula">Pengendali Tata Niaga Gula</h6>
                            <p class="text-muted small mb-0" data-en="Regulate and supervise national sugar trade" data-id="Mengatur dan mengawasi perdagangan gula nasional">Mengatur dan mengawasi perdagangan gula nasional</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="role-card text-center p-4 bg-white rounded-3 shadow h-100">
                            <div class="role-icon bg-info bg-opacity-10 rounded-circle p-3 mb-3 mx-auto" style="width: 70px; height: 70px;">
                                <i class="fas fa-chart-line text-info"></i>
                            </div>
                            <h6 class="mb-2" data-en="Market Stabilization" data-id="Stabilisasi Pasar">Stabilisasi Pasar</h6>
                            <p class="text-muted small mb-0" data-en="Maintain price stability and sugar supply" data-id="Menjaga kestabilan harga dan pasokan gula">Menjaga kestabilan harga dan pasokan gula</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="role-card text-center p-4 bg-white rounded-3 shadow h-100">
                            <div class="role-icon bg-secondary bg-opacity-10 rounded-circle p-3 mb-3 mx-auto" style="width: 70px; height: 70px;">
                                <i class="fas fa-graduation-cap text-secondary"></i>
                            </div>
                            <h6 class="mb-2" data-en="Professionalism Enhancement" data-id="Peningkatan Profesionalisme">Peningkatan Profesionalisme</h6>
                            <p class="text-muted small mb-0" data-en="Develop member capacity and professionalism" data-id="Mengembangkan kapasitas dan profesionalisme anggota">Mengembangkan kapasitas dan profesionalisme anggota</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="role-card text-center p-4 bg-white rounded-3 shadow h-100">
                            <div class="role-icon bg-danger bg-opacity-10 rounded-circle p-3 mb-3 mx-auto" style="width: 70px; height: 70px;">
                                <i class="fas fa-shield-alt text-danger"></i>
                            </div>
                            <h6 class="mb-2" data-en="Member Protection" data-id="Perlindungan Anggota">Perlindungan Anggota</h6>
                            <p class="text-muted small mb-0" data-en="Protect member interests and rights" data-id="Melindungi kepentingan dan hak-hak anggota">Melindungi kepentingan dan hak-hak anggota</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Member Section -->
<section id="member" class="py-5 bg-light">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h3 class="display-6 fw-bold text-gradient mb-3" data-en="APGI Members" data-id="Anggota APGI">Anggota APGI</h3>
                <p class="lead text-muted" data-en="Leading sugar companies that have joined APGI to advance Indonesia's sugar industry" data-id="Perusahaan-perusahaan gula terkemuka yang bergabung dalam APGI untuk memajukan industri gula Indonesia">Perusahaan-perusahaan gula terkemuka yang bergabung dalam APGI untuk memajukan industri gula Indonesia</p>
            </div>
        </div>
        
        <!-- Member Logos Grid -->
        <div class="row g-4 mb-5">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="member-card bg-white rounded-3 shadow p-4 text-center">
                    <div class="member-logo mb-3">
                        <img src="{{ asset('images/members/member-1.png') }}" alt="CV Hasil Karya Wijaya" class="img-fluid member-small-logo">
                    </div>
                    <h6 class="member-name">CV Hasil Karya Wijaya</h6>
                    <p class="text-muted small mb-0" data-en="APGI Member" data-id="Anggota APGI">Anggota APGI</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="member-card bg-white rounded-3 shadow p-4 text-center">
                    <div class="member-logo mb-3">
                        <img src="{{ asset('images/members/member-2.png') }}" alt="PT Fajar Mulia Transindo" class="img-fluid member-small-logo">
                    </div>
                    <h6 class="member-name">PT Fajar Mulia Transindo</h6>
                    <p class="text-muted small mb-0" data-en="APGI Member" data-id="Anggota APGI">Anggota APGI</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="member-card bg-white rounded-3 shadow p-4 text-center">
                    <div class="member-logo mb-3">
                        <img src="{{ asset('images/members/member-3.png') }}" alt="PT Mitra Pangan Nusantara" class="img-fluid member-small-logo">
                    </div>
                    <h6 class="member-name">PT Mitra Pangan Nusantara</h6>
                    <p class="text-muted small mb-0" data-en="APGI Member" data-id="Anggota APGI">Anggota APGI</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="member-card bg-white rounded-3 shadow p-4 text-center">
                    <div class="member-logo mb-3">
                        <img src="{{ asset('images/members/member-4.png') }}" alt="PT Agung Samudra Mulia" class="img-fluid">
                    </div>
                    <h6 class="member-name">PT Agung Samudra Mulia</h6>
                    <p class="text-muted small mb-0" data-en="APGI Member" data-id="Anggota APGI">Anggota APGI</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="member-card bg-white rounded-3 shadow p-4 text-center">
                    <div class="member-logo mb-3">
                        <img src="{{ asset('images/members/member-5.png') }}" alt="PT Citra Gemini Mulya" class="img-fluid">
                    </div>
                    <h6 class="member-name">PT Citra Gemini Mulya</h6>
                    <p class="text-muted small mb-0">Anggota APGI</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="member-card bg-white rounded-3 shadow p-4 text-center">
                    <div class="member-logo mb-3">
                        <img src="{{ asset('images/members/member-6.png') }}" alt="PT Nusantara Putra Mandiri" class="img-fluid">
                    </div>
                    <h6 class="member-name">PT. Nusantara Putra Mandiri</h6>
                    <p class="text-muted small mb-0">Anggota APGI</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="member-card bg-white rounded-3 shadow p-4 text-center">
                    <div class="member-logo mb-3">
                        <img src="{{ asset('images/members/member-7.png') }}" alt="PT Wijaya Tama Langgengperkasa" class="img-fluid">
                    </div>
                    <h6 class="member-name">PT Wijaya Tama Langgengperkasa</h6>
                    <p class="text-muted small mb-0">Anggota APGI</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="member-card bg-white rounded-3 shadow p-4 text-center">
                    <div class="member-logo mb-3">
                        <img src="{{ asset('images/members/member-8.png') }}" alt="PT Inti Kurnia Trading" class="img-fluid member-small-logo">
                    </div>
                    <h6 class="member-name">PT Inti Kurnia Trading</h6>
                    <p class="text-muted small mb-0">Anggota APGI</p>
                </div>
            </div>
        </div>
        
        <!-- Show All Members Button -->
        <div class="row">
            <div class="col-12 text-center mb-4">
                <button class="btn btn-outline-success btn-lg" onclick="showAllMembers()">
                    <i class="fas fa-list me-2"></i><span data-en="View All Members (43 Members)" data-id="Lihat Semua Anggota (43 Member)">Lihat Semua Anggota (43 Member)</span>
                </button>
            </div>
        </div>
        
        <!-- Member Statistics -->
        <div class="row text-center">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="stat-card">
                    <div class="stat-icon mb-3">
                        <i class="fas fa-users text-primary"></i>
                    </div>
                    <h3 class="stat-number text-primary">43</h3>
                    <p class="stat-label text-muted" data-en="Total Members" data-id="Total Anggota">Total Anggota</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="stat-card">
                    <div class="stat-icon mb-3">
                        <i class="fas fa-industry text-primary"></i>
                    </div>
                    <h3 class="stat-number text-primary">30+</h3>
                    <p class="stat-label text-muted" data-en="Active Companies" data-id="Perusahaan Aktif">Perusahaan Aktif</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="stat-card">
                    <div class="stat-icon mb-3">
                        <i class="fas fa-map-marker-alt text-primary"></i>
                    </div>
                    <h3 class="stat-number text-primary">15+</h3>
                    <p class="stat-label text-muted" data-en="Provinces" data-id="Provinsi">Provinsi</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="stat-card">
                    <div class="stat-icon mb-3">
                        <i class="fas fa-calendar-check text-primary"></i>
                    </div>
                    <h3 class="stat-number text-primary">25+</h3>
                    <p class="stat-label text-muted" data-en="Years of Experience" data-id="Tahun Pengalaman">Tahun Pengalaman</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Struktur Section -->
<section id="struktur" class="py-5">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h3 class="display-6 fw-bold text-gradient mb-3" data-en="Organizational Structure" data-id="Struktur Organisasi">Struktur Organisasi</h3>
                <p class="lead text-muted" data-en="Solid and experienced APGI leadership structure in Indonesia's sugar industry" data-id="Struktur kepengurusan APGI yang solid dan berpengalaman dalam industri gula Indonesia">Struktur kepengurusan APGI yang solid dan berpengalaman dalam industri gula Indonesia</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="struktur-chart bg-white rounded-3 shadow p-5">
                    <!-- Organizational Tree Structure -->
                    <div class="org-chart">
                        <!-- Level 1: Ketua Umum -->
                        <div class="text-center mb-4">
                            <div class="org-box ketua-umum mx-auto">
                                <strong class="text-primary" data-en="General Chairman" data-id="Ketua Umum">Ketua Umum</strong>
                                <div class="fw-bold">Pieko Njotosetiadi</div>
                            </div>
                            <div class="org-line-down"></div>
                        </div>
                        
                        <!-- Level 2: Wakil Ketua Umum -->
                        <div class="text-center mb-4">
                            <div class="org-box wakil-ketua mx-auto">
                                <strong class="text-primary" data-en="Vice General Chairman" data-id="Wakil Ketua Umum">Wakil Ketua Umum</strong>
                                <div class="fw-medium">Vinsen Njotosetiadi</div>
                            </div>
                            <div class="org-line-down"></div>
                            <div class="org-branch-horizontal"></div>
                        </div>
                        
                        <!-- Level 3: Sekretaris, Bendahara, Ketua Harian -->
                        <div class="row justify-content-center mb-5">
                            <div class="col-lg-4 text-center">
                                <div class="org-box">
                                    <strong class="text-success" data-en="Secretary" data-id="Sekretaris">Sekretaris</strong>
                                    <div class="fw-medium">Teguh Dwi Jadmiko, S.E.</div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center">
                                <div class="org-box">
                                    <strong class="text-success" data-en="Treasurer" data-id="Bendahara">Bendahara</strong>
                                    <div class="fw-medium">Hadi Goenawan</div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center">
                                <div class="org-box">
                                    <strong class="text-success" data-en="Daily Chairman" data-id="Ketua Harian">Ketua Harian</strong>
                                    <div class="fw-medium">Drs. Chandra Harsono</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Kepala Bidang -->
                    <div class="mb-5">
                        <h4 class="text-center text-success mb-4" data-en="Department Heads" data-id="Kepala Bidang">Kepala Bidang</h4>
                        
                        <div class="row g-3 justify-content-center">
                            <!-- Row 1: 3 items -->
                            <div class="col-lg-4 col-md-6">
                                <div class="bidang-card p-3 bg-success bg-opacity-10 rounded text-center">
                                    <strong class="text-success d-block" data-en="Foreign Trade" data-id="Perdagangan Luar Negeri">Perdagangan Luar Negeri</strong>
                                    <span class="fw-medium">B.Sc, Arief Gunawan</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="bidang-card p-3 bg-success bg-opacity-10 rounded text-center">
                                    <strong class="text-success d-block" data-en="Domestic Trade" data-id="Perdagangan Dalam Negeri">Perdagangan Dalam Negeri</strong>
                                    <span class="fw-medium">Liem Wan Seng</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="bidang-card p-3 bg-success bg-opacity-10 rounded text-center">
                                    <strong class="text-success d-block" data-en="Inter-Island Trade" data-id="Perdagangan Antar Pulau">Perdagangan Antar Pulau</strong>
                                    <span class="fw-medium">Alvin Tandiawan</span>
                                </div>
                            </div>
                            
                            <!-- Row 2: 3 items -->
                            <div class="col-lg-4 col-md-6">
                                <div class="bidang-card p-3 bg-success bg-opacity-10 rounded text-center">
                                    <strong class="text-success d-block" data-en="Distribution" data-id="Pendistribusian">Pendistribusian</strong>
                                    <span class="fw-medium">Vivi Soegito, S.E.</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="bidang-card p-3 bg-success bg-opacity-10 rounded text-center">
                                    <strong class="text-success d-block" data-en="Investment" data-id="Investasi">Investasi</strong>
                                    <span class="fw-medium">Hendri Oei</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="bidang-card p-3 bg-success bg-opacity-10 rounded text-center">
                                    <strong class="text-success d-block" data-en="Partnership" data-id="Kemitraan">Kemitraan</strong>
                                    <span class="fw-medium">Sugianto, S.E.</span>
                                </div>
                            </div>
                            
                            <!-- Row 3: 3 items -->
                            <div class="col-lg-4 col-md-6">
                                <div class="bidang-card p-3 bg-success bg-opacity-10 rounded text-center">
                                    <strong class="text-success d-block" data-en="Organization" data-id="Organisasi">Organisasi</strong>
                                    <span class="fw-medium">Willy Fernando Candra</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="bidang-card p-3 bg-success bg-opacity-10 rounded text-center">
                                    <strong class="text-success d-block" data-en="Development" data-id="Pengembangan">Pengembangan</strong>
                                    <span class="fw-medium">H Massat Zakariyah, S.E.</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="bidang-card p-3 bg-success bg-opacity-10 rounded text-center">
                                    <strong class="text-success d-block" data-en="HR & Legal" data-id="SDM & Hukum">SDM & Hukum</strong>
                                    <span class="fw-medium">Drs. Bambang Senggono</span>
                                </div>
                            </div>
                        </div>
                    </div>
                                            <!-- Humas Section -->
                        <div class="text-center mb-3">
                            <h5 class="text-info">Humas & Kelembagaan</h5>
                        </div>
                    <!-- Kelembagaan Level -->
                    <div class="mb-4">
                        <!-- Humas & Kelembagaan - Centered at top -->
                        <div class="text-center mb-4">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="kelembagaan-card p-3 bg-info bg-opacity-10 rounded text-center">
                                        <span class="fw-medium">Dimas Agung Mahendra, S.P.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Dewan Section -->
                        <div class="text-center mb-3">
                            <h5 class="text-info">Dewan</h5>
                        </div>
                        
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="dewan-card p-3 bg-info bg-opacity-10 rounded text-center">
                                    <strong class="text-info d-block mb-2">Dewan Pembina</strong>
                                    <div class="small">
                                        <div class="mb-1">Drs. Fatchuddin</div>
                                        <div class="mb-1">Ir. Adi Prasongko</div>
                                        <div class="mb-1">Ir. Daniyanto</div>
                                        <div class="mb-1">Harijianto</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="dewan-card p-3 bg-info bg-opacity-10 rounded text-center">
                                    <strong class="text-info d-block mb-2">Dewan Penasihat Kehormatan</strong>
                                    <div class="small">
                                        <div class="fw-medium">Irjen. Pol. (P) Drs. H. Mudji Waluyo, S.H., M.M.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Preview Section -->
<section id="galeri" class="py-5 bg-light">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h3 class="display-6 fw-bold text-gradient mb-3" data-en="Activity Gallery" data-id="Galeri Kegiatan">Galeri Kegiatan</h3>
                <p class="lead text-muted" data-en="Documentation of APGI activities and achievements in developing Indonesia's sugar industry" data-id="Dokumentasi kegiatan dan pencapaian APGI dalam mengembangkan industri gula Indonesia">Dokumentasi kegiatan dan pencapaian APGI dalam mengembangkan industri gula Indonesia</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="{{ asset('images/gallery-1.jpg') }}" alt="Seminar dan workshop industri gula APGI untuk peningkatan kualitas dan produktivitas anggota" class="img-fluid rounded-3 shadow">
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="{{ asset('images/gallery-2.jpg') }}" alt="Kunjungan pabrik gula anggota APGI untuk monitoring dan evaluasi produksi industri gula Indonesia" class="img-fluid rounded-3 shadow">
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="{{ asset('images/gallery-3.jpg') }}" alt="Rapat koordinasi APGI dengan stakeholder dan pemerintah untuk pengembangan industri gula nasional" class="img-fluid rounded-3 shadow">
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="{{ asset('images/gallery-4.jpg') }}" alt="Pameran industri gula Indonesia untuk showcase produk dan inovasi teknologi gula terbaru" class="img-fluid rounded-3 shadow">
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="{{ asset('images/gallery-5.jpg') }}" alt="Program pelatihan dan pengembangan SDM industri gula untuk modernisasi teknologi produksi" class="img-fluid rounded-3 shadow">
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="{{ asset('images/gallery-6.jpg') }}" alt="Rapat tahunan anggota APGI untuk evaluasi kinerja dan perencanaan strategis industri gula" class="img-fluid rounded-3 shadow">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h3 class="display-6 fw-bold text-gradient mb-3" data-en="Contact Us" data-id="Hubungi Kami">Hubungi Kami</h3>
                <p class="lead text-muted" data-en="For more information, reach out" data-id="Untuk informasi lebih lanjut, hubungi kami">Untuk informasi lebih lanjut, hubungi kami</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="contact-form-container bg-white rounded-4 shadow p-5">
                    <form id="contactForm" action="mailto:contact@asosiasipengusahagulaindonesia.or.id" method="post" enctype="text/plain">
                        <div class="row g-4">
                            <!-- First Name -->
                            <div class="col-md-6">
                                <label for="firstName" class="form-label fw-medium" data-en="First Name" data-id="Nama Depan">Nama Depan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" id="firstName" name="firstName" required>
                            </div>
                            
                            <!-- Last Name -->
                            <div class="col-md-6">
                                <label for="lastName" class="form-label fw-medium" data-en="Last Name" data-id="Nama Belakang">Nama Belakang <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" id="lastName" name="lastName" required>
                            </div>
                            
                            <!-- Email -->
                            <div class="col-12">
                                <label for="email" class="form-label fw-medium">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control form-control-lg" id="email" name="email" required>
                            </div>
                            
                            <!-- Subject -->
                            <div class="col-12">
                                <label for="subject" class="form-label fw-medium" data-en="Subject" data-id="Subjek">Subjek</label>
                                <input type="text" class="form-control form-control-lg" id="subject" name="subject" data-en="What is this regarding?" data-id="Tentang apa ini?" placeholder="Tentang apa ini?">
                            </div>
                            
                            <!-- Message -->
                            <div class="col-12">
                                <label for="message" class="form-label fw-medium" data-en="Message" data-id="Pesan">Pesan</label>
                                <textarea class="form-control" id="message" name="message" rows="5" data-en="Tell us more about your inquiry..." data-id="Ceritakan lebih lanjut tentang pertanyaan Anda..." placeholder="Ceritakan lebih lanjut tentang pertanyaan Anda..."></textarea>
                            </div>
                            
                            <!-- Submit Button -->
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-gradient btn-lg px-5">
                                    <i class="fas fa-paper-plane me-2"></i><span data-en="Submit" data-id="Kirim">Kirim</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Contact Information -->
        <div class="row mt-5">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="contact-info-card text-center p-4 bg-white rounded-3 shadow">
                    <div class="contact-icon bg-primary bg-opacity-10 rounded-circle p-3 mb-3 mx-auto" style="width: 70px; height: 70px;">
                        <i class="fas fa-envelope text-primary"></i>
                    </div>
                    <h6 class="mb-2">Email</h6>
                    <p class="text-muted mb-0">contact@asosiasipengusahagulaindonesia.or.id</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="contact-info-card text-center p-4 bg-white rounded-3 shadow">
                    <div class="contact-icon bg-success bg-opacity-10 rounded-circle p-3 mb-3 mx-auto" style="width: 70px; height: 70px;">
                        <i class="fas fa-phone text-success"></i>
                    </div>
                    <h6 class="mb-2" data-en="Phone" data-id="Telepon">Telepon</h6>
                    <p class="text-muted mb-0">+62 31-033-011</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="contact-info-card text-center p-4 bg-white rounded-3 shadow">
                    <div class="contact-icon bg-warning bg-opacity-10 rounded-circle p-3 mb-3 mx-auto" style="width: 70px; height: 70px;">
                        <i class="fas fa-map-marker-alt text-warning"></i>
                    </div>
                    <h6 class="mb-2" data-en="Address" data-id="Alamat">Alamat</h6>
                    <p class="text-muted mb-0">Surabaya, Jawa Timur, Indonesia</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Hero Carousel Styles */
.hero-carousel-container {
    max-width: 400px;
    margin: 0 auto;
}

.hero-carousel {
    position: relative;
    overflow: hidden;
    border-radius: 1rem;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

.carousel-track {
    position: relative;
    width: 100%;
    height: 450px;
}

.carousel-slide {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
    z-index: 1;
}

.carousel-slide.active {
    opacity: 1;
    z-index: 2;
}

.carousel-slide img {
    width: 100%;
    height: 450px;
    object-fit: cover;
    display: block;
}

/* Navigation Arrows */
.carousel-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255,255,255,0.9);
    border: none;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    z-index: 10;
}

.carousel-btn:hover {
    background: rgba(255,255,255,1);
    transform: translateY(-50%) scale(1.1);
}

.carousel-btn-prev {
    left: 15px;
}

.carousel-btn-next {
    right: 15px;
}

.carousel-btn i {
    color: #2E7D32;
    font-size: 16px;
}

/* Dots Indicator */
.carousel-dots {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 20px;
}

.dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: rgba(46, 125, 50, 0.3);
    cursor: pointer;
    transition: all 0.3s ease;
}

.dot.active {
    background: #2E7D32;
    transform: scale(1.2);
}

.dot:hover {
    background: #4CAF50;
}

/* Person Info Styles */
.person-info-container {
    margin-top: 25px;
    min-height: 80px;
    text-align: center;
}

.person-info {
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
    position: absolute;
    width: 100%;
    left: 0;
}

.person-info.active {
    opacity: 1;
    position: relative;
}

.person-name {
    font-size: 1.3rem;
    font-weight: 600;
    color: #2E7D32;
    margin-bottom: 8px;
    font-family: 'Playfair Display', serif;
}

.person-position {
    font-size: 1rem;
    color: #6c757d;
    margin-bottom: 0;
    font-weight: 500;
    line-height: 1.4;
}

/* Contact Form Styles */
.contact-form-container {
    border: 1px solid #e9ecef;
}

.contact-form-container .form-control {
    border: 2px solid #e9ecef;
    border-radius: 10px;
    padding: 12px 16px;
    transition: all 0.3s ease;
}

.contact-form-container .form-control:focus {
    border-color: #2E7D32;
    box-shadow: 0 0 0 0.2rem rgba(46, 125, 50, 0.25);
}

.contact-form-container .form-label {
    color: #2E7D32;
    margin-bottom: 8px;
}

.contact-form-container textarea {
    resize: vertical;
    min-height: 120px;
}

.contact-info-card {
    transition: all 0.3s ease;
    height: 100%;
}

.contact-info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
}

.contact-icon {
    transition: transform 0.3s ease;
}

.contact-info-card:hover .contact-icon {
    transform: scale(1.1);
}

.member-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%;
}

.member-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(46, 125, 50, 0.2) !important;
}

.member-logo {
    height: 120px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 15px auto;
    text-align: center;
}

.member-logo img {
    max-height: 100px;
    max-width: 100%;
    width: auto;
    height: auto;
    object-fit: contain;
    filter: grayscale(100%);
    transition: filter 0.3s ease, transform 0.3s ease;
    display: block;
    margin: 0 auto;
}

/* Special styling for smaller logos that need to be 2x bigger */
.member-small-logo {
    max-height: 200px !important;
    transform: scale(1.5) !important;
}

.member-card:hover .member-logo img {
    filter: grayscale(0%);
    transform: scale(1.05);
}

.member-card:hover .member-small-logo {
    filter: grayscale(0%);
    transform: scale(1.6) !important;
}

.member-name {
    font-weight: 600;
    color: var(--text-primary);
    margin-bottom: 5px;
}

.stat-card {
    transition: transform 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-5px);
}

.stat-icon i {
    font-size: 2.5rem;
}

.stat-number {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    font-weight: 700;
}

.gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.gallery-item:hover {
    transform: translateY(-5px);
}

.gallery-item img {
    transition: transform 0.3s ease;
}

.gallery-item:hover img {
    transform: scale(1.05);
}

/* Organizational Chart Styles */
.org-chart {
    position: relative;
}

.org-box {
    background: #f8f9fa;
    border: 2px solid #dee2e6;
    border-radius: 10px;
    padding: 15px;
    margin: 10px auto;
    max-width: 250px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.org-box:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.15);
}

.org-box.ketua-umum {
    background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
    border-color: #2196f3;
    max-width: 300px;
}

.org-box.wakil-ketua {
    background: linear-gradient(135deg, #f3e5f5 0%, #e1bee7 100%);
    border-color: #9c27b0;
    max-width: 280px;
}

.org-line-down {
    width: 2px;
    height: 30px;
    background: #6c757d;
    margin: 0 auto;
}

.org-branch-horizontal {
    width: 200px;
    height: 2px;
    background: #6c757d;
    margin: 0 auto;
    position: relative;
}

.org-branch-horizontal::before,
.org-branch-horizontal::after {
    content: '';
    position: absolute;
    width: 2px;
    height: 30px;
    background: #6c757d;
    top: 0;
}

.org-branch-horizontal::before {
    left: 33.33%;
}

.org-branch-horizontal::after {
    right: 33.33%;
}

.bidang-card, .kelembagaan-card, .dewan-card {
    transition: all 0.3s ease;
    height: 100%;
}

.bidang-card:hover, .kelembagaan-card:hover, .dewan-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}
</style>

<script>
// Hero Carousel Functionality
let currentSlideIndex = 0;
let slides, dots, personInfos, totalSlides;
let autoSlideInterval;

function initializeCarousel() {
    slides = document.querySelectorAll('.carousel-slide');
    dots = document.querySelectorAll('.dot');
    personInfos = document.querySelectorAll('.person-info');
    totalSlides = slides.length;
    
    if (slides.length > 0) {
        // Show first slide initially
        showSlide(0);
    }
}

function showSlide(index) {
    if (!slides || !dots || !personInfos) return;
    
    // Hide all slides and person info
    slides.forEach(slide => {
        slide.classList.remove('active');
    });
    dots.forEach(dot => {
        dot.classList.remove('active');
    });
    personInfos.forEach(info => {
        info.classList.remove('active');
    });
    
    // Show current slide and person info
    if (slides[index] && dots[index] && personInfos[index]) {
        slides[index].classList.add('active');
        dots[index].classList.add('active');
        personInfos[index].classList.add('active');
    }
}

function nextSlide() {
    currentSlideIndex = (currentSlideIndex + 1) % totalSlides;
    showSlide(currentSlideIndex);
    resetAutoSlide();
}

function prevSlide() {
    currentSlideIndex = (currentSlideIndex - 1 + totalSlides) % totalSlides;
    showSlide(currentSlideIndex);
    resetAutoSlide();
}

function currentSlide(index) {
    currentSlideIndex = index - 1;
    showSlide(currentSlideIndex);
    resetAutoSlide();
}

function startAutoSlide() {
    autoSlideInterval = setInterval(nextSlide, 4000); // Change slide every 4 seconds
}

function resetAutoSlide() {
    clearInterval(autoSlideInterval);
    startAutoSlide();
}

// Initialize carousel when page loads
document.addEventListener('DOMContentLoaded', function() {
    // Initialize carousel elements
    initializeCarousel();
    
    // Start auto-slide
    startAutoSlide();
    
    // Pause auto-slide on hover
    const carouselContainer = document.querySelector('.hero-carousel-container');
    if (carouselContainer) {
        carouselContainer.addEventListener('mouseenter', () => clearInterval(autoSlideInterval));
        carouselContainer.addEventListener('mouseleave', startAutoSlide);
    }
});

function loadMoreGallery() {
    // Add functionality to load more gallery items
    alert('Fitur galeri lengkap akan segera hadir!');
}

function showAllMembers() {
    const allMembers = [
        'CV Hasil Karya Wijaya',
        'PT. Putra Benteng Sejahtera',
        'CV Sumber Kencana Abadi',
        'PT Mitra Agro Utama',
        'PT Fajar Mulia Transindo',
        'CV Agro Prima Santoso',
        'CV Anugrah Bersama Cemerlang',
        'PT Berkah Sarana Irjatama',
        'CV Kasih Karunianya',
        'PT Mitra Pangan Nusantara',
        'CV Citra Mulia Abadi',
        'CV Swasembada',
        'PT Agung Samudra Mulia',
        'CV Indika Multi Karya',
        'CV Sentosa',
        'PT Rambi Jaya',
        'PT Citra Gemini Mulya',
        'CV Surya Kencana',
        'PT. Nusantara Putra Mandiri',
        'PT Wijaya Tama Langgengperkasa',
        'CV Manunggal Jaya Abadi',
        'PT Inti Kurnia Trading',
        'PT Pamer',
        'CV Puncak Raya',
        'PT Tiga Bintang Cemerlang',
        'CV Rukun Makmur',
        'CV Tiga Berlian',
        'CV Inti Gula Manias',
        'CV Agro Tani Sejahtera',
        'PT Nusantara Agro Mandiri',
        'PT Setia Mandiri Sentra Makmur',
        'PT Mandiri Berlian Perkasa',
        'PT Berlian Penta Sukses',
        'CV Sri Rejeki',
        'PT Energi Muda Nusantara',
        'PT Cipta Karya Pratama',
        'CV Ardana Sukses Makmur',
        'PT. Berkah Sarana Irjatama',
        'CV Semangat Jaya Makmur',
        'PT. Arthajaya Putra Perdana',
        'CV Sumber Pangan',
        'PT Sumatra Sejahtera',
        'PT Mahakam Lestari Transindo'
    ];
    
    let memberList = '<div class="container"><div class="row">';
    allMembers.forEach((member, index) => {
        memberList += `
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="d-flex align-items-center p-3 bg-light rounded">
                    <i class="fas fa-building text-success me-3"></i>
                    <span class="fw-medium">${member}</span>
                </div>
            </div>
        `;
    });
    memberList += '</div></div>';
    
    // Create modal
    const modal = document.createElement('div');
    modal.innerHTML = `
        <div class="modal fade" id="allMembersModal" tabindex="-1" aria-labelledby="allMembersModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title" id="allMembersModalLabel">
                            <i class="fas fa-users me-2"></i>Semua Anggota APGI (43 Member)
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ${memberList}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    `;
    
    document.body.appendChild(modal);
    
    // Show modal
    const bootstrapModal = new bootstrap.Modal(document.getElementById('allMembersModal'));
    bootstrapModal.show();
    
    // Remove modal from DOM when hidden
    document.getElementById('allMembersModal').addEventListener('hidden.bs.modal', function () {
        modal.remove();
    });
}

// Contact Form Handler
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const email = document.getElementById('email').value;
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;
            
            // Create email content
            const emailSubject = subject || 'Inquiry from APGI Website';
            const emailBody = `
Name: ${firstName} ${lastName}
Email: ${email}
Subject: ${emailSubject}

Message:
${message}

---
Sent from APGI Website Contact Form
            `.trim();
            
            // Create mailto link
            const mailtoLink = `mailto:contact@asosiasipengusahagulaindonesia.or.id?subject=${encodeURIComponent(emailSubject)}&body=${encodeURIComponent(emailBody)}`;
            
            // Open email client
            window.location.href = mailtoLink;
            
            // Show success message
            alert('Thank you for your message! Your email client will open to send the message to APGI.');
            
            // Reset form
            contactForm.reset();
        });
    }
});
</script>

</style>
@endsection