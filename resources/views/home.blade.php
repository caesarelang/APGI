@extends('layouts.app')
@section('title', 'Beranda - APGI Asosiasi Pengusaha Gula Indonesia')

@section('meta_description', 'Selamat datang di Asosiasi Pengusaha Gula Indonesia (APGI). Mengembangkan stabilitas perdagangan gula nasional menuju swasembada pangan dengan inovasi dan kualitas terbaik.')

@section('content')

<section id="home" class="hero-section position-relative overflow-hidden">
    <!-- Background Video -->
    <video id="heroVideo" class="hero-background-video" autoplay muted loop playsinline>
        <source src="{{ asset('videos/intro.mp4') }}" type="video/mp4">
    </video>
    
    <!-- Video Overlay -->
    <div class="hero-overlay"></div>
    
    <!-- Hero Content -->
    <div class="container position-relative">
        <div class="row align-items-center min-vh-100 pt-5">
            <div class="col-12">
                <div class="hero-content text-white mt-5 pt-4 text-center">
                    <div class="hero-badge mb-4">
                        <span class="badge bg-success bg-opacity-90 px-4 py-2 rounded-pill fs-5">
                            <i class="fas fa-leaf me-2"></i>
                            <span data-en="Sugar Industry Leader" data-id="Pemimpin Industri Gula">Pemimpin Industri Gula</span>
                        </span>
                    </div>
                    <h1 class="display-4 fw-bold mb-4 text-shadow-strong">
                        <span data-en="Association of Indonesian Sugar Entrepreneurs" data-id="Asosiasi Pengusaha Gula Indonesia">Asosiasi Pengusaha Gula Indonesia</span>
                    </h1>
                    <h2 class="h3 mb-4 text-shadow fw-bold" data-en="Developing National Sugar Trade Stability" data-id="Mengembangkan Stabilitas Perdagangan Gula Nasional">
                        Mengembangkan Stabilitas Perdagangan Gula Nasional
                    </h2>
                    <p class="lead mb-4 text-shadow" data-en="Providing the latest information and useful resources for the advancement of Indonesia's sugar industry towards food self-sufficiency." data-id="Menyediakan informasi terkini dan sumber daya yang berguna untuk kemajuan industri gula Indonesia menuju swasembada pangan.">
                        Menyediakan informasi terkini dan sumber daya yang berguna untuk kemajuan industri gula Indonesia menuju swasembada pangan.
                    </p>
                    <div class="hero-buttons d-flex flex-wrap gap-3 justify-content-center">
                        <a href="#about" class="btn btn-light btn-lg shadow px-4 py-3">
                            <i class="fas fa-arrow-right me-2"></i><span data-en="Learn More" data-id="Pelajari Lebih Lanjut">Pelajari Lebih Lanjut</span>
                        </a>
                        <a href="#member" class="btn btn-outline-light btn-lg px-4 py-3">
                            <i class="fas fa-users me-2"></i><span data-en="View Members" data-id="Lihat Anggota">Lihat Anggota</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- LEADERSHIP GRID SECTION -->
<section id="leadership" class="py-5 bg-light">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col-12">
                <h3 class="display-6 fw-bold text-gradient mb-3" data-en="Our Leadership" data-id="Kepengurusan Kami">Kepengurusan Kami</h3>
                <p class="lead text-muted" data-en="Meet the dedicated leaders driving Indonesia's sugar industry forward" data-id="Berkenalan dengan para pengurus berdedikasi yang menggerakkan industri gula Indonesia">Berkenalan dengan para pengurus berdedikasi yang menggerakkan industri gula Indonesia</p>
            </div>
        </div>

        <!-- Main Leader (Pieko) - Dominan -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-4 col-md-6">
                <div class="leadership-card-main text-center">
                    <div class="leadership-image-main mb-3">
                        <img src="{{ asset('images/people/pak pieko.png') }}" alt="Pieko Njotosetiadi" class="img-fluid">
                    </div>
                    <h4 class="leadership-name-main fw-bold mb-2">Pieko Njotosetiadi</h4>
                    <p class="leadership-title-main text-success fw-semibold mb-0">Ketua Umum APGI</p>
                </div>
            </div>
        </div>

        <!-- Other Leaders Grid -->
        <div class="row g-4 justify-content-center">
            <!-- Vinsen -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="leadership-card text-center">
                    <div class="leadership-image mb-3">
                        <img src="{{ asset('images/people/placeholder.png') }}" alt="Vinsen Njotosetiadi" class="img-fluid">
                    </div>
                    <h6 class="leadership-name fw-bold mb-1">Vinsen Njotosetiadi</h6>
                    <p class="leadership-title text-muted small mb-0">Wakil Ketua Umum APGI</p>
                </div>
            </div>

            <!-- Chandra -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="leadership-card text-center">
                    <div class="leadership-image mb-3">
                        <img src="{{ asset('images/people/Chandra Harsono.png') }}" alt="Drs. Chandra Harsono" class="img-fluid">
                    </div>
                    <h6 class="leadership-name fw-bold mb-1">Drs. Chandra Harsono</h6>
                    <p class="leadership-title text-muted small mb-0">Dewan Penasihat Kehormatan APGI</p>
                </div>
            </div>

            <!-- Liem Wan Seng -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="leadership-card text-center">
                    <div class="leadership-image mb-3">
                        <img src="{{ asset('images/people/Lim wan seng.png') }}" alt="Liem Wan Seng" class="img-fluid leadership-img-liem">
                    </div>
                    <h6 class="leadership-name fw-bold mb-1">Liem Wan Seng</h6>
                    <p class="leadership-title text-muted small mb-0">Kabid Perdagangan Dalam Negeri APGI</p>
                </div>
            </div>

            <!-- Bambang Senggono -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="leadership-card text-center">
                    <div class="leadership-image mb-3">
                        <img src="{{ asset('images/people/Bambang Senggono.png') }}" alt="Drs. Bambang Senggono" class="img-fluid leadership-img-bambang">
                    </div>
                    <h6 class="leadership-name fw-bold mb-1">Drs. Bambang Senggono</h6>
                    <p class="leadership-title text-muted small mb-0">Kabid SDM & Hukum APGI</p>
                </div>
            </div>

            <!-- Dimas Agung -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="leadership-card text-center">
                    <div class="leadership-image mb-3">
                        <img src="{{ asset('images/people/Dimas Agung.png') }}" alt="Dimas Agung Mahendra" class="img-fluid">
                    </div>
                    <h6 class="leadership-name fw-bold mb-1">Dimas Agung Mahendra, S.P.</h6>
                    <p class="leadership-title text-muted small mb-0">Humas & Kelembagaan APGI</p>
                </div>
            </div>

            <!-- Alvin -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="leadership-card text-center">
                    <div class="leadership-image mb-3">
                        <img src="{{ asset('images/people/Alvin.png') }}" alt="Alvin Tandiawan" class="img-fluid">
                    </div>
                    <h6 class="leadership-name fw-bold mb-1">Alvin Tandiawan</h6>
                    <p class="leadership-title text-muted small mb-0">Kabid Perdagangan Antar Pulau APGI</p>
                </div>
            </div>

            <!-- Hadi Gunawan -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="leadership-card text-center">
                    <div class="leadership-image mb-3">
                        <img src="{{ asset('images/people/Hadi Gunawan.png') }}" alt="Hadi Goenawan" class="img-fluid">
                    </div>
                    <h6 class="leadership-name fw-bold mb-1">Hadi Goenawan</h6>
                    <p class="leadership-title text-muted small mb-0">Bendahara APGI</p>
                </div>
            </div>

            <!-- Hendri Oei -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="leadership-card text-center">
                    <div class="leadership-image mb-3">
                        <img src="{{ asset('images/people/Hendri Oie.png') }}" alt="Hendri Oei" class="img-fluid">
                    </div>
                    <h6 class="leadership-name fw-bold mb-1">Hendri Oei</h6>
                    <p class="leadership-title text-muted small mb-0">Kabid Investasi APGI</p>
                </div>
            </div>

            <!-- Harijianto -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="leadership-card text-center">
                    <div class="leadership-image mb-3">
                        <img src="{{ asset('images/people/Harijanto.png') }}" alt="Harijianto" class="img-fluid">
                    </div>
                    <h6 class="leadership-name fw-bold mb-1">Harijianto</h6>
                    <p class="leadership-title text-muted small mb-0">Dewan Pembina APGI</p>
                </div>
            </div>

            <!-- Drs. Fatchuddin -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="leadership-card text-center">
                    <div class="leadership-image mb-3">
                        <img src="{{ asset('images/people/Fatrudin.png') }}" alt="Drs. Fatchuddin" class="img-fluid">
                    </div>
                    <h6 class="leadership-name fw-bold mb-1">Drs. Fatchuddin</h6>
                    <p class="leadership-title text-muted small mb-0">Dewan Pembina APGI</p>
                </div>
            </div>

            <!-- Lie Kamadjaja -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="leadership-card text-center">
                    <div class="leadership-image mb-3">
                        <img src="{{ asset('images/people/Lie Kamadjaja.png') }}" alt="Lie Kamadjaja" class="img-fluid">
                    </div>
                    <h6 class="leadership-name fw-bold mb-1">Lie Kamadjaja</h6>
                    <p class="leadership-title text-muted small mb-0">Dewan Pembina APGI</p>
                </div>
            </div>

            <!-- Ir. Adi Prasongko -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="leadership-card text-center">
                    <div class="leadership-image mb-3">
                        <img src="{{ asset('images/people/Adi Prasongko.png') }}" alt="Ir. Adi Prasongko" class="img-fluid">
                    </div>
                    <h6 class="leadership-name fw-bold mb-1">Ir. Adi Prasongko</h6>
                    <p class="leadership-title text-muted small mb-0">Dewan Pembina APGI</p>
                </div>
            </div>

            <!-- Irjen Pol Mudji -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="leadership-card text-center">
                    <div class="leadership-image mb-3">
                        <img src="{{ asset('images/people/Irjen pol mudji.png') }}" alt="Irjen. Pol. (P) Drs. H. Mudji Waluyo, S.H., M.M." class="img-fluid">
                    </div>
                    <h6 class="leadership-name fw-bold mb-1">Irjen. Pol. (P) Drs. H. Mudji Waluyo, S.H., M.M.</h6>
                    <p class="leadership-title text-muted small mb-0">Dewan Penasihat Kehormatan APGI</p>
                </div>
            </div>

            <!-- Vivi Soegito -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="leadership-card text-center">
                    <div class="leadership-image mb-3">
                        <img src="{{ asset('images/people/Vivi.png') }}" alt="Vivi Soegito, S.E." class="img-fluid">
                    </div>
                    <h6 class="leadership-name fw-bold mb-1">Vivi Soegito, S.E.</h6>
                    <p class="leadership-title text-muted small mb-0">Kabid Pendistribusian APGI</p>
                </div>
            </div>

            <!-- Willy Fernando Candra -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="leadership-card text-center">
                    <div class="leadership-image mb-3">
                        <img src="{{ asset('images/people/placeholder.png') }}" alt="Willy Fernando Candra" class="img-fluid">
                    </div>
                    <h6 class="leadership-name fw-bold mb-1">Willy Fernando Candra</h6>
                    <p class="leadership-title text-muted small mb-0">Kabid Organisasi APGI</p>
                </div>
            </div>

            <!-- Arief Gunawan -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="leadership-card text-center">
                    <div class="leadership-image mb-3">
                        <img src="{{ asset('images/people/Arief Gunawan.png') }}" alt="B.Sc, Arief Gunawan" class="img-fluid">
                    </div>
                    <h6 class="leadership-name fw-bold mb-1">B.Sc, Arief Gunawan</h6>
                    <p class="leadership-title text-muted small mb-0">Kabid Perdagangan Luar Negeri APGI</p>
                </div>
            </div>

            <!-- H Massat Zakariyah -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="leadership-card text-center">
                    <div class="leadership-image mb-3">
                        <img src="{{ asset('images/people/H masak.png') }}" alt="H Massat Zakariyah, S.E." class="img-fluid">
                    </div>
                    <h6 class="leadership-name fw-bold mb-1">H Massat Zakariyah, S.E.</h6>
                    <p class="leadership-title text-muted small mb-0">Kabid Pengembangan APGI</p>
                </div>
            </div>

            <!-- Teguh Dwi Jadmiko -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="leadership-card text-center">
                    <div class="leadership-image mb-3">
                        <img src="{{ asset('images/people/Teguh.png') }}" alt="Teguh Dwi Jadmiko, S.E." class="img-fluid">
                    </div>
                    <h6 class="leadership-name fw-bold mb-1">Teguh Dwi Jadmiko, S.E.</h6>
                    <p class="leadership-title text-muted small mb-0">Sekretaris APGI</p>
                </div>
            </div>

            <!-- Sugianto -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="leadership-card text-center">
                    <div class="leadership-image mb-3">
                        <img src="{{ asset('images/people/Sugianto.png') }}" alt="Sugianto, S.E." class="img-fluid">
                    </div>
                    <h6 class="leadership-name fw-bold mb-1">Sugianto, S.E.</h6>
                    <p class="leadership-title text-muted small mb-0">Kabid Kemitraan APGI</p>
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
                <p class="lead mb-0" data-en="The Indonesian Sugar Entrepreneurs Association (APGI) is a professional organization that has united business actors in the national sugar trading sector since 2001. We are committed to realizing the stability, sustainability, and welfare of Indonesian and global sugar trade." data-id="Asosiasi Pengusaha Gula Indonesia (APGI) adalah organisasi profesi yang sejak 2001 menyatukan para pelaku usaha di sektor perdagangan gula nasional. Kami berkomitmen mewujudkan stabilitas, keberlanjutan, dan kesejahteraan perdagangan gula Indonesia dan dunia.">
                    Asosiasi Pengusaha Gula Indonesia (APGI) adalah organisasi profesi yang sejak 2001 menyatukan para pelaku usaha di sektor perdagangan gula nasional. Kami berkomitmen mewujudkan stabilitas, keberlanjutan, dan kesejahteraan perdagangan gula Indonesia dan dunia.
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
                                    <span class="year-number">2001</span>
                                    <div class="timeline-line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <h4 class="fw-bold text-gradient mb-4">
                                <i class="fas fa-seedling text-success me-3"></i><span data-en="History of APGI Foundation" data-id="Sejarah Berdirinya APGI">Sejarah Berdirinya APGI</span>
                            </h4>
                            <p class="text-muted mb-4" style="line-height: 1.8;">
                                <span data-en="Amid the turmoil of the national sugar industry, Indonesian sugarcane farmers felt adrift. Market uncertainty and unfair business practices became a specter that haunted them. Seeing this condition, <strong class='text-success'>Pieko Njotosetiadi</strong> along with <strong class='text-success'>Alex Sugiri, Alamsyah, Chandra Harsono, Zaenal Kholik, Samiasih, Hadi Gunawan, Soegiono, Lim Winarto Halim, Hadi Sutanto, and Listyono Sumali</strong>, sugar entrepreneurs who cared about the fate of farmers, took the initiative to establish the Indonesian Sugar Farmers Association (APGI) in <strong class='text-success'>2001</strong>." data-id="Di tengah gejolak industri gula nasional, para petani tebu Indonesia merasa terombang-ambing. Ketidakpastian pasar dan praktik bisnis yang tidak adil menjadi momok yang menghantui mereka. Melihat kondisi tersebut, <strong class='text-success'>Pieko Njotosetiadi</strong> bersama <strong class='text-success'>Alex Sugiri, Alamsyah, Chandra Harsono, Zaenal Kholik, Samiasih, Hadi Gunawan, Soegiono, Lim Winarto Halim, Hadi Sutanto, dan Listyono Sumali</strong>, para pengusaha gula yang peduli pada nasib petani, berinisiatif mendirikan Asosiasi Pengusaha Gula Indonesia (APGI) pada tahun <strong class='text-success'>2001</strong>.">
                                    Di tengah gejolak industri gula nasional, para petani tebu Indonesia merasa terombang-ambing. Ketidakpastian pasar dan praktik bisnis yang tidak adil menjadi momok yang menghantui mereka. Melihat kondisi tersebut, <strong class="text-success">Pieko Njotosetiadi</strong> bersama <strong class="text-success">Alex Sugiri, Alamsyah, Chandra Harsono, Zaenal Kholik, Samiasih, Hadi Gunawan, Soegiono, Lim Winarto Halim, Hadi Sutanto, dan Listyono Sumali</strong>, para pengusaha gula yang peduli pada nasib petani, berinisiatif mendirikan Asosiasi Pengusaha Gula Indonesia (APGI) pada tahun <strong class="text-success">2001</strong>.
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
                                            <span data-en="APGI has become a home for <strong>60+ members </strong> from various sugarcane producing regions in Indonesia" data-id="APGI telah menjadi rumah bagi <strong>60+ anggota </strong> dari berbagai daerah penghasil tebu di Indonesia">
                                                APGI telah menjadi rumah bagi <strong>60+ anggota</strong> dari berbagai daerah penghasil tebu di Indonesia
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
        

        <div class="row g-4 mb-5 justify-content-center">
            <!-- 1. Fajar Mulia -->
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="member-card member-style-2 bg-white rounded-3 shadow p-4 text-center">
                    <div class="member-logo mb-3">
                        <img src="{{ asset('images/members/fajarmulia.png') }}" alt="PT Fajar Mulia Transindo" class="img-fluid member-large-logo">
                    </div>
                    <h6 class="member-name">PT Fajar Mulia Transindo</h6>
                    <p class="text-muted small mb-0" data-en="APGI Member" data-id="Anggota APGI">Anggota APGI</p>
                </div>
            </div>
            
            <!-- 2. CGM -->
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="member-card member-style-4 bg-white rounded-3 shadow p-4 text-center">
                    <div class="member-logo mb-3">
                        <img src="{{ asset('images/members/cgm.png') }}" alt="PT Citra Gemini Mulya" class="img-fluid member-small-logo">
                    </div>
                    <h6 class="member-name">PT Citra Gemini Mulya</h6>
                    <p class="text-muted small mb-0" data-en="APGI Member" data-id="Anggota APGI">Anggota APGI</p>
                </div>
            </div>
            
            <!-- 3. Nusantara Agro Mandiri -->
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="member-card member-style-6 bg-white rounded-3 shadow p-4 text-center">
                    <div class="member-logo mb-3">
                        <img src="{{ asset('images/members/nusantaraagromandiri.png') }}" alt="PT Nusantara Agro Mandiri" class="img-fluid member-large-logo">
                    </div>
                    <h6 class="member-name">PT Nusantara Agro Mandiri</h6>
                    <p class="text-muted small mb-0" data-en="APGI Member" data-id="Anggota APGI">Anggota APGI</p>
                </div>
            </div>
            
            <!-- 4. NPM -->
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="member-card member-style-2 bg-white rounded-3 shadow p-4 text-center">
                    <div class="member-logo mb-3">
                        <img src="{{ asset('images/members/npm.png') }}" alt="PT Nusantara Putra Mandiri" class="img-fluid member-small-logo">
                    </div>
                    <h6 class="member-name">PT Nusantara Putra Mandiri</h6>
                    <p class="text-muted small mb-0" data-en="APGI Member" data-id="Anggota APGI">Anggota APGI</p>
                </div>
            </div>
            
            <!-- 5. CV Hasil Karya -->
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="member-card member-style-4 bg-white rounded-3 shadow p-4 text-center">
                    <div class="member-logo mb-3">
                        <img src="{{ asset('images/members/cvhasilkarya.png') }}" alt="CV Hasil Karya Wijaya" class="img-fluid member-large-logo">
                    </div>
                    <h6 class="member-name">CV Hasil Karya Wijaya</h6>
                    <p class="text-muted small mb-0" data-en="APGI Member" data-id="Anggota APGI">Anggota APGI</p>
                </div>
            </div>
            
            <!-- 6. ASM -->
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="member-card member-style-6 bg-white rounded-3 shadow p-4 text-center">
                    <div class="member-logo mb-3">
                        <img src="{{ asset('images/members/asm.png') }}" alt="PT Agung Samudra Mulia" class="img-fluid member-small-logo">
                    </div>
                    <h6 class="member-name">PT Agung Samudra Mulia</h6>
                    <p class="text-muted small mb-0" data-en="APGI Member" data-id="Anggota APGI">Anggota APGI</p>
                </div>
            </div>
            
            <!-- 7. CV Puncak Jaya -->
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="member-card member-style-2 bg-white rounded-3 shadow p-4 text-center">
                    <div class="member-logo mb-3">
                        <img src="{{ asset('images/members/puncakjaya.png') }}" alt="CV Puncak Jaya" class="img-fluid member-small-logo">
                    </div>
                    <h6 class="member-name">CV Puncak Jaya</h6>
                    <p class="text-muted small mb-0" data-en="APGI Member" data-id="Anggota APGI">Anggota APGI</p>
                </div>
            </div>
            
            <!-- 8. CV Swasembada -->
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="member-card member-style-4 bg-white rounded-3 shadow p-4 text-center">
                    <div class="member-logo mb-3">
                        <img src="{{ asset('images/members/placeholder.png') }}" alt="CV Swasembada" class="img-fluid member-small-logo">
                    </div>
                    <h6 class="member-name">CV Swasembada</h6>
                    <p class="text-muted small mb-0" data-en="APGI Member" data-id="Anggota APGI">Anggota APGI</p>
                </div>
            </div>
            
            <!-- 9. CV Indika -->
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="member-card member-style-6 bg-white rounded-3 shadow p-4 text-center">
                    <div class="member-logo mb-3">
                        <img src="{{ asset('images/members/placeholder.png') }}" alt="CV Indika Multi Karya" class="img-fluid member-small-logo">
                    </div>
                    <h6 class="member-name">CV Indika Multi Karya</h6>
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
                    <h3 class="stat-number text-success">60+</h3>
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
                            <div class="col-lg-6 text-center mb-3">
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
                            
                            <div class="col-md-6 mb-3">
                                <div class="org-card-modern org-staff text-center">
                                    <div class="org-icon">
                                        <i class="fas fa-coins"></i>
                                    </div>
                                    <div class="org-content">
                                        <h6 class="org-title" data-en="Treasurer" data-id="Bendahara">Bendahara</h6>
                                        <div class="org-name">Hadi Goenawan</div>
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
                                            <div class="member-item">Lie Kamadjaja</div>
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
                                            <div class="member-item">Drs. Chandra Harsono</div>
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
                <h3 class="display-6 fw-bold text-gradient mb-3" data-en="Activity Gallery" data-id="Galeri Kegiatan">Galeri Kegiatan</h3>
                <p class="lead text-muted" data-en="Documentation of APGI's activities and achievements in developing Indonesia's sugar industry" data-id="Dokumentasi kegiatan dan pencapaian APGI dalam mengembangkan industri gula Indonesia">Dokumentasi kegiatan dan pencapaian APGI dalam mengembangkan industri gula Indonesia</p>
            </div>
        </div>
        
        <div class="gallery-grid" id="galleryContainer">
            @forelse($galleries as $gallery)
                <div class="gallery-item-modern gallery-item" data-category="{{ $gallery->category }}">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <div class="gallery-icon">
                                <i class="fas fa-image"></i>
                            </div>
                            <h5 class="gallery-title">{{ $gallery->title }}</h5>
                            <span class="gallery-category badge bg-primary mb-2">{{ $gallery->category_label }}</span>
                            @if($gallery->description)
                                <p class="gallery-desc">{{ Str::limit($gallery->description, 50) }}</p>
                            @endif
                            <button class="btn btn-gallery-view" onclick="viewGalleryImage('{{ $gallery->image_url }}', '{{ $gallery->title }}')">
                                <i class="fas fa-eye me-2"></i><span data-en="View Details" data-id="Lihat Detail">Lihat Detail</span>
                            </button>
                        </div>
                    </div>
                    <img src="{{ $gallery->image_url }}" alt="{{ $gallery->alt_text ?: $gallery->title }}" class="gallery-image">
                </div>
            @empty
                <div class="col-12 text-center">
                    <div class="py-5">
                        <i class="fas fa-images text-muted mb-3" style="font-size: 4rem;"></i>
                        <h5 class="text-muted">Belum ada galeri tersedia</h5>
                        <p class="text-muted">Galeri akan ditampilkan setelah admin menambahkan konten.</p>
                    </div>
                </div>
            @endforelse
        </div>
        

        <div class="gallery-filter text-center mt-5">
            <button class="btn btn-filter active" data-filter="all">
                <i class="fas fa-th me-2"></i><span data-en="All Activities" data-id="Semua Kegiatan">Semua Kegiatan</span>
            </button>
            <button class="btn btn-filter" data-filter="rapat">
                <i class="fas fa-users me-2"></i><span data-en="Meetings" data-id="Rapat">Rapat</span>
            </button>
            <button class="btn btn-filter" data-filter="seminar">
                <i class="fas fa-graduation-cap me-2"></i><span data-en="Seminars" data-id="Seminar">Seminar</span>
            </button>
            <button class="btn btn-filter" data-filter="pelatihan">
                <i class="fas fa-chalkboard-teacher me-2"></i><span data-en="Training" data-id="Pelatihan">Pelatihan</span>
            </button>
        </div>
    </div>
</section>

<!-- EVENTS SECTION -->
<section id="events" class="py-5 bg-light">
    <div class="container">
        <!-- Events Section -->
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h3 class="display-6 fw-bold text-gradient mb-3" data-en="Upcoming Events" data-id="KEGIATAN MENDATANG">KEGIATAN MENDATANG</h3>
                <p class="lead text-muted" data-en="Join our upcoming events and be part of Indonesia's sugar industry development" data-id="Ikuti kegiatan mendatang kami dan jadilah bagian dari pengembangan industri gula Indonesia">Ikuti kegiatan mendatang kami dan jadilah bagian dari pengembangan industri gula Indonesia</p>
            </div>
        </div>
        
        <div class="row mb-5">
            @forelse($events as $event)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card event-card h-100 shadow-sm border-0">
                        @if($event->image_path)
                            <img src="{{ $event->image_url }}" class="card-img-top news-image" alt="{{ $event->title }}">
                        @endif
                        <div class="card-body">
                            <div class="event-date mb-2">
                                <span class="badge bg-primary">
                                    <i class="fas fa-calendar me-1"></i>
                                    {{ $event->formatted_date }}
                                </span>
                                @if($event->event_time)
                                    <span class="badge bg-info ms-2">
                                        <i class="fas fa-clock me-1"></i>
                                        {{ $event->formatted_time }}
                                    </span>
                                @endif
                            </div>
                            <h5 class="card-title fw-bold text-primary">{{ $event->title }}</h5>
                            <p class="card-text text-muted">{{ Str::limit($event->description, 100) }}</p>
                            @if($event->location)
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="fas fa-map-marker-alt me-1"></i>
                                        {{ $event->location }}
                                    </small>
                                </p>
                            @endif
                            @if($event->organizer)
                                <p class="card-text">
                                    <small class="text-muted">
                                        Penyelenggara: {{ $event->organizer }}
                                    </small>
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <div class="py-5">
                        <i class="fas fa-calendar-alt text-muted mb-3" style="font-size: 4rem;"></i>
                        <h5 class="text-muted">Belum ada kegiatan mendatang</h5>
                        <p class="text-muted">Kegiatan akan ditampilkan setelah admin menambahkan event.</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- SOCIAL CONTENT SECTION -->
<section id="social" class="py-5">
    <div class="container">
        <!-- Social Content Section -->
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h3 class="display-6 fw-bold text-gradient mb-3" data-en="Social Content" data-id="KONTEN SOSIAL">KONTEN SOSIAL</h3>
                <p class="lead text-muted" data-en="Follow the latest developments about our activities, innovations, and achievements." data-id="Ikuti perkembangan terkini tentang aktivitas, inovasi, dan pencapaian kami.">Ikuti perkembangan terkini tentang aktivitas, inovasi, dan pencapaian kami.</p>
            </div>
        </div>
        
        <div class="row">
            @forelse($socialContents as $content)
                <div class="col-lg-6 mb-4">
                    <div class="card news-card h-100 shadow-sm border-0">
                        @if($content->image_path)
                            <img src="{{ $content->image_url }}" class="card-img-top news-image" alt="{{ $content->title }}">
                        @endif
                        <div class="card-body">
                            <div class="content-meta mb-2">
                                @switch($content->type)
                                    @case('news')
                                        <span class="badge bg-primary">Berita</span>
                                        @break
                                    @case('announcement') 
                                        <span class="badge bg-warning">Pengumuman</span>
                                        @break
                                    @case('activity')
                                        <span class="badge bg-info">Kegiatan</span>
                                        @break
                                    @default
                                        <span class="badge bg-secondary">{{ ucfirst($content->type) }}</span>
                                @endswitch
                                
                                @if($content->published_at)
                                    <small class="text-muted ms-2">{{ $content->formatted_published_date }}</small>
                                @endif
                            </div>
                            <h5 class="card-title fw-bold text-primary">{{ $content->title }}</h5>
                            <p class="card-text text-muted">{{ $content->excerpt }}</p>
                            @if($content->is_featured)
                                <span class="badge bg-warning mb-2">
                                    <i class="fas fa-star me-1"></i>Unggulan
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <div class="py-5">
                        <i class="fas fa-newspaper text-muted mb-3" style="font-size: 4rem;"></i>
                        <h5 class="text-muted">Belum ada berita tersedia</h5>
                        <p class="text-muted">Berita akan ditampilkan setelah admin menambahkan konten.</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- NEWS SECTION -->
<section id="news" class="py-5 bg-light">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col-12">
                <h3 class="display-6 fw-bold text-gradient mb-3" data-en="Latest News" data-id="BERITA TERKINI">BERITA TERKINI</h3>
                <p class="lead text-muted" data-en="Stay updated with the latest news and insights from APGI" data-id="Tetap terkini dengan berita dan wawasan terbaru dari APGI">Tetap terkini dengan berita dan wawasan terbaru dari APGI</p>
            </div>
        </div>
        <div class="row g-4">
            @forelse($news as $article)
                <div class="col-lg-4 col-md-6">
                    <div class="card news-card h-100 shadow-sm border-0">
                        @if($article->image_path)
                            <img src="{{ asset('storage/' . $article->image_path) }}" class="card-img-top news-image" alt="{{ $article->title }}">
                        @endif
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-warning text-dark">News</span>
                                @if($article->published_at)
                                    <small class="text-muted">{{ $article->formatted_published_date }}</small>
                                @endif
                            </div>
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text text-muted flex-grow-1">{{ $article->excerpt }}</p>
                            @if($article->author)
                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('images/avatar-placeholder.jpg') }}" class="rounded-circle me-2" width="30" height="30" alt="Author">
                                    <small class="text-muted">{{ $article->author }}</small>
                                </div>
                            @endif
                            <button class="btn btn-outline-primary btn-sm mt-auto" 
                                    onclick="showNewsDetail('{{ $article->title }}', '{{ $article->content }}', '{{ $article->image_path ? asset('storage/' . $article->image_path) : '' }}', '{{ $article->author ?? 'APGI' }}', '{{ $article->formatted_published_date ?? '' }}')">
                                <i class="fas fa-eye me-2"></i>Baca Selengkapnya
                            </button>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <div class="py-5">
                        <i class="fas fa-newspaper text-muted mb-3" style="font-size: 4rem;"></i>
                        <h5 class="text-muted">Belum ada berita utama tersedia</h5>
                        <p class="text-muted">Berita akan ditampilkan setelah admin menambahkan konten.</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- NEWS DETAIL MODAL -->
<div class="modal fade" id="newsDetailModal" tabindex="-1" aria-labelledby="newsDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="news-detail-content">
                    <div class="news-detail-image">
                        <img id="modalNewsImage" src="" alt="" class="w-100">
                    </div>
                    <div class="news-detail-body p-4">
                        <h2 id="modalNewsTitle" class="fw-bold text-primary mb-3"></h2>
                        <div class="news-meta mb-4">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('images/avatar-placeholder.jpg') }}" class="rounded-circle me-3" width="50" height="50" alt="Writer">
                                <div>
                                    <h6 class="mb-0" id="modalNewsWriter">Writer: Dimas office</h6>
                                    <small class="text-muted" id="modalNewsDate">Sep 7 • 1 min read</small>
                                </div>
                            </div>
                        </div>
                        <div class="news-stats mb-4">
                            <small class="text-muted">
                                <i class="fas fa-eye me-1"></i> <span id="modalNewsViews">0</span> views
                            </small>
                        </div>
                        <div class="news-content" id="modalNewsContent">
                            <!-- Content will be loaded here -->
                        </div>
                        <div class="news-actions mt-4 pt-4 border-top">
                            <button class="btn btn-outline-primary me-2">
                                <i class="fas fa-heart me-1"></i> Like
                            </button>
                            <button class="btn btn-outline-secondary">
                                <i class="fas fa-share me-1"></i> Share
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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
                    <form id="contactForm" action="mailto:sekretariat@pengusahagulaindonesia.com" method="post" enctype="text/plain">
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
                    <p class="text-muted mb-0">apgi@pengusahagulaindonesia.com</p>
                    <p class="text-muted mb-0">sekretariat@pengusahagulaindonesia.com</p>

                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="contact-info-card text-center p-4 bg-white rounded-3 shadow">
                    <div class="contact-icon-modern mb-3 mx-auto">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h6 class="mb-2" data-en="Phone" data-id="Telepon">Telepon</h6>
                    <p class="text-muted mb-0">+62 317490000</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="contact-info-card text-center p-4 bg-white rounded-3 shadow">
                    <div class="contact-icon-modern mb-3 mx-auto">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h6 class="mb-2" data-en="Address" data-id="Alamat">Alamat</h6>
                    <p class="text-muted mb-0">Jl. Tanjung Batu No.38-54, Perak Barat, Kecamatan Krembangan, Kota Surabaya, Jawa Timur (60177)</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>

/* Hero Background Video Styles */
.hero-section {
    min-height: 100vh;
    position: relative;
    display: flex;
    align-items: center;
}

.hero-background-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -2;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(0,0,0,0.7) 0%, rgba(46,125,50,0.3) 50%, rgba(0,0,0,0.6) 100%);
    z-index: -1;
}

/* Text Shadows for Readability */
.text-shadow {
    text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
}

.text-shadow-strong {
    text-shadow: 3px 3px 6px rgba(0,0,0,0.8);
}

/* Hero Content Enhancements */
.hero-content {
    padding: 1rem 0;
    animation: fadeInUp 1s ease-out;
    position: relative;
    z-index: 3;
}

.hero-side-content {
    position: relative;
    z-index: 3;
}

/* Custom positioning classes */
.hero-section .row {
    position: relative;
    z-index: 2;
    padding-top: 3rem;
}

.mb-6 {
    margin-bottom: 4rem !important;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.hero-badge .badge {
    font-size: 1rem;
    font-weight: 600;
    letter-spacing: 0.5px;
}

.btn-light {
    background-color: rgba(255,255,255,0.95);
    border-color: rgba(255,255,255,0.95);
    color: #2e7d32;
    font-weight: 600;
}

.btn-light:hover {
    background-color: rgba(255,255,255,1);
    border-color: rgba(255,255,255,1);
    color: #1b5e20;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.2);
}

.btn-outline-light:hover {
    background-color: rgba(255,255,255,0.1);
    border-color: rgba(255,255,255,1);
    transform: translateY(-2px);
}

/* Mobile Responsive Styles */
@media (max-width: 768px) {
    .hero-section {
        min-height: 100vh;
        padding: 2rem 0;
    }
    
    .hero-background-video {
        object-position: center center;
    }
    
    .hero-content {
        text-align: center;
        padding: 0.5rem 0;
        margin-top: 1rem !important;
        padding-top: 1rem !important;
    }
    
    .hero-side-content {
        margin-top: 2rem !important;
        padding-top: 1rem !important;
    }
    
    .hero-content h1 {
        font-size: 2.8rem;
        line-height: 1.1;
    }
    
    .hero-content h2 {
        font-size: 1.8rem;
        line-height: 1.2;
    }
    
    .hero-content .lead {
        font-size: 1.2rem;
        margin-bottom: 2rem;
        line-height: 1.4;
    }
    
    .hero-badge .badge {
        font-size: 1.1rem;
        padding: 0.7rem 1rem;
    }
    
    .person-name {
        font-size: 1.8rem;
        white-space: normal;
        overflow: visible;
        text-overflow: unset;
    }
    
    .person-position {
        font-size: 1.2rem;
        white-space: normal;
        overflow: visible;
        text-overflow: unset;
    }
    
    .hero-buttons {
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    
    .hero-buttons .btn {
        width: 100%;
        max-width: 280px;
        margin-bottom: 0.5rem;
    }
}

@media (max-width: 576px) {
    .hero-content h1 {
        font-size: 2.2rem;
        line-height: 1.1;
    }
    
    .hero-content h2 {
        font-size: 1.4rem;
    }
    
    .hero-content .lead {
        font-size: 1.1rem;
    }
    
    .hero-badge .badge {
        font-size: 1rem;
        padding: 0.5rem 0.8rem;
    }
    
    .person-name {
        font-size: 1.6rem;
        white-space: normal;
        overflow: visible;
        text-overflow: unset;
    }
    
    .person-position {
        font-size: 1.4rem;
        white-space: normal;
        overflow: visible;
        text-overflow: unset;
    }
}

.hero-carousel-container {
    max-width: 400px;
    margin: 0 auto;
}

.hero-video-container {
    max-width: 500px;
    margin: 0 auto;
}

.video-wrapper {
    position: relative;
    background: #000;
    border: 3px solid rgba(46, 125, 50, 0.2);
    transition: all 0.3s ease;
}

.video-wrapper:hover {
    border-color: rgba(46, 125, 50, 0.5);
    box-shadow: 0 15px 35px rgba(46, 125, 50, 0.2);
}

.hero-video {
    width: 100%;
    height: 300px;
    object-fit: cover;
    border-radius: 1rem;
    transition: all 0.3s ease;
}

.video-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.1) 50%, rgba(0,0,0,0.4) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 1rem;
    opacity: 0;
    transition: all 0.3s ease;
}

.video-wrapper:hover .video-overlay {
    opacity: 1;
}

.play-button-container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.video-play-btn {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: rgba(46, 125, 50, 0.9);
    border: 3px solid white;
    color: white;
    font-size: 20px;
    cursor: pointer;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
    display: flex;
    align-items: center;
    justify-content: center;
}

.video-play-btn:hover {
    background: rgba(46, 125, 50, 1);
    transform: scale(1.1);
    box-shadow: 0 0 20px rgba(46, 125, 50, 0.5);
}

.video-info {
    position: absolute;
    bottom: 20px;
    left: 20px;
    right: 20px;
    text-align: center;
}

.video-info h5 {
    text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
    font-weight: 600;
    margin-bottom: 0;
}

.video-controls {
    position: absolute;
    bottom: 15px;
    left: 15px;
    right: 15px;
    display: flex;
    align-items: center;
    gap: 10px;
    opacity: 0;
    transition: all 0.3s ease;
}

.video-wrapper:hover .video-controls {
    opacity: 1;
}

.progress-container {
    flex: 1;
    height: 4px;
    background: rgba(255,255,255,0.3);
    border-radius: 2px;
    overflow: hidden;
    cursor: pointer;
}

.progress-bar {
    width: 100%;
    height: 100%;
    position: relative;
}

.progress-fill {
    height: 100%;
    background: linear-gradient(90deg, #2e7d32, #4caf50);
    width: 0%;
    transition: width 0.1s ease;
    border-radius: 2px;
}

.control-buttons {
    display: flex;
    gap: 8px;
}

.control-btn {
    width: 35px;
    height: 35px;
    border: none;
    border-radius: 50%;
    background: rgba(46, 125, 50, 0.8);
    color: white;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
}

.control-btn:hover {
    background: rgba(46, 125, 50, 1);
    transform: scale(1.1);
}

/* Mobile Video Responsive */
@media (max-width: 768px) {
    .hero-video {
        height: 250px;
    }
    
    .video-play-btn {
        width: 50px;
        height: 50px;
        font-size: 16px;
    }
    
    .control-btn {
        width: 30px;
        height: 30px;
        font-size: 12px;
    }
    
    .video-info h5 {
        font-size: 1rem;
    }
    
    .video-controls {
        bottom: 10px;
        left: 10px;
        right: 10px;
    }
}

@media (max-width: 576px) {
    .hero-video {
        height: 200px;
    }
    
    .video-info h5 {
        font-size: 0.9rem;
    }
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
    height: 500px;
    object-fit: cover;
    object-position: center top;
    display: block;
    border-radius: 1rem;
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
    background: rgba(255, 255, 255, 0.5);
    cursor: pointer;
    transition: all 0.3s ease;
    border: 2px solid rgba(255, 255, 255, 0.3);
}

.dot.active {
    background: rgba(255, 255, 255, 0.9);
    transform: scale(1.3);
    border: 2px solid rgba(255, 255, 255, 1);
}

.dot:hover {
    background: rgba(255, 255, 255, 0.8);
    transform: scale(1.2);
    border: 2px solid rgba(255, 255, 255, 1);
}


.person-info-container {
    margin-top: 25px;
    min-height: 100px;
    text-align: center;
    padding: 0 10px;
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
    font-size: 2.2rem;
    font-weight: 800;
    color: white;
    margin-bottom: 10px;
    font-family: 'Playfair Display', serif;
    text-shadow: 3px 3px 6px rgba(0,0,0,0.8);
    line-height: 1.1;
    white-space: normal;
    overflow: visible;
    text-overflow: unset;
    max-width: 100%;
}

.person-position {
    font-size: 1.8rem;
    color: rgba(255,255,255,0.9);
    margin-bottom: 0;
    font-weight: 700;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
    line-height: 1.3;
    white-space: normal;
    overflow: visible;
    text-overflow: unset;
    max-width: 100%;
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
    border-color: #0d6efd;
    box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
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

.member-large-logo {
    max-height: 250px !important;
    transform: scale(2.0) !important;
}

.member-card:hover .member-logo img {
    filter: grayscale(0%);
    transform: scale(1.05);
}

.member-card:hover .member-small-logo {
    filter: grayscale(0%);
    transform: scale(1.6) !important;
}

.member-card:hover .member-large-logo {
    filter: grayscale(0%);
    transform: scale(2.1) !important;
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
    max-width: 380px;
    min-width: 300px;
    margin: 0 auto;
    overflow: hidden;
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
    font-size: 1.4rem;
    font-weight: 700;
    color: #333;
}

.org-name {
    font-size: 1.1rem;
    color: #666;
    font-weight: 600;
    word-wrap: break-word;
    line-height: 1.3;
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
    font-weight: 700;
    font-size: 1.6rem;
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
    font-size: 1.2rem;
    font-weight: 700;
    color: #333;
    line-height: 1.3;
}

.dept-name {
    font-size: 1.4rem;
    color: #666;
    font-weight: 600;
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
    font-size: 1.4rem;
    font-weight: 700;
    color: #00BCD4;
}

.humas-name {
    font-size: 1.5rem;
    color: #333;
    font-weight: 600;
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
    font-size: 1.3rem;
    font-weight: 700;
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
    font-size: 1.4rem;
    color: #333;
    font-weight: 600;
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

.gallery-category {
    position: absolute;
    top: 10px;
    right: 10px;
    z-index: 3;
    font-size: 0.8rem;
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
    
    .hero-video-container {
        max-width: 100%;
        margin-bottom: 2rem;
    }
    
    .hero-video {
        height: 250px;
    }
    
    .video-play-btn {
        width: 50px;
        height: 50px;
        font-size: 16px;
    }
    
    .video-info h5 {
        font-size: 1rem;
    }
    
    .hero-carousel-container {
        max-width: 350px;
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

/* News Section Styles */
.news-card {
    transition: all 0.3s ease;
    border-radius: 12px;
    overflow: hidden;
}

.news-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
}

.news-image {
    height: 200px;
    object-fit: cover;
    width: 100%;
}

.news-card .card-title {
    font-size: 1.1rem;
    line-height: 1.4;
    margin-bottom: 0.8rem;
}

.news-card .card-text {
    font-size: 0.95rem;
    line-height: 1.6;
}

.news-card .btn-outline-primary {
    border-color: var(--bs-primary);
    color: var(--bs-primary);
    font-size: 0.85rem;
    padding: 0.25rem 0.75rem;
}

.news-card .btn-outline-primary:hover {
    background-color: var(--bs-primary);
    border-color: var(--bs-primary);
}

/* Make news cards clickable */
.news-card {
    cursor: pointer;
}

.news-card:hover .card-title {
    color: var(--bs-primary) !important;
}

/* News Detail Modal Styles */
.news-detail-image img {
    height: 300px;
    object-fit: cover;
}

.news-detail-content {
    background: white;
}

.news-content {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #333;
}

.news-content p {
    margin-bottom: 1.5rem;
}

.news-meta h6 {
    color: var(--bs-primary);
    font-weight: 600;
}

.news-actions {
    background: #f8f9fa;
    margin: 0 -1.5rem -1.5rem;
    padding: 1rem 1.5rem;
}

.modal-lg {
    max-width: 800px;
}

/* People Carousel Styles */
.people-carousel-container {
    max-width: 800px;
    margin: 0 auto;
}

.people-carousel {
    position: relative;
    width: 100%;
    height: 700px;
    overflow: hidden;
    border-radius: 20px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
}

.people-slide {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
    background: white;
    padding: 2rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.people-slide.active {
    opacity: 1;
}

.people-card {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.people-image-container {
    width: 100%;
    height: 500px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
}

.people-image {
    width: 300px;
    height: 400px;
    object-fit: cover;
    object-position: center top;
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
}

.people-name {
    font-size: 2rem;
    margin-bottom: 0.8rem;
    color: #2E7D32 !important;
    font-weight: 700;
}

.people-title {
    font-size: 1.3rem;
    color: #6c757d;
    font-weight: 500;
}

/* Navigation Buttons */
.people-nav-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255,255,255,0.9);
    border: none;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary-color);
    font-size: 1.2rem;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    z-index: 10;
}

.people-nav-btn:hover {
    background: var(--primary-color);
    color: white;
    transform: translateY(-50%) scale(1.1);
}

.people-prev {
    left: 20px;
}

.people-next {
    right: 20px;
}

/* Dots Indicator */
.people-dots-container {
    text-align: center;
}

.people-dot {
    height: 12px;
    width: 12px;
    margin: 0 5px;
    background-color: #bdc3c7;
    border-radius: 50%;
    display: inline-block;
    cursor: pointer;
    transition: all 0.3s ease;
}

.people-dot.active,
.people-dot:hover {
    background-color: var(--primary-color);
    transform: scale(1.2);
}

/* Responsive */
@media (max-width: 768px) {
    .people-carousel {
        height: 500px;
    }
    
    .people-image-container {
        height: 300px;
    }
    
    .people-image {
        width: 200px;
        height: 250px;
    }
    
    .people-name {
        font-size: 1.3rem;
    }
    
    .people-title {
        font-size: 1rem;
    }
    
    .people-nav-btn {
        width: 40px;
        height: 40px;
        font-size: 1rem;
    }
}

</style>

<script>

// People Carousel Functions
let currentPeopleSlideIndex = 0;
let peopleSlides, peopleDots, totalPeopleSlides;
let peopleAutoSlideInterval;

function initializePeopleCarousel() {
    peopleSlides = document.querySelectorAll('.people-slide');
    peopleDots = document.querySelectorAll('.people-dot');
    totalPeopleSlides = peopleSlides.length;
    
    if (peopleSlides.length > 0) {
        showPeopleSlide(0);
        // Auto slide disabled per user request
    }
}

function showPeopleSlide(index) {
    if (!peopleSlides || !peopleDots) return;
    
    // Remove active class from all slides and dots
    peopleSlides.forEach(slide => {
        slide.classList.remove('active');
    });
    peopleDots.forEach(dot => {
        dot.classList.remove('active');
    });
    
    // Add active class to current slide and dot
    if (peopleSlides[index] && peopleDots[index]) {
        peopleSlides[index].classList.add('active');
        peopleDots[index].classList.add('active');
    }
}

function nextPeopleSlide() {
    currentPeopleSlideIndex = (currentPeopleSlideIndex + 1) % totalPeopleSlides;
    showPeopleSlide(currentPeopleSlideIndex);
}

function prevPeopleSlide() {
    currentPeopleSlideIndex = (currentPeopleSlideIndex - 1 + totalPeopleSlides) % totalPeopleSlides;
    showPeopleSlide(currentPeopleSlideIndex);
}

function currentPeopleSlide(index) {
    currentPeopleSlideIndex = index - 1;
    showPeopleSlide(currentPeopleSlideIndex);
}

function startPeopleAutoSlide() {
    peopleAutoSlideInterval = setInterval(() => {
        nextPeopleSlide();
    }, 5000); // Change slide every 5 seconds
}

function resetPeopleAutoSlide() {
    clearInterval(peopleAutoSlideInterval);
    startPeopleAutoSlide();
}

// News Detail Functions
function openNewsDetail(postId) {
    const newsContents = {
        'post1': {
            title: 'APGI SELAMATKAN PASOKAN GULA 82.000 TON',
            content: `
                <p>Asosiasi Pengusaha Gula Indonesia (APGI) berhasil mengamankan pasokan gula sebanyak 82.000 ton untuk menjaga stabilitas kebutuhan pangan nasional. Langkah strategis ini diambil sebagai bentuk komitmen APGI dalam mendukung ketahanan pangan Indonesia, khususnya di tengah tingginya permintaan gula dan gejolak harga komoditas global.</p>
                
                <p>Ketua Umum APGI menegaskan bahwa ketersediaan gula merupakan salah satu faktor penting dalam menjaga stabilitas pangan. Dengan adanya tambahan pasokan ini, diharapkan kebutuhan masyarakat tetap terpenuhi sekaligus menekan potensi lonjakan harga yang dapat membebani konsumen.</p>
                
                <p>Selain memastikan ketersediaan, APGI juga terus bekerja sama dengan pemerintah untuk memperkuat sistem distribusi sehingga gula dapat tersalurkan secara merata ke seluruh wilayah Indonesia. Upaya ini sejalan dengan visi pemerintah dalam mewujudkan swasembada pangan dan menjaga kesejahteraan masyarakat.</p>
                
                <p>Dengan penyelamatan pasokan sebesar 82.000 ton, APGI menunjukkan peran nyatanya sebagai mitra strategis pemerintah dan pilar penting dalam ekosistem pangan nasional. Ke depan, APGI berkomitmen memperkuat produksi dalam negeri, meningkatkan efisiensi distribusi, serta menjaga stabilitas harga demi ketahanan pangan Indonesia yang berkelanjutan.</p>
            `
        },
        'post2': {
            title: 'APGI Tegak Mendukung Produksi Gula PG. Jatiroto Demi Menjaga Kestabilitas Harga Gula',
            content: `
                <p>Di tengah dinamika pasar dan tantangan ketahanan pangan, Asosiasi Pengusaha Gula Indonesia (APGI) berdiri di garis depan dengan memberikan dukungan penuh terhadap produksi Pabrik Gula (PG) Jatiroto. Langkah ini menjadi simbol komitmen kuat APGI dalam menjaga stabilitas harga gula, sekaligus memastikan kebutuhan dasar masyarakat tetap terpenuhi.</p>
                
                <p>PG Jatiroto, sebagai salah satu benteng produksi gula nasional, tidak hanya menjadi pabrik, melainkan garda penjaga ketersediaan pangan strategis bangsa. Dukungan APGI terhadap keberlanjutan produksi di Jatiroto merupakan wujud nyata perjuangan kolektif demi melindungi rakyat dari gejolak harga serta menjaga kesejahteraan petani tebu yang menjadi ujung tombak industri gula.</p>
                
                <p><strong>"Menjaga stabilitas harga gula bukan sekadar angka, melainkan menjaga denyut kehidupan masyarakat Indonesia. Bersama PG Jatiroto, kami memastikan bahwa ketahanan pangan bukan hanya wacana, tetapi kenyataan,"</strong> tegas Ketua Umum APGI.</p>
                
                <p>Dengan keberanian dan konsistensi, APGI terus memimpin langkah kolaborasi nasional. Dukungan terhadap PG Jatiroto adalah bukti bahwa industri gula Indonesia mampu bangkit, berdikari, dan menjadi pilar kokoh bagi kedaulatan pangan negeri.</p>
            `
        }
    };
    
    // Get content for the specific post
    const content = newsContents[postId];
    if (!content) return;
    
    // Find the clicked card to get its data
    const card = event.target.closest('.news-card');
    if (!card) return;
    
    // Fill modal with data
    document.getElementById('modalNewsTitle').textContent = card.getAttribute('data-title');
    document.getElementById('modalNewsImage').src = card.getAttribute('data-image');
    document.getElementById('modalNewsImage').alt = card.getAttribute('data-title');
    document.getElementById('modalNewsWriter').textContent = 'Writer: ' + card.getAttribute('data-writer');
    document.getElementById('modalNewsDate').textContent = card.getAttribute('data-date');
    document.getElementById('modalNewsViews').textContent = card.getAttribute('data-views');
    document.getElementById('modalNewsContent').innerHTML = content.content;
    
    // Show modal
    const modal = new bootstrap.Modal(document.getElementById('newsDetailModal'));
    modal.show();
}

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
    // Initialize original hero carousel
    initializeCarousel();
    
    // Initialize people carousel
    initializePeopleCarousel();
    
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
        'PT Fajar Mulia Transindo',
        'PT Citra Gemini Mulya',
        'PT Nusantara Agro Mandiri',
        'PT Nusantara Putra Mandiri',
        'CV Hasil Karya Wijaya',
        'PT Agung Samudra Mulia',
        'CV Puncak Jaya',
        'CV Swasembada',
        'CV Indika Multi Karya',
        'CV Hasil Karya Wijaya',
        'PT. Putra Benteng Sejahtera',
        'CV Sumber Kencana Abadi',
        'PT Mitra Agro Utama',
        'CV Agro Prima Santoso',
        'CV Anugrah Bersama Cemerlang',
        'PT Berkah Sarana Irjatama',
        'CV Kasih Karunianya',
        'PT Mitra Pangan Nusantara',
        'CV Citra Mulia Abadi',
        'CV Sentosa',
        'PT Rambi Jaya',
        'CV Surya Kencana',
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
            

            const mailtoLink = `mailto:apgi@pengusahagulaindonesia.com?subject=${encodeURIComponent(emailSubject)}&body=${encodeURIComponent(emailBody)}`;
            

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
    
    // Hero Video Controls
    function toggleVideo() {
        const video = document.getElementById('heroVideo');
        const playIcon = document.getElementById('playIcon');
        const pauseIcon = document.getElementById('pauseIcon');
        
        if (video.paused) {
            video.play();
            playIcon.classList.add('d-none');
            pauseIcon.classList.remove('d-none');
        } else {
            video.pause();
            playIcon.classList.remove('d-none');
            pauseIcon.classList.add('d-none');
        }
    }
    
    function toggleMute() {
        const video = document.getElementById('heroVideo');
        const volumeIcon = document.getElementById('volumeIcon');
        
        if (video.muted) {
            video.muted = false;
            volumeIcon.className = 'fas fa-volume-up';
        } else {
            video.muted = true;
            volumeIcon.className = 'fas fa-volume-mute';
        }
    }
    
    function toggleFullscreen() {
        const video = document.getElementById('heroVideo');
        const fullscreenIcon = document.getElementById('fullscreenIcon');
        
        if (document.fullscreenElement) {
            document.exitFullscreen();
            fullscreenIcon.className = 'fas fa-expand';
        } else {
            video.requestFullscreen();
            fullscreenIcon.className = 'fas fa-compress';
        }
    }
    
    // Auto hide/show video controls
    document.addEventListener('DOMContentLoaded', function() {
        const video = document.getElementById('heroVideo');
        const overlay = document.querySelector('.video-overlay');
        const progressFill = document.getElementById('progressFill');
        const progressBar = document.getElementById('progressBar');
        
        // Update progress bar
        video.addEventListener('timeupdate', function() {
            if (video.duration) {
                const progress = (video.currentTime / video.duration) * 100;
                progressFill.style.width = progress + '%';
            }
        });
        
        // Click to seek
        progressBar.addEventListener('click', function(e) {
            const rect = progressBar.getBoundingClientRect();
            const percent = (e.clientX - rect.left) / rect.width;
            video.currentTime = percent * video.duration;
        });
        
        // Auto hide overlay after 3 seconds
        setTimeout(() => {
            if (!video.paused) {
                overlay.style.opacity = '0';
            }
        }, 3000);
        
        // Show overlay on hover
        video.addEventListener('mouseenter', function() {
            overlay.style.opacity = '1';
        });
        
        video.addEventListener('mouseleave', function() {
            if (!video.paused) {
                setTimeout(() => {
                    overlay.style.opacity = '0';
                }, 1000);
            }
        });
        
        // Handle video end
        video.addEventListener('ended', function() {
            document.getElementById('playIcon').classList.remove('d-none');
            document.getElementById('pauseIcon').classList.add('d-none');
            overlay.style.opacity = '1';
        });
    });
});
</script>

</style>
@endsection