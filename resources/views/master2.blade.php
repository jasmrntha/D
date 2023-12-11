<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>5026221107 - Jasmine Saimarantha</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container my-5">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
            <!-- Brand -->
            <a class="navbar-brand" href="#">5026221107 - jasmine Saimarantha Br Ginting</a>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Links
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/dosen/index">Pegawai</a>
                        <a class="dropdown-item" href="/nilai/index">Nilai Kuliah</a>
                        <a class="dropdown-item" href="/penggaris/index">Pra Eas</a>
                        <a class="dropdown-item" href="/eas/index">Eas</a>
                    </div>
                </li>
            </ul>
        </nav>

        <br />

        <!-- bagian judul halaman blog -->
        @yield('judul_halaman')
        <h2>@yield('title')</h2>
        {{-- @yield('header') tidak akan mengeluarkan error jika tidak ada isinya --}}
        @yield('konten')

        <br />
        <br />
        <hr />

        <footer>
            <p>&copy; <a href="https://www.malasngoding.com">www.malasngoding.com</a>. 2018 - 2019</p>
        </footer>
    </div>
</body>

</html>
