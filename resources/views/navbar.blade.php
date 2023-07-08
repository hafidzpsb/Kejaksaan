<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/app.css') }}">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <nav class="navbar sticky-top navbar-expand-sm navbar-light" id="neubar">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="assets/images/logo.png" height="60" /></a>
                <div class="front ml-2">
                    <h6 class="my-0" style="margin-bottom: -0.25rem !important;">Kejaksaan Negeri</h6>
                    <h5 class="font-weight-bold text-dark"><b>Kabupaten Tangerang</b></h5>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link mx-2 active" aria-current="page" href="#">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profil
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/profil/doktrin-adhyaksa">Doktrin Adhyaksa</a></li>
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/profil/tugas-pokok-fungsi">Tugas Pokok &amp; Fungsi</a></li>
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/profil/visi-misi">Visi Misi</a></li>
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/profil/daftar-pegawai">Daftar Pegawai</a></li>
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/profil/struktur-organisasi">Struktur Organisasi</a></li>
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/profil/kata-sambutan">Kata Sambutan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Seksi
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/seksi/sub-bagian-pembinaan">SUB BAG PEMBINAAN</a></li>
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/seksi/intelijen">INTELIJEN</a></li>
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/seksi/pidsus">PIDSUS</a></li>
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/seksi/pidum">PIDUM</a></li>
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/seksi/datun">DATUN</a></li>
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/seksi/peng-barbuk-dan-baram">PENG BARBUK DAN BARAM</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Peraturan
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/peraturan/perintah-harian-jaksa-agung-republik-indonesia">Perintah Harian Jaksa Agung Republik Indonesia</a></li>
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/peraturan/peraturan-lainnya">Peraturan Lainnya</a></li>
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/peraturan/peraturan-pemerintah">Peraturan Pemerintah</a></li>
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/peraturan/keputusan-presiden">Keputusan Presiden</a></li>
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/peraturan/keputusan-jaksa-agung">Keputusan Jaksa Agung</a></li>
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/peraturan/keputusan-menteri">Keputusan Menteri</a></li>
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/peraturan/undang-undang">Undang Undang</a></li>
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/peraturan/instruksi-jaksa-agung">Instruksi Jaksa Agung</a></li>
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/peraturan/instruksi-presiden">Instruksi Presiden</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="#">Informasi</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Reformasi Birokrasi
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/peraturan/perintah-harian-jaksa-agung-republik-indonesia">Perintah Harian Jaksa Agung Republik Indonesia</a></li>
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/peraturan/peraturan-lainnya">Peraturan Lainnya</a></li>
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/peraturan/peraturan-pemerintah">Peraturan Pemerintah</a></li>
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/peraturan/keputusan-presiden">Keputusan Presiden</a></li>
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/peraturan/keputusan-jaksa-agung">Keputusan Jaksa Agung</a></li>
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/peraturan/keputusan-menteri">Keputusan Menteri</a></li>
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/peraturan/undang-undang">Undang Undang</a></li>
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/peraturan/instruksi-jaksa-agung">Instruksi Jaksa Agung</a></li>
                                <li><a class="dropdown-item" href="https://kejari-kabupatentangerang.kejaksaan.go.id/peraturan/instruksi-presiden">Instruksi Presiden</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="#">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>