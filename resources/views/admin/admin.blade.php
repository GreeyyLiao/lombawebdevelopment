<!doctype html>
<html lang="id">

<head>
    <!-- Meta tag yang diperlukan -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte.min.css') }}">

    <style>
        .nav-itemku:hover {
            background-color: red;
        }

        .sidebarAdmin {
            height: 100vh;
        }

        .descriptionWidth {
            max-width: 17vw;
        }
        .hapusWidth,.editWidth{
            max-width: 7vw;
        }
        .short-description,td{
            font-size: 0.7vw;
        }
        .btn-warning,.btn-danger,.btn-info{
            font-size: 0.6vw;
        }
        td{
            width: 20px;
        }

        @media (max-width: 1261px) {
            .descriptionWidth {
                max-width: 17vw;
            }
        }


    </style>

    <title>Halaman Admin</title>
    <link rel="icon" type="image/png" href="{{ asset('dist/img/dashboard1.png') }}">
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/beranda') }}" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/kontak') }}" class="nav-link">Kontak</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4 sidebarAdmin">
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
                            <a href="{{ url('/admin') }}" class="nav-link">
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

        <!-- Konten Utama -->
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Halaman Admin</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Judul Laporan</th>
                                                <th scope="col">Gambar</th>
                                                <th scope="col">Deskripsi</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Persetujuan Laporan</th>
                                                <th scope="col">Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody class="tbody">
                                            @php
                                            $id = 1;
                                            @endphp
                                            @foreach ($reports as $report)
                                            <tr>
                                                <th scope="row">{{ $id++; }}</th>
                                                <th>{{ $report->users->nama_depan }}</th>
                                                <td>{{ Str::limit($report->judul_laporan, 100) }}</td>
                                                <td>
                                                    @if ($report->gambar)
                                                    <img src="{{ asset('storage/reports/' . $report->gambar) }}"
                                                        alt="Gambar Laporan" style="max-width: 7vw; height: auto;">
                                                    @else
                                                    Tidak ada gambar
                                                    @endif
                                                </td>
                                                <td class="descriptionWidth">
                                                    <div class="description-preview">
                                                        <p class="short-description">
                                                            {{ Str::limit($report->description, 100) }}</p>
                                                        <!-- Menampilkan hanya 100 karakter -->
                                                        <span class="full-description"
                                                            style="white-space: pre-wrap; display: none;">{{ $report->description }}</span>
                                                    </div>
                                                    <button class="btn btn-info" onclick="toggleDescription(this)">Baca
                                                        Selengkapnya</button>
                                                </td>
                                                <td>{{ $report->status ?? 'PANDING' }}</td>
                                                <td><a href="{{ $report->id . '/editAdmin' }}"
                                                        class="btn btn-warning editWidth">Persetujuan Laporan</a></td>
                                                <td><a href="{{ $report->id . '/deleteAdmin' }}"
                                                        class="btn btn-danger hapusWidth">Hapus</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer">
                                    Footer
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Versi</b> 3.2.0
            </div>
            <strong>Hak Cipta &copy; {{date('Y')}} <a href="https://adminlte.io">AdminLTE.io</a>.</strong> Seluruh hak
            dilindungi.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>

    <script>
        function toggleDescription(button) {
            const preview = button.previousElementSibling;
            const fullDescription = preview.querySelector('.full-description');
            const shortDescription = preview.querySelector('.short-description');

            if (fullDescription.style.display === 'none') {
                fullDescription.style.display = 'block';
                shortDescription.style.display = 'none';
                button.textContent = 'Sembunyikan';
            } else {
                fullDescription.style.display = 'none';
                shortDescription.style.display = 'block';
                button.textContent = 'Baca Selengkapnya';
            }
        }

    </script>
</body>

</html>
