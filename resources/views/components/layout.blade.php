@props(['sidebar' => false, 'title' => 'Auth App'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        :root {
            --sidebar-bg: #0f172a;
            --sidebar-soft: #111827;
            --brand: #4f46e5;
            --panel: #ffffff;
            --muted: #64748b;
            --accent: #22c55e;
            --warning: #f59e0b;
            --danger: #ef4444;
        }

        body {
            background: linear-gradient(180deg, #f3f6fb 0%, #eef2ff 100%);
            font-family: Inter, 'Segoe UI', sans-serif;
        }

        .app-shell {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 280px;
            background: linear-gradient(180deg, var(--sidebar-bg) 0%, var(--sidebar-soft) 100%);
            color: #e2e8f0;
            padding: 1.5rem 1rem;
            position: sticky;
            top: 0;
            height: 100vh;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.8rem 0.9rem;
            margin-bottom: 1.5rem;
            border-radius: 16px;
            background: rgba(99, 102, 241, 0.12);
            color: #f8fafc;
            font-weight: 700;
        }

        .brand-mark {
            width: 38px;
            height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            background: linear-gradient(135deg, #8b5cf6, #4f46e5);
            box-shadow: 0 10px 24px rgba(79, 70, 229, 0.45);
        }

        .nav-section {
            font-size: 0.72rem;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: rgba(148, 163, 184, 0.8);
            padding: 1rem 0.75rem 0.5rem;
        }

        .nav-link {
            color: #cbd5e1;
            border-radius: 12px;
            padding: 0.75rem 0.9rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            transition: all 0.2s ease;
        }

        .nav-link:hover,
        .nav-link.active {
            background: rgba(148, 163, 184, 0.12);
            color: #fff;
        }

        .accordion-button {
            background: transparent;
            color: #e2e8f0;
            box-shadow: none;
            padding: 0.75rem 0.9rem;
            border-radius: 12px;
        }

        .accordion-button:not(.collapsed) {
            background: rgba(148, 163, 184, 0.12);
            color: #fff;
            box-shadow: none;
        }

        .accordion-button::after {
            filter: brightness(1.7);
        }

        .accordion-body {
            padding: 0.25rem 0.5rem 0.75rem;
        }

        .submenu-link {
            display: block;
            color: #cbd5e1;
            padding: 0.5rem 0.9rem 0.5rem 2.5rem;
            text-decoration: none;
            border-radius: 10px;
        }

        .submenu-link:hover {
            background: rgba(148, 163, 184, 0.08);
            color: #fff;
        }

        .dashboard-content {
            flex: 1;
            padding: 2rem;
        }

        .topbar {
            background: rgba(255, 255, 255, 0.75);
            border: 1px solid rgba(148, 163, 184, 0.2);
            backdrop-filter: blur(8px);
            border-radius: 20px;
            padding: 1rem 1.25rem;
            box-shadow: 0 8px 22px rgba(15, 23, 42, 0.06);
        }

        .eyebrow {
            margin: 0;
            color: var(--muted);
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .stat-card {
            border: 0;
            border-radius: 24px;
            box-shadow: 0 14px 30px rgba(15, 23, 42, 0.08);
            overflow: hidden;
        }

        .stat-card .card-body {
            padding: 1.5rem;
        }

        .stat-card.primary {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            color: #fff;
        }

        .stat-card.success {
            background: linear-gradient(135deg, #14b8a6 0%, #22c55e 100%);
            color: #fff;
        }

        .stat-card.warning {
            background: linear-gradient(135deg, #f59e0b 0%, #f97316 100%);
            color: #fff;
        }

        .stat-label {
            opacity: 0.8;
            margin-bottom: 0.75rem;
            font-size: 0.85rem;
            letter-spacing: 0.03em;
        }

        .stat-number {
            font-size: clamp(2rem, 3vw, 2.5rem);
            font-weight: 800;
            line-height: 1;
            margin-bottom: 0.5rem;
        }

        .stat-meta {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            padding: 0.35rem 0.65rem;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.14);
            font-size: 0.75rem;
            font-weight: 600;
        }

        .content-panel {
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(148, 163, 184, 0.15);
            border-radius: 24px;
            box-shadow: 0 12px 26px rgba(15, 23, 42, 0.04);
        }

        @media (max-width: 991.98px) {
            .app-shell {
                display: block;
            }

            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .dashboard-content {
                padding: 1rem;
            }
        }
    </style>
</head>
<body class="{{ $sidebar ? '' : 'bg-light' }}">
    @if ($sidebar)
        <div class="app-shell">
            <aside class="sidebar">
                <div class="brand">
                    <span class="brand-mark"><i class="bi bi-airplane me-2"></i></span>
                    <span>EveAirline </span>
                </div>

                <nav class="nav flex-column gap-1">
                    <div class="nav-section">Overview</div>
                    <a class="nav-link active" href="{{ route('dashboard') }}"><i class="bi bi-grid-1x2-fill"></i> Dashboard</a>

                    <div class="nav-section">Catalog</div>

                    <div class="accordion accordion-flush" id="catalogMenu">
                        <div class="accordion-item bg-transparent border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#productsMenu" aria-expanded="false" aria-controls="productsMenu">
                                    <span><i class="bi bi-box-seam me-2"></i>Products</span>
                                </button>
                            </h2>
                            <div id="productsMenu" class="accordion-collapse collapse" data-bs-parent="#catalogMenu">
                                <div class="accordion-body">
                                    <a href="{{ route('products.index') }}" class="submenu-link">All Products</a>
                                    <a href="{{ route('products.create') }}" class="submenu-link">Add Product</a>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item bg-transparent border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#categoriesMenu" aria-expanded="false" aria-controls="categoriesMenu">
                                    <span><i class="bi bi-tags me-2"></i>Categories</span>
                                </button>
                            </h2>
                            <div id="categoriesMenu" class="accordion-collapse collapse" data-bs-parent="#catalogMenu">
                                <div class="accordion-body">
                                        <a href="{{ route('categories.index') }}" class="submenu-link">All Categories</a>
                                        <a href="{{ route('categories.create') }}" class="submenu-link">Add Category</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </aside>

            <div class="dashboard-content">
                <header class="topbar d-flex justify-content-between align-items-center">
                    <div>
                        <p class="eyebrow">Overview</p>
                        <h1 class="mb-0 fs-3 fw-bold">{{ $title }}</h1>
                    </div>

                    <div class="d-flex align-items-center gap-3">
                        <span class="badge rounded-pill bg-primary-subtle text-primary px-3 py-2">
                            <i class="bi bi-person-circle me-1"></i>
                            {{ auth()->user()->name ?? 'Admin User' }}
                        </span>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-outline-secondary btn-sm rounded-pill">
                                <i class="bi bi-box-arrow-right me-1"></i>Logout
                            </button>
                        </form>
                    </div>
                </header>

                <main class="pt-4">
                    {{ $slot }}
                </main>
            </div>
        </div>
    @else
        <main class="min-vh-100 d-flex align-items-center justify-content-center py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-10 col-md-8 col-lg-5">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                                <i class="bi bi-check-circle-fill me-2"></i>
                                {{ session('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger shadow-sm" role="alert">
                                <div class="fw-bold mb-2">
                                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                    Please fix the following errors:
                                </div>
                                <ul class="mb-0 ps-3">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="card border-0 shadow-lg rounded-4">
                            <div class="card-body p-4 p-md-5">
                                {{ $slot }}
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <small class="text-muted">
                                &copy; {{ date('Y') }} {{ config('app.name', 'Auth App') }}
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
