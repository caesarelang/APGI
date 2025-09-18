@extends('layouts.app')
@section('title', 'Beranda - APGI Asosiasi Pengusaha Gula Indonesia')

@section('meta_description', 'Selamat datang di Asosiasi Pengusaha Gula Indonesia (APGI). Mengembangkan stabilitas perdagangan gula nasional menuju swasembada pangan dengan inovasi dan kualitas terbaik.')

@section('content')

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
                        

                        <button class="carousel-btn carousel-btn-prev" onclick="prevSlide()">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="carousel-btn carousel-btn-next" onclick="nextSlide()">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                        

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


<section id="about" class="py-5">
    <div class="container">

        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h3 class="display-6 fw-bold text-gradient mb-4" data-en="About Indonesian Sugar Entrepreneurs Association" data-id="Tentang Asosiasi Pengusaha Gula Indonesia">Tentang Asosiasi Pengusaha Gula Indonesia</h3>
                <p class="lead mb-0" data-en="The Indonesian Sugar Entrepreneurs Association (APGI) is a professional organization that has united business actors in the national sugar trading sector since 2002. We are committed to realizing the stability, sustainability, and welfare of Indonesian and global sugar trade." data-id="Asosiasi Pengusaha Gula Indonesia (APGI) adalah organisasi profesi yang sejak 2002 menyatukan para pelaku usaha di sektor perdagangan gula nasional. Kami berkomitmen mewujudkan stabilitas, keberlanjutan, dan kesejahteraan perdagangan gula Indonesia dan dunia.">
                    Asosiasi Pengusaha Gula Indonesia (APGI) adalah organisasi profesi yang sejak 2002 menyatukan para pelaku usaha di sektor perdagangan gula nasional. Kami berkomitmen mewujudkan stabilitas, keberlanjutan, dan kesejahteraan perdagangan gula Indonesia dan dunia.
                </p>
            </div>
        </div>


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


        <div class="row mb-5">
            <div class="col-lg-6 mb-4">
                <div class="vision-card bg-success bg-opacity-10 rounded-4 p-4 h-100 shadow-sm border border-success border-opacity-20">
                    <div class="text-center mb-3">
                        <div class="vision-icon-modern mb-3 mx-auto">
                            <i class="fas fa-eye"></i>
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
                        <div class="mission-icon-modern mb-3 mx-auto">
                            <i class="fas fa-bullseye"></i>
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


<section id="member" class="py-5 bg-light">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h3 class="display-6 fw-bold text-gradient mb-3" data-en="APGI Members" data-id="Anggota APGI">Anggota APGI</h3>
                <p class="lead text-muted" data-en="Leading sugar companies that have joined APGI to advance Indonesia's sugar industry" data-id="Perusahaan-perusahaan gula terkemuka yang bergabung dalam APGI untuk memajukan industri gula Indonesia">Perusahaan-perusahaan gula terkemuka yang bergabung dalam APGI untuk memajukan industri gula Indonesia</p>
            </div>
        </div>
        

        <div class="row g-4 mb-5">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="member-card member-style-1 bg-white rounded-3 shadow p-4 text-center">
                    <div class="member-logo mb-3">
                        <img src="{{ asset('images/members/member-1.png') }}" alt="CV Hasil Karya Wijaya" class="img-fluid member-small-logo">
                    </div>
                    <h6 class="member-name">CV Hasil Karya Wijaya</h6>
                    <p class="text-muted small mb-0" data-en="APGI Member" data-id="Anggota APGI">Anggota APGI</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="member-card member-style-2 bg-white rounded-3 shadow p-4 text-center">
                    <div class="member-logo mb-3">
                        <img src="{{ asset('images/members/member-2.png') }}" alt="PT Fajar Mulia Transindo" class="img-fluid member-small-logo">
                    </div>
                    <h6 class="member-name">PT Fajar Mulia Transindo</h6>
                    <p class="text-muted small mb-0" data-en="APGI Member" data-id="Anggota APGI">Anggota APGI</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="member-card member-style-3 bg-white rounded-3 shadow p-4 text-center">
                    <div class="member-logo mb-3">
                        <img src="{{ asset('images/members/member-3.png') }}" alt="PT Mitra Pangan Nusantara" class="img-fluid member-small-logo">
                    </div>
                    <h6 class="member-name">PT Mitra Pangan Nusantara</h6>
                    <p class="text-muted small mb-0" data-en="APGI Member" data-id="Anggota APGI">Anggota APGI</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="member-card member-style-4 bg-white rounded-3 shadow p-4 text-center">
                    <div class="member-logo mb-3">
                        <img src="{{ asset('images/members/member-4.png') }}" alt="PT Agung Samudra Mulia" class="img-fluid">
                    </div>
                    <h6 class="member-name">PT Agung Samudra Mulia</h6>
                    <p class="text-muted small mb-0" data-en="APGI Member" data-id="Anggota APGI">Anggota APGI</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="member-card member-style-5 bg-white rounded-3 shadow p-4 text-center">
                    <div class="member-logo mb-3">
                        <img src="{{ asset('images/members/member-5.png') }}" alt="PT Citra Gemini Mulya" class="img-fluid">
                    </div>
                    <h6 class="member-name">PT Citra Gemini Mulya</h6>
                    <p class="text-muted small mb-0" data-en="APGI Member" data-id="Anggota APGI">Anggota APGI</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="member-card member-style-6 bg-white rounded-3 shadow p-4 text-center">
                    <div class="member-logo mb-3">
                        <img src="{{ asset('images/members/member-6.png') }}" alt="PT Nusantara Putra Mandiri" class="img-fluid">
                    </div>
                    <h6 class="member-name">PT. Nusantara Putra Mandiri</h6>
                    <p class="text-muted small mb-0" data-en="APGI Member" data-id="Anggota APGI">Anggota APGI</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="member-card member-style-7 bg-white rounded-3 shadow p-4 text-center">
                    <div class="member-logo mb-3">
                        <img src="{{ asset('images/members/member-7.png') }}" alt="PT Wijaya Tama Langgengperkasa" class="img-fluid">
                    </div>
                    <h6 class="member-name">PT Wijaya Tama Langgengperkasa</h6>
                    <p class="text-muted small mb-0" data-en="APGI Member" data-id="Anggota APGI">Anggota APGI</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="member-card member-style-8 bg-white rounded-3 shadow p-4 text-center">
                    <div class="member-logo mb-3">
                        <img src="{{ asset('images/members/member-8.png') }}" alt="PT Inti Kurnia Trading" class="img-fluid member-small-logo">
                    </div>
                    <h6 class="member-name">PT Inti Kurnia Trading</h6>
                    <p class="text-muted small mb-0" data-en="APGI Member" data-id="Anggota APGI">Anggota APGI</p>
                </div>
            </div>
        </div>
        

        <div class="row">
            <div class="col-12 text-center mb-4">
                <button class="btn btn-minimal-view" onclick="showAllMembers()">
                    <i class="fas fa-users me-2"></i>
                    <span data-en="View All Members" data-id="Lihat Semua Anggota">Lihat Semua Anggota</span>
                    <span class="member-count">(43)</span>
                </button>
            </div>
        </div>
        

        <div class="row text-center">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="stat-card">
                    <div class="stat-icon-modern mb-3">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="stat-number text-success">43</h3>
                    <p class="stat-label text-muted" data-en="Total Members" data-id="Total Anggota">Total Anggota</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="stat-card">
                    <div class="stat-icon-modern mb-3">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3 class="stat-number text-success">30+</h3>
                    <p class="stat-label text-muted" data-en="Active Companies" data-id="Perusahaan Aktif">Perusahaan Aktif</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="stat-card">
                    <div class="stat-icon-modern mb-3">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3 class="stat-number text-success">15+</h3>
                    <p class="stat-label text-muted" data-en="Provinces" data-id="Provinsi">Provinsi</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="stat-card">
                    <div class="stat-icon-modern mb-3">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3 class="stat-number text-success">25+</h3>
                    <p class="stat-label text-muted" data-en="Years of Experience" data-id="Tahun Pengalaman">Tahun Pengalaman</p>
                </div>
            </div>
        </div>
    </div>
</section>


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
                <div class="struktur-chart-modern bg-white rounded-3 shadow-lg p-5">

                    <div class="org-chart-modern">

                        <div class="text-center mb-5">
                            <div class="org-card-modern org-leader">
                                <div class="org-icon">
                                    <i class="fas fa-crown"></i>
                                </div>
                                <div class="org-content">
                                    <h6 class="org-title" data-en="General Chairman" data-id="Ketua Umum">Ketua Umum</h6>
                                    <div class="org-name">Pieko Njotosetiadi</div>
                                </div>
                            </div>
                            <div class="org-connector vertical"></div>
                        </div>
                        

                        <div class="text-center mb-5">
                            <div class="org-card-modern org-vice">
                                <div class="org-icon">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <div class="org-content">
                                    <h6 class="org-title" data-en="Vice General Chairman" data-id="Wakil Ketua Umum">Wakil Ketua Umum</h6>
                                    <div class="org-name">Vinsen Njotosetiadi</div>
                                </div>
                            </div>
                            <div class="org-connector vertical"></div>
                            <div class="org-connector horizontal"></div>
                        </div>
                        

                        <div class="row justify-content-center mb-5">
                            <div class="col-lg-4 text-center mb-3">
                                <div class="org-card-modern org-staff">
                                    <div class="org-icon">
                                        <i class="fas fa-file-alt"></i>
                                    </div>
                                    <div class="org-content">
                                        <h6 class="org-title" data-en="Secretary" data-id="Sekretaris">Sekretaris</h6>
                                        <div class="org-name">Teguh Dwi Jadmiko, S.E.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center mb-3">
                                <div class="org-card-modern org-staff">
                                    <div class="org-icon">
                                        <i class="fas fa-coins"></i>
                                    </div>
                                    <div class="org-content">
                                        <h6 class="org-title" data-en="Treasurer" data-id="Bendahara">Bendahara</h6>
                                        <div class="org-name">Hadi Goenawan</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center mb-3">
                                <div class="org-card-modern org-staff">
                                    <div class="org-icon">
                                        <i class="fas fa-calendar-day"></i>
                                    </div>
                                    <div class="org-content">
                                        <h6 class="org-title" data-en="Daily Chairman" data-id="Ketua Harian">Ketua Harian</h6>
                                        <div class="org-name">Drs. Chandra Harsono</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="mb-5">
                        <div class="section-divider">
                            <h4 class="section-title" data-en="Department Heads" data-id="Kepala Bidang">Kepala Bidang</h4>
                        </div>
                        
                        <div class="row g-4">

                            <div class="col-lg-4 col-md-6">
                                <div class="dept-card">
                                    <div class="dept-icon">
                                        <i class="fas fa-globe-americas"></i>
                                    </div>
                                    <div class="dept-content">
                                        <h6 class="dept-title" data-en="Foreign Trade" data-id="Perdagangan Luar Negeri">Perdagangan Luar Negeri</h6>
                                        <div class="dept-name">B.Sc, Arief Gunawan</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="dept-card">
                                    <div class="dept-icon">
                                        <i class="fas fa-home"></i>
                                    </div>
                                    <div class="dept-content">
                                        <h6 class="dept-title" data-en="Domestic Trade" data-id="Perdagangan Dalam Negeri">Perdagangan Dalam Negeri</h6>
                                        <div class="dept-name">Liem Wan Seng</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="dept-card">
                                    <div class="dept-icon">
                                        <i class="fas fa-ship"></i>
                                    </div>
                                    <div class="dept-content">
                                        <h6 class="dept-title" data-en="Inter-Island Trade" data-id="Perdagangan Antar Pulau">Perdagangan Antar Pulau</h6>
                                        <div class="dept-name">Alvin Tandiawan</div>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="col-lg-4 col-md-6">
                                <div class="dept-card">
                                    <div class="dept-icon">
                                        <i class="fas fa-truck"></i>
                                    </div>
                                    <div class="dept-content">
                                        <h6 class="dept-title" data-en="Distribution" data-id="Pendistribusian">Pendistribusian</h6>
                                        <div class="dept-name">Vivi Soegito, S.E.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="dept-card">
                                    <div class="dept-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div class="dept-content">
                                        <h6 class="dept-title" data-en="Investment" data-id="Investasi">Investasi</h6>
                                        <div class="dept-name">Hendri Oei</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="dept-card">
                                    <div class="dept-icon">
                                        <i class="fas fa-handshake"></i>
                                    </div>
                                    <div class="dept-content">
                                        <h6 class="dept-title" data-en="Partnership" data-id="Kemitraan">Kemitraan</h6>
                                        <div class="dept-name">Sugianto, S.E.</div>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="col-lg-4 col-md-6">
                                <div class="dept-card">
                                    <div class="dept-icon">
                                        <i class="fas fa-sitemap"></i>
                                    </div>
                                    <div class="dept-content">
                                        <h6 class="dept-title" data-en="Organization" data-id="Organisasi">Organisasi</h6>
                                        <div class="dept-name">Willy Fernando Candra</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="dept-card">
                                    <div class="dept-icon">
                                        <i class="fas fa-rocket"></i>
                                    </div>
                                    <div class="dept-content">
                                        <h6 class="dept-title" data-en="Development" data-id="Pengembangan">Pengembangan</h6>
                                        <div class="dept-name">H Massat Zakariyah, S.E.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="dept-card">
                                    <div class="dept-icon">
                                        <i class="fas fa-balance-scale"></i>
                                    </div>
                                    <div class="dept-content">
                                        <h6 class="dept-title" data-en="HR & Legal" data-id="SDM & Hukum">SDM & Hukum</h6>
                                        <div class="dept-name">Drs. Bambang Senggono</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <div class="section-divider">
                            <h4 class="section-title" data-en="Public Relations & Institutional" data-id="Humas & Kelembagaan">Humas & Kelembagaan</h4>
                        </div>
                        
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="humas-card">
                                    <div class="humas-icon">
                                        <i class="fas fa-users-cog"></i>
                                    </div>
                                    <div class="humas-content">
                                        <h6 class="humas-title" data-en="Public Relations & Institutional" data-id="Humas & Kelembagaan">Humas & Kelembagaan</h6>
                                        <div class="humas-name">Dimas Agung Mahendra, S.P.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="mb-4">
                        <div class="section-divider">
                            <h4 class="section-title" data-en="Board" data-id="Dewan">Dewan</h4>
                        </div>
                        
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="dewan-card">
                                    <div class="dewan-icon">
                                        <i class="fas fa-chess-king"></i>
                                    </div>
                                    <div class="dewan-content">
                                        <h6 class="dewan-title" data-en="Advisory Board" data-id="Dewan Pembina">Dewan Pembina</h6>
                                        <div class="dewan-members">
                                            <div class="member-item">Drs. Fatchuddin</div>
                                            <div class="member-item">Ir. Adi Prasongko</div>
                                            <div class="member-item">Ir. Daniyanto</div>
                                            <div class="member-item">Harijianto</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="dewan-card">
                                    <div class="dewan-icon">
                                        <i class="fas fa-crown"></i>
                                    </div>
                                    <div class="dewan-content">
                                        <h6 class="dewan-title" data-en="Honorary Advisory Board" data-id="Dewan Penasihat Kehormatan">Dewan Penasihat Kehormatan</h6>
                                        <div class="dewan-members">
                                            <div class="member-item">Irjen. Pol. (P) Drs. H. Mudji Waluyo, S.H., M.M.</div>
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
    </div>
</section>


<section id="galeri" class="py-5 gallery-section">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h3 class="display-6 fw-bold text-gradient mb-3" data-en="Our Activities" data-id="Kegiatan Kami">Kegiatan Kami</h3>
                <p class="lead text-muted" data-en="Documentation of APGI activities and achievements in developing Indonesia's sugar industry" data-id="Dokumentasi kegiatan dan pencapaian APGI dalam mengembangkan industri gula Indonesia">Dokumentasi kegiatan dan pencapaian APGI dalam mengembangkan industri gula Indonesia</p>
            </div>
        </div>
        
        <div class="gallery-grid">
            <div class="gallery-item-modern featured" data-category="seminar">
                <div class="gallery-overlay">
                    <div class="gallery-content">
                        <div class="gallery-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h5 class="gallery-title" data-en="Industry Seminar" data-id="Seminar Industri">Seminar Industri</h5>
                        <p class="gallery-desc" data-en="Workshop for quality improvement" data-id="Workshop peningkatan kualitas">Workshop peningkatan kualitas</p>
                        <button class="btn btn-gallery-view" onclick="viewGalleryDetails('seminar')">
                            <i class="fas fa-eye me-2"></i><span data-en="View Details" data-id="Lihat Detail">Lihat Detail</span>
                        </button>
                    </div>
                </div>
                <img src="{{ asset('images/gallerys/gallery-1.jpg') }}" alt="Seminar dan workshop industri gula APGI" class="gallery-image">
            </div>
            
            <div class="gallery-item-modern" data-category="factory">
                <div class="gallery-overlay">
                    <div class="gallery-content">
                        <div class="gallery-icon">
                            <i class="fas fa-industry"></i>
                        </div>
                        <h5 class="gallery-title" data-en="Factory Visit" data-id="Kunjungan Pabrik">Kunjungan Pabrik</h5>
                        <p class="gallery-desc" data-en="Production monitoring & evaluation" data-id="Monitoring & evaluasi produksi">Monitoring & evaluasi produksi</p>
                        <button class="btn btn-gallery-view" onclick="viewGalleryDetails('factory')">
                            <i class="fas fa-eye me-2"></i><span data-en="View Details" data-id="Lihat Detail">Lihat Detail</span>
                        </button>
                    </div>
                </div>
                <img src="{{ asset('images/gallerys/gallery-2.jpg') }}" alt="Kunjungan pabrik gula anggota APGI" class="gallery-image">
            </div>
            
            <div class="gallery-item-modern" data-category="meeting">
                <div class="gallery-overlay">
                    <div class="gallery-content">
                        <div class="gallery-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h5 class="gallery-title" data-en="Coordination Meeting" data-id="Rapat Koordinasi">Rapat Koordinasi</h5>
                        <p class="gallery-desc" data-en="Stakeholder collaboration" data-id="Kolaborasi stakeholder">Kolaborasi stakeholder</p>
                        <button class="btn btn-gallery-view" onclick="viewGalleryDetails('meeting')">
                            <i class="fas fa-eye me-2"></i><span data-en="View Details" data-id="Lihat Detail">Lihat Detail</span>
                        </button>
                    </div>
                </div>
                <img src="{{ asset('images/gallerys/gallery-3.jpg') }}" alt="Rapat koordinasi APGI dengan stakeholder" class="gallery-image">
            </div>
            
            <div class="gallery-item-modern" data-category="exhibition">
                <div class="gallery-overlay">
                    <div class="gallery-content">
                        <div class="gallery-icon">
                            <i class="fas fa-store"></i>
                        </div>
                        <h5 class="gallery-title" data-en="Industry Exhibition" data-id="Pameran Industri">Pameran Industri</h5>
                        <p class="gallery-desc" data-en="Product showcase & innovation" data-id="Showcase produk & inovasi">Showcase produk & inovasi</p>
                        <button class="btn btn-gallery-view" onclick="viewGalleryDetails('exhibition')">
                            <i class="fas fa-eye me-2"></i><span data-en="View Details" data-id="Lihat Detail">Lihat Detail</span>
                        </button>
                    </div>
                </div>
                <img src="{{ asset('images/gallerys/gallery-4.jpg') }}" alt="Pameran industri gula Indonesia" class="gallery-image">
            </div>
            
            <div class="gallery-item-modern" data-category="training">
                <div class="gallery-overlay">
                    <div class="gallery-content">
                        <div class="gallery-icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <h5 class="gallery-title" data-en="Training Program" data-id="Program Pelatihan">Program Pelatihan</h5>
                        <p class="gallery-desc" data-en="HR development & modernization" data-id="Pengembangan SDM & modernisasi">Pengembangan SDM & modernisasi</p>
                        <button class="btn btn-gallery-view" onclick="viewGalleryDetails('training')">
                            <i class="fas fa-eye me-2"></i><span data-en="View Details" data-id="Lihat Detail">Lihat Detail</span>
                        </button>
                    </div>
                </div>
                <img src="{{ asset('images/gallerys/gallery-5.jpg') }}" alt="Program pelatihan SDM industri gula" class="gallery-image">
            </div>
            
            <div class="gallery-item-modern" data-category="annual">
                <div class="gallery-overlay">
                    <div class="gallery-content">
                        <div class="gallery-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <h5 class="gallery-title" data-en="Annual Meeting" data-id="Rapat Tahunan">Rapat Tahunan</h5>
                        <p class="gallery-desc" data-en="Performance evaluation & planning" data-id="Evaluasi kinerja & perencanaan">Evaluasi kinerja & perencanaan</p>
                        <button class="btn btn-gallery-view" onclick="viewGalleryDetails('annual')">
                            <i class="fas fa-eye me-2"></i><span data-en="View Details" data-id="Lihat Detail">Lihat Detail</span>
                        </button>
                    </div>
                </div>
                <img src="{{ asset('images/gallerys/gallery-6.jpg') }}" alt="Rapat tahunan anggota APGI" class="gallery-image">
            </div>
        </div>
        

        <div class="gallery-filter text-center mt-5">
            <button class="btn btn-filter active" data-filter="all">
                <i class="fas fa-th me-2"></i><span data-en="All Activities" data-id="Semua Kegiatan">Semua Kegiatan</span>
            </button>
            <button class="btn btn-filter" data-filter="seminar">
                <i class="fas fa-graduation-cap me-2"></i><span data-en="Seminars" data-id="Seminar">Seminar</span>
            </button>
            <button class="btn btn-filter" data-filter="meeting">
                <i class="fas fa-handshake me-2"></i><span data-en="Meetings" data-id="Rapat">Rapat</span>
            </button>
            <button class="btn btn-filter" data-filter="training">
                <i class="fas fa-chalkboard-teacher me-2"></i><span data-en="Training" data-id="Pelatihan">Pelatihan</span>
            </button>
        </div>
    </div>
</section>


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

                            <div class="col-md-6">
                                <label for="firstName" class="form-label fw-medium" data-en="First Name" data-id="Nama Depan">Nama Depan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" id="firstName" name="firstName" required>
                            </div>
                            

                            <div class="col-md-6">
                                <label for="lastName" class="form-label fw-medium" data-en="Last Name" data-id="Nama Belakang">Nama Belakang <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" id="lastName" name="lastName" required>
                            </div>
                            

                            <div class="col-12">
                                <label for="email" class="form-label fw-medium">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control form-control-lg" id="email" name="email" required>
                            </div>
                            

                            <div class="col-12">
                                <label for="subject" class="form-label fw-medium" data-en="Subject" data-id="Subjek">Subjek</label>
                                <input type="text" class="form-control form-control-lg" id="subject" name="subject" data-en="What is this regarding?" data-id="Tentang apa ini?" placeholder="Tentang apa ini?">
                            </div>
                            

                            <div class="col-12">
                                <label for="message" class="form-label fw-medium" data-en="Message" data-id="Pesan">Pesan</label>
                                <textarea class="form-control" id="message" name="message" rows="5" data-en="Tell us more about your inquiry..." data-id="Ceritakan lebih lanjut tentang pertanyaan Anda..." placeholder="Ceritakan lebih lanjut tentang pertanyaan Anda..."></textarea>
                            </div>
                            

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
        

        <div class="row mt-5">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="contact-info-card text-center p-4 bg-white rounded-3 shadow">
                    <div class="contact-icon-modern mb-3 mx-auto">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h6 class="mb-2">Email</h6>
                    <p class="text-muted mb-0">contact@asosiasipengusahagulaindonesia.or.id</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="contact-info-card text-center p-4 bg-white rounded-3 shadow">
                    <div class="contact-icon-modern mb-3 mx-auto">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h6 class="mb-2" data-en="Phone" data-id="Telepon">Telepon</h6>
                    <p class="text-muted mb-0">+62 31-033-011</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="contact-info-card text-center p-4 bg-white rounded-3 shadow">
                    <div class="contact-icon-modern mb-3 mx-auto">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h6 class="mb-2" data-en="Address" data-id="Alamat">Alamat</h6>
                    <p class="text-muted mb-0">Surabaya, Jawa Timur, Indonesia</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>

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
    position: relative;
    overflow: visible;
    transition: all 0.4s ease;
    background: white;
    height: 240px;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
    
    
    clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
    border: none;
    margin: 20px 0;
}

.member-card:hover {
    transform: translateY(-10px) scale(1.05);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.member-logo {
    width: 120px;
    height: 120px;
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(255,255,255,0.9);
    border-radius: 50%;
    padding: 15px;
}

.member-logo img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}

.member-name {
    font-size: 0.9rem;
    font-weight: 600;
    margin-bottom: 5px;
    text-align: center;
    line-height: 1.2;
}

.member-card p {
    font-size: 0.8rem;
    margin: 0;
    text-align: center;
}


.member-style-1 {
    background: linear-gradient(135deg, #4CAF50 0%, #81C784 100%);
    color: white;
}

.member-style-1 .member-logo {
    background: rgba(255,255,255,0.95);
    border: 3px solid rgba(255,255,255,0.8);
}


.member-style-2 {
    background: linear-gradient(135deg, #2196F3 0%, #64B5F6 100%);
    color: white;
}

.member-style-2 .member-logo {
    background: rgba(255,255,255,0.95);
    border: 3px solid rgba(255,255,255,0.8);
}


.member-style-3 {
    background: linear-gradient(135deg, #FF9800 0%, #FFB74D 100%);
    color: white;
}

.member-style-3 .member-logo {
    background: rgba(255,255,255,0.95);
    border: 3px solid rgba(255,255,255,0.8);
}


.member-style-4 {
    background: linear-gradient(135deg, #9C27B0 0%, #BA68C8 100%);
    color: white;
}

.member-style-4 .member-logo {
    background: rgba(255,255,255,0.95);
    border: 3px solid rgba(255,255,255,0.8);
}


.member-style-5 {
    background: linear-gradient(135deg, #00BCD4 0%, #4DD0E1 100%);
    color: white;
}

.member-style-5 .member-logo {
    background: rgba(255,255,255,0.95);
    border: 3px solid rgba(255,255,255,0.8);
}


.member-style-6 {
    background: linear-gradient(135deg, #E91E63 0%, #F06292 100%);
    color: white;
}

.member-style-6 .member-logo {
    background: rgba(255,255,255,0.95);
    border: 3px solid rgba(255,255,255,0.8);
}


.member-style-7 {
    background: linear-gradient(135deg, #3F51B5 0%, #7986CB 100%);
    color: white;
}

.member-style-7 .member-logo {
    background: rgba(255,255,255,0.95);
    border: 3px solid rgba(255,255,255,0.8);
}


.member-style-8 {
    background: linear-gradient(135deg, #FFC107 0%, #FFD54F 100%);
    color: white;
}

.member-style-8 .member-logo {
    background: rgba(255,255,255,0.95);
    border: 3px solid rgba(255,255,255,0.8);
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

.stat-icon-modern {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #2E7D32 0%, #4CAF50 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);
    transition: all 0.3s ease;
}

.stat-icon-modern:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(40, 167, 69, 0.4);
}

.stat-icon-modern i {
    font-size: 2rem;
    color: white;
}

.vision-icon-modern,
.mission-icon-modern {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, #2E7D32 0%, #4CAF50 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);
    transition: all 0.3s ease;
}

.vision-icon-modern:hover,
.mission-icon-modern:hover {
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 6px 20px rgba(40, 167, 69, 0.4);
}

.vision-icon-modern i,
.mission-icon-modern i {
    font-size: 1.8rem;
    color: white;
}


.contact-icon-modern {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, #2E7D32 0%, #4CAF50 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);
    transition: all 0.3s ease;
}

.contact-icon-modern:hover {
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 6px 20px rgba(40, 167, 69, 0.4);
}

.contact-icon-modern i {
    font-size: 1.6rem;
    color: white;
}


.btn-minimal-view {
    background: white;
    border: 2px solid #e8f5e8;
    color: #2E7D32;
    padding: 12px 24px;
    border-radius: 50px;
    font-weight: 500;
    transition: all 0.3s ease;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

.btn-minimal-view:hover {
    background: linear-gradient(135deg, #2E7D32 0%, #4CAF50 100%);
    color: white;
    border-color: transparent;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(46, 125, 50, 0.3);
}

.btn-minimal-view .member-count {
    opacity: 0.7;
    font-size: 0.9em;
}


.member-modal {
    border: none;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0,0,0,0.15);
}

.member-modal .modal-header {
    background: linear-gradient(135deg, #2E7D32 0%, #4CAF50 100%);
    color: white;
    padding: 20px 30px;
    border: none;
}

.modal-title-wrapper {
    display: flex;
    align-items: center;
    gap: 15px;
}

.modal-icon {
    width: 50px;
    height: 50px;
    background: rgba(255,255,255,0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
}

.modal-title {
    margin: 0;
    font-size: 1.5rem;
    font-weight: 600;
}

.modal-subtitle {
    margin: 0;
    font-size: 0.9rem;
    opacity: 0.9;
}

.btn-close-modern {
    background: rgba(255,255,255,0.2);
    border: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 16px;
    transition: all 0.3s ease;
}

.btn-close-modern:hover {
    background: rgba(255,255,255,0.3);
    transform: scale(1.1);
}


.member-card {
    background: white;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: center;
    gap: 15px;
    transition: all 0.3s ease;
    border: 2px solid #f0f0f0;
    height: 100%;
}

.member-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    border-color: #4CAF50;
}

.member-icon {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    color: white;
    flex-shrink: 0;
}

.member-card-pt .member-icon {
    background: linear-gradient(135deg, #1976D2 0%, #2196F3 100%);
}

.member-card-cv .member-icon {
    background: linear-gradient(135deg, #F57C00 0%, #FF9800 100%);
}

.member-info {
    flex: 1;
}

.member-name {
    margin: 0 0 5px 0;
    font-size: 1rem;
    font-weight: 600;
    color: #333;
    line-height: 1.3;
}

.member-type {
    font-size: 0.8rem;
    color: #666;
    font-style: italic;
}


.struktur-chart-modern {
    background: linear-gradient(135deg, #f8f9fa 0%, #e8f5e8 100%);
    border: 1px solid rgba(76, 175, 80, 0.1);
}

.org-chart-modern {
    position: relative;
}

.org-card-modern {
    background: white;
    border-radius: 16px;
    padding: 20px;
    display: flex;
    align-items: center;
    gap: 15px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    border: 2px solid transparent;
    max-width: 320px;
    margin: 0 auto;
}

.org-card-modern:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
}

.org-leader {
    border-color: #FFD700;
    background: linear-gradient(135deg, #fff9e6 0%, #fffacd 100%);
}

.org-leader .org-icon {
    background: linear-gradient(135deg, #FF8F00 0%, #FFA000 100%);
}

.org-vice {
    border-color: #4CAF50;
    background: linear-gradient(135deg, #e8f5e8 0%, #f1f8e9 100%);
}

.org-vice .org-icon {
    background: linear-gradient(135deg, #2E7D32 0%, #4CAF50 100%);
}

.org-staff {
    border-color: #2196F3;
    background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
}

.org-staff .org-icon {
    background: linear-gradient(135deg, #1976D2 0%, #2196F3 100%);
}

.org-icon {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 24px;
    flex-shrink: 0;
}

.org-content {
    flex: 1;
}

.org-title {
    margin: 0 0 5px 0;
    font-size: 1rem;
    font-weight: 600;
    color: #333;
}

.org-name {
    font-size: 0.9rem;
    color: #666;
    font-weight: 500;
}

.org-connector {
    background: linear-gradient(135deg, #2E7D32 0%, #4CAF50 100%);
    margin: 15px auto;
}

.org-connector.vertical {
    width: 4px;
    height: 30px;
}

.org-connector.horizontal {
    width: 200px;
    height: 4px;
    border-radius: 2px;
}


.section-divider {
    text-align: center;
    margin-bottom: 40px;
    position: relative;
}

.section-divider::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    height: 2px;
    background: linear-gradient(90deg, transparent, #4CAF50, transparent);
    z-index: 1;
}

.section-title {
    background: white;
    padding: 0 30px;
    display: inline-block;
    color: #2E7D32;
    font-weight: 600;
    position: relative;
    z-index: 2;
    margin: 0;
}


.dept-card {
    background: white;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: center;
    gap: 15px;
    transition: all 0.3s ease;
    border: 2px solid #f0f0f0;
    height: 100%;
}

.dept-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    border-color: #4CAF50;
}

.dept-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #2E7D32 0%, #4CAF50 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 20px;
    flex-shrink: 0;
}

.dept-content {
    flex: 1;
}

.dept-title {
    margin: 0 0 5px 0;
    font-size: 0.95rem;
    font-weight: 600;
    color: #333;
    line-height: 1.3;
}

.dept-name {
    font-size: 0.85rem;
    color: #666;
    font-weight: 500;
}


.humas-card {
    background: white;
    border-radius: 16px;
    padding: 25px;
    display: flex;
    align-items: center;
    gap: 20px;
    transition: all 0.3s ease;
    border: 2px solid #00BCD4;
    box-shadow: 0 8px 25px rgba(0, 188, 212, 0.1);
}

.humas-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 188, 212, 0.2);
}

.humas-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #00BCD4 0%, #26C6DA 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 24px;
    flex-shrink: 0;
}

.humas-content {
    flex: 1;
    text-align: center;
}

.humas-title {
    margin: 0 0 8px 0;
    font-size: 1.1rem;
    font-weight: 600;
    color: #00BCD4;
}

.humas-name {
    font-size: 1rem;
    color: #333;
    font-weight: 500;
}


.dewan-card {
    background: white;
    border-radius: 16px;
    padding: 25px;
    transition: all 0.3s ease;
    border: 2px solid #673AB7;
    height: 100%;
    box-shadow: 0 8px 25px rgba(103, 58, 183, 0.1);
}

.dewan-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(103, 58, 183, 0.2);
}

.dewan-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #673AB7 0%, #9C27B0 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 20px;
    margin: 0 auto 15px auto;
}

.dewan-content {
    text-align: center;
}

.dewan-title {
    margin: 0 0 15px 0;
    font-size: 1rem;
    font-weight: 600;
    color: #673AB7;
}

.dewan-members {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.member-item {
    background: linear-gradient(135deg, #f3e5f5 0%, #e1bee7 100%);
    padding: 10px 15px;
    border-radius: 8px;
    font-size: 0.85rem;
    color: #333;
    font-weight: 500;
    border-left: 4px solid #673AB7;
}


.gallery-section {
    background: linear-gradient(135deg, #f8f9fa 0%, #e8f5e8 100%);
    position: relative;
    overflow: hidden;
}

.gallery-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="%234CAF50" opacity="0.1"/><circle cx="80" cy="40" r="3" fill="%2332CD32" opacity="0.08"/><circle cx="40" cy="80" r="2" fill="%234CAF50" opacity="0.1"/></svg>');
    pointer-events: none;
}

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
    position: relative;
    z-index: 2;
}

.gallery-item-modern {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    background: white;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.4s ease;
    cursor: pointer;
    height: 300px;
}

.gallery-item-modern.featured {
    grid-column: span 2;
    height: 400px;
}

@media (max-width: 768px) {
    .gallery-item-modern.featured {
        grid-column: span 1;
        height: 300px;
    }
}

.gallery-item-modern:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 20px 50px rgba(0,0,0,0.2);
}

.gallery-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: all 0.4s ease;
}

.gallery-item-modern:hover .gallery-image {
    transform: scale(1.1);
    filter: brightness(0.8);
}

.gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(46, 125, 50, 0.9) 0%, rgba(76, 175, 80, 0.8) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: all 0.4s ease;
    padding: 30px;
}

.gallery-item-modern:hover .gallery-overlay {
    opacity: 1;
}

.gallery-content {
    text-align: center;
    color: white;
    transform: translateY(30px);
    transition: all 0.4s ease;
}

.gallery-item-modern:hover .gallery-content {
    transform: translateY(0);
}

.gallery-icon {
    width: 60px;
    height: 60px;
    background: rgba(255,255,255,0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 15px;
    font-size: 24px;
    backdrop-filter: blur(10px);
}

.gallery-title {
    font-size: 1.4rem;
    font-weight: 600;
    margin-bottom: 10px;
    color: white;
}

.gallery-desc {
    font-size: 0.95rem;
    margin-bottom: 20px;
    opacity: 0.9;
    line-height: 1.4;
}

.btn-gallery-view {
    background: white;
    color: #2E7D32;
    border: none;
    padding: 10px 20px;
    border-radius: 25px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn-gallery-view:hover {
    background: #f0f0f0;
    transform: scale(1.05);
}


.gallery-filter {
    margin-top: 40px;
}

.btn-filter {
    background: white;
    color: #666;
    border: 2px solid #e0e0e0;
    padding: 12px 24px;
    border-radius: 25px;
    margin: 0 8px 8px 0;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn-filter:hover,
.btn-filter.active {
    background: linear-gradient(135deg, #2E7D32 0%, #4CAF50 100%);
    color: white;
    border-color: transparent;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(46, 125, 50, 0.3);
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

let currentSlideIndex = 0;
let slides, dots, personInfos, totalSlides;
let autoSlideInterval;

function initializeCarousel() {
    slides = document.querySelectorAll('.carousel-slide');
    dots = document.querySelectorAll('.dot');
    personInfos = document.querySelectorAll('.person-info');
    totalSlides = slides.length;
    
    if (slides.length > 0) {

        showSlide(0);
    }
}

function showSlide(index) {
    if (!slides || !dots || !personInfos) return;
    

    slides.forEach(slide => {
        slide.classList.remove('active');
    });
    dots.forEach(dot => {
        dot.classList.remove('active');
    });
    personInfos.forEach(info => {
        info.classList.remove('active');
    });
    

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
    autoSlideInterval = setInterval(nextSlide, 10000); 
}

function resetAutoSlide() {
    clearInterval(autoSlideInterval);
    startAutoSlide();
}


document.addEventListener('DOMContentLoaded', function() {

    initializeCarousel();
    

    startAutoSlide();
    

    const carouselContainer = document.querySelector('.hero-carousel-container');
    if (carouselContainer) {
        carouselContainer.addEventListener('mouseenter', () => clearInterval(autoSlideInterval));
        carouselContainer.addEventListener('mouseleave', startAutoSlide);
    }
});

function loadMoreGallery() {

    document.getElementById('galeri').scrollIntoView({ 
        behavior: 'smooth' 
    });
    

    const allFilter = document.querySelector('.btn-filter[data-filter="all"]');
    if (allFilter) {
        allFilter.click();
    }
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
    
    let memberList = '<div class="container-fluid"><div class="row g-3">';
    allMembers.forEach((member, index) => {
        const memberType = member.startsWith('PT') ? 'fas fa-building' : 'fas fa-industry';
        const memberClass = member.startsWith('PT') ? 'member-card-pt' : 'member-card-cv';
        
        memberList += `
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="member-card ${memberClass}">
                    <div class="member-icon">
                        <i class="${memberType}"></i>
                    </div>
                    <div class="member-info">
                        <h6 class="member-name">${member}</h6>
                        <span class="member-type">${member.startsWith('PT') ? 'Perseroan Terbatas' : 'Commanditaire Vennootschap'}</span>
                    </div>
                </div>
            </div>
        `;
    });
    memberList += '</div></div>';
    

    const modal = document.createElement('div');
    modal.innerHTML = `
        <div class="modal fade" id="allMembersModal" tabindex="-1" aria-labelledby="allMembersModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content member-modal">
                    <div class="modal-header">
                        <div class="modal-title-wrapper">
                            <div class="modal-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div>
                                <h5 class="modal-title" id="allMembersModalLabel">Anggota APGI</h5>
                                <p class="modal-subtitle">Total 43 Perusahaan Anggota</p>
                            </div>
                        </div>
                        <button type="button" class="btn-close-modern" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div class="modal-body p-4">
                        ${memberList}
                    </div>
                </div>
            </div>
        </div>
    `;
    
    document.body.appendChild(modal);
    

    const bootstrapModal = new bootstrap.Modal(document.getElementById('allMembersModal'));
    bootstrapModal.show();
    

    document.getElementById('allMembersModal').addEventListener('hidden.bs.modal', function () {
        modal.remove();
    });
}


document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            

            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const email = document.getElementById('email').value;
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;
            

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
            

            const mailtoLink = `mailto:contact@asosiasipengusahagulaindonesia.or.id?subject=${encodeURIComponent(emailSubject)}&body=${encodeURIComponent(emailBody)}`;
            

            window.location.href = mailtoLink;
            

            alert('Thank you for your message! Your email client will open to send the message to APGI.');
            

            contactForm.reset();
        });
    }
});


function viewGalleryDetails(category) {
    const galleryData = {
        'seminar': {
            title: 'Seminar Industri Gula',
            description: 'Workshop dan seminar untuk peningkatan kualitas dan produktivitas anggota APGI.',
            images: ['images/gallerys/gallery-1.jpg'],
            date: '2024'
        },
        'factory': {
            title: 'Kunjungan Pabrik',
            description: 'Monitoring dan evaluasi produksi industri gula Indonesia.',
            images: ['images/gallerys/gallery-2.jpg'],
            date: '2024'
        },
        'meeting': {
            title: 'Rapat Koordinasi',
            description: 'Koordinasi dengan stakeholder dan pemerintah untuk pengembangan industri gula nasional.',
            images: ['images/gallerys/gallery-3.jpg'],
            date: '2024'
        },
        'exhibition': {
            title: 'Pameran Industri',
            description: 'Showcase produk dan inovasi teknologi gula terbaru.',
            images: ['images/gallerys/gallery-4.jpg'],
            date: '2024'
        },
        'training': {
            title: 'Program Pelatihan',
            description: 'Pengembangan SDM industri gula untuk modernisasi teknologi produksi.',
            images: ['images/gallerys/gallery-5.jpg'],
            date: '2024'
        },
        'annual': {
            title: 'Rapat Tahunan',
            description: 'Evaluasi kinerja dan perencanaan strategis industri gula.',
            images: ['images/gallerys/gallery-6.jpg'],
            date: '2024'
        }
    };
    
    const data = galleryData[category];
    if (!data) return;
    

    const modal = document.createElement('div');
    modal.innerHTML = `
        <div class="modal fade" id="galleryDetailModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content gallery-detail-modal">
                    <div class="modal-header">
                        <h5 class="modal-title">${data.title}</h5>
                        <button type="button" class="btn-close-modern" data-bs-dismiss="modal">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="${data.images[0]}" alt="${data.title}" class="img-fluid rounded mb-3">
                        <p class="lead">${data.description}</p>
                        <div class="gallery-meta">
                            <span class="badge bg-success">${data.date}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `;
    
    document.body.appendChild(modal);
    const bootstrapModal = new bootstrap.Modal(document.getElementById('galleryDetailModal'));
    bootstrapModal.show();
    
    document.getElementById('galleryDetailModal').addEventListener('hidden.bs.modal', function () {
        modal.remove();
    });
}


document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.btn-filter');
    const galleryItems = document.querySelectorAll('.gallery-item-modern');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            

            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            

            galleryItems.forEach(item => {
                const category = item.getAttribute('data-category');
                if (filter === 'all' || category === filter) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 100);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
});
</script>

</style>
@endsection