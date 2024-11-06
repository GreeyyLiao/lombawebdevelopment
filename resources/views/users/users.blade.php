@php
$user = request()->user();
@endphp

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('all.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte.min.css') }}">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f6fa;
        }

        .main-sidebar {
            background: #2c3e50;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .nav-link {
            border-radius: 8px;
            margin: 4px 8px;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .report-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
            overflow: hidden;
            transition: transform 0.2s ease;
        }

        .report-card:hover {
            transform: translateY(-2px);
        }

        .report-header {
            padding: 15px;
            border-bottom: 1px solid #eee;
            background: #f8f9fa;
        }

        .report-title {
            font-size: 16px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 5px;
        }

        .report-author {
            font-size: 14px;
            color: #666;
        }

        .report-content {
            padding: 15px;
        }

        .report-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .report-description {
            font-size: 14px;
            color: #444;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .report-status {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
            margin-bottom: 15px;
        }

        .status-pending {
            background: #fff3cd;
            color: #856404;
        }

        .status-approved {
            background: #d4edda;
            color: #155724;
        }

        .report-actions {
            padding: 15px;
            background: #f8f9fa;
            border-top: 1px solid #eee;
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .btn-approve {
            background: #3498db;
            color: white;
            border: none;
        }

        .btn-delete {
            background: #e74c3c;
            color: white;
            border: none;
        }

        .btn-read-more {
            background: #2ecc71;
            color: white;
            border: none;
        }

        .report-image {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin: 0 auto 15px auto;
            display: block;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .report-image-container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 15px;
        }

        @media (max-width: 768px) {
            .content-wrapper {
                padding: 15px;
            }
            .report-image {
                width: 200px;
                height: 200px;
            }

            .main-header {
                padding: 10px;
            }

            .navbar-nav {
                flex-direction: row;
                gap: 10px;
            }

            .report-card {
                margin: 10px 0;
            }

            .report-actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
                margin-bottom: 5px;
            }

            .sidebar-mini.sidebar-collapse .main-sidebar {
                transform: translate(-250px, 0);
            }
        }

        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

    </style>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/beranda') }}" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/kontak') }}" class="nav-link">Kontak</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block ml-lg-5">
                    <a href="{{ url($user->id.'/create') }}" class="btn btn-success float-right">Buat
                        Laporan</a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a class="brand-link">
                <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">{{ auth() ->user()->role}}</span>
            </a>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                            class="bi bi-person-circle text-white" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                    </div>
                    <div class="info">
                        <p style="color: #fff; font-size: 20px">{{ auth() ->user()->nama_depan}}</p>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ url('/user') }}" class="nav-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-house-door mr-3" viewBox="0 0 16 16">
                                    <path
                                        d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z" />
                                </svg>
                                <p style="margin: 0;">Dashboard</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-itemku">
                            <a href="{{ url('/logout') }}" class="nav-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-box-arrow-left mr-3" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z" />
                                    <path fill-rule="evenodd"
                                        d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z" />
                                </svg>
                                <p style="margin: 0;">Logout</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <h1 class="mb-4">Daftar Laporan</h1>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        @if ($user)
                        @foreach ($reports as $report)
                        @if ($report->user_id === $user->id)
                        <div class="col-12 fade-in">
                            <div class="report-card">
                                <div class="report-header">
                                    <h3 class="report-title">{{ Str::limit($report->judul_laporan, 100) }}</h3>
                                    <p class="report-author">
                                        <i class="fas fa-user mr-1"></i>
                                        {{ $report->users->nama_depan }}
                                    </p>
                                </div>
                                <div class="report-content">
                                    @if ($report->gambar)
                                    <img src="{{ asset('storage/reports/' . $report->gambar) }}" alt="Gambar Laporan"
                                        class="report-image">
                                    @endif
                                    <div class="report-description">
                                        <p class="short-description">
                                            {{ Str::limit($report->description, 150) }}
                                        </p>
                                        <div class="full-description" style="display: none;">
                                            {{ $report->description }}
                                        </div>
                                    </div>
                                    <span
                                        class="report-status {{ $report->status == 'APPROVED' ? 'status-approved' : 'status-pending' }}">
                                        {{ $report->status ?? 'PENDING' }}
                                    </span>
                                </div>
                                <div class="report-actions">
                                    <button class="btn btn-read-more" onclick="toggleDescription(this)">
                                        <i class="fas fa-book-reader mr-1"></i> Baca Selengkapnya
                                    </button>
                                    <a href="{{ url($report->id . '/edit') }}"
                                            class="btn btn-warning">Edit</a>
                                    <a href="{{ $report->id . '/delete' }}" class="btn btn-delete">
                                        <i class="fas fa-trash-alt mr-1"></i> Hapus
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        @endif
                    </div>
                </div>
            </section>
        </div>
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Versi</b> 3.2.0
            </div>
            <strong>Hak Cipta &copy; {{date('Y')}} <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        </footer>
    </div>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('adminlte.min.js') }}"></script>
    <script>
        function toggleDescription(button) {
            const card = button.closest('.report-card');
            const shortDesc = card.querySelector('.short-description');
            const fullDesc = card.querySelector('.full-description');
            if (fullDesc.style.display === 'none') {
                fullDesc.style.display = 'block';
                shortDesc.style.display = 'none';
                button.innerHTML = '<i class="fas fa-chevron-up mr-1"></i> Sembunyikan';
            } else {
                fullDesc.style.display = 'none';
                shortDesc.style.display = 'block';
                button.innerHTML = '<i class="fas fa-book-reader mr-1"></i> Baca Selengkapnya';
            }
        }
        document.addEventListener('DOMContentLoaded', function () {
            const cards = document.querySelectorAll('.fade-in');
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                    }
                });
            });
            cards.forEach(card => observer.observe(card));
        });
    </script>
</body>

</html>
