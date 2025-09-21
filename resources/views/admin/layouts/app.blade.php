<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Panel') - APGI</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom Admin CSS -->
    <style>
        .sidebar {
            min-height: 100vh;
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        }
        .sidebar .nav-link {
            color: white;
            border-radius: 8px;
            margin: 4px 8px;
            transition: all 0.3s ease;
        }
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
        }
        .main-content {
            background-color: #f8f9fa;
            min-height: 100vh;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .card {
            border: none;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }
        .btn-primary {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            border: none;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #218838 0%, #1e7e34 100%);
        }
    </style>
    @stack('styles')
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 sidebar p-0">
                <div class="position-sticky pt-3">
                    <div class="text-center mb-4">
                        <h4 class="text-white">APGI Admin</h4>
                        <small class="text-white-50">Panel Administrasi</small>
                    </div>
                    
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.dashboard*') ? 'active' : '' }}" 
                               href="{{ route('admin.dashboard') }}">
                                <i class="bi bi-speedometer2 me-2"></i>
                                Dashboard
                            </a>
                        </li>
                        
                        <li class="nav-item mt-3">
                            <div class="px-3">
                                <small class="text-white-50 text-uppercase fw-bold">KEGIATAN</small>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.galleries*') ? 'active' : '' }}" 
                               href="{{ route('admin.galleries.index') }}">
                                <i class="bi bi-images me-2"></i>
                                Galeri
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.events*') ? 'active' : '' }}" 
                               href="{{ route('admin.events.index') }}">
                                <i class="bi bi-calendar-event me-2"></i>
                                Event
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.social-contents*') ? 'active' : '' }}" 
                               href="{{ route('admin.social-contents.index') }}">
                                <i class="bi bi-chat-square-text me-2"></i>
                                Konten Sosial
                            </a>
                        </li>
                        
                        <li class="nav-item mt-3">
                            <div class="px-3">
                                <small class="text-white-50 text-uppercase fw-bold">NEWS</small>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.news*') ? 'active' : '' }}" 
                               href="{{ route('admin.news.index') }}">
                                <i class="bi bi-newspaper me-2"></i>
                                News
                            </a>
                        </li>
                        
                        <li class="nav-item mt-4">
                            <form action="{{ route('admin.logout') }}" method="POST" class="px-3">
                                @csrf
                                <button type="submit" class="btn btn-outline-light btn-sm w-100">
                                    <i class="bi bi-box-arrow-right me-2"></i>
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
                <!-- Top Navbar -->
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">@yield('page-title', 'Dashboard')</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                <i class="bi bi-person-circle me-2"></i>
                                {{ Auth::guard('admin')->user()->name }}
                            </button>
                            <ul class="dropdown-menu">
                                <li><span class="dropdown-item-text">{{ Auth::guard('admin')->user()->role }}</span></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('admin.profile') }}">
                                        <i class="bi bi-person me-2"></i>
                                        Profil
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('admin.change-password') }}">
                                        <i class="bi bi-key me-2"></i>
                                        Ganti Password
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="{{ route('admin.logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="bi bi-box-arrow-right me-2"></i>
                                            Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Alerts -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="bi bi-check-circle me-2"></i>
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-triangle me-2"></i>
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <h6 class="mb-2"><i class="bi bi-exclamation-triangle me-2"></i>Terdapat kesalahan:</h6>
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <!-- Page Content -->
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>