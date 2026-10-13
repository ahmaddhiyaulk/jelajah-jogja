
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Jelajah Jogja')</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>
        body {
            background-color: #f7f4ed;
            color: #24352f;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #173d35;
        }

        .navbar-brand {
            color: #ffffff;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .navbar-brand:hover {
            color: #c5a56a;
        }

        .nav-link {
            color: #ffffff;
        }

        .nav-link:hover {
            color: #c5a56a;
        }

        .hero {
            background-color: #173d35;
            color: white;
            padding: 75px 20px;
            border-radius: 18px;
        }

        .section-title {
            color: #173d35;
            font-weight: bold;
        }

        .card {
            border: none;
            border-radius: 14px;
            overflow: hidden;
            height: 100%;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.07);
        }

        .card-img-top {
            height: 220px;
            object-fit: cover;
        }

        .btn-jogja {
            background-color: #173d35;
            color: white;
            border-radius: 8px;
        }

        .btn-jogja:hover {
            background-color: #285b4e;
            color: white;
        }

        footer {
            background-color: #173d35;
            color: white;
            padding: 22px;
            margin-top: 60px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                JELAJAH JOGJA
            </a>

            <button
                class="navbar-toggler bg-light"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menuNavbar"
                aria-controls="menuNavbar"
                aria-expanded="false"
                aria-label="Buka navigasi"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuNavbar">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="{{ route('home') }}">
                        Beranda
                    </a>

                    <a class="nav-link" href="{{ route('wisata.index') }}">
                        Katalog Wisata
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="container py-4">
        @yield('content')
    </main>

    <footer class="text-center">
        <p class="mb-1">Jelajah Jogja</p>
        <small>
            Mengenal keindahan alam, budaya, dan rekreasi Yogyakarta.
        </small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
