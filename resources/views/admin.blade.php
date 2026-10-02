<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="csrf-token" content="{{ csrf_token() }}">

<title>
    {{ config('app.name', 'Laravel') }} - Admin
</title>


{{-- Bootstrap 5 --}}
<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    crossorigin="anonymous"
>


{{-- Bootstrap Icons --}}
<link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    rel="stylesheet"
>


{{-- Simple DataTables --}}
<link
    href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css"
    rel="stylesheet"
>


{{-- SB Admin CSS --}}
<link
    href="{{ asset('admin/css/styles.css') }}"
    rel="stylesheet"
>


{{-- Font Awesome --}}
<script
    src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
    crossorigin="anonymous">
</script>
```

</head>

<body class="sb-nav-fixed">

```
{{-- =========================
     NAVBAR
========================== --}}
@include('layouts.partials.navbar')



{{-- =========================
     SIDE NAVIGATION
========================== --}}
<div id="layoutSidenav">


    {{-- Sidebar --}}
    <div id="layoutSidenav_nav">

        @include('layouts.partials.sidebar')

    </div>



    {{-- =========================
         MAIN CONTENT
    ========================== --}}
    <div id="layoutSidenav_content">


        <main>

            {{ $slot }}

        </main>



        {{-- =========================
             FOOTER
        ========================== --}}
        <footer class="py-4 bg-light mt-auto">

            <div class="container-fluid px-4">

                <div
                    class="d-flex align-items-center
                           justify-content-between
                           small"
                >

                    <div class="text-muted">

                        Copyright &copy;
                        {{ date('Y') }}

                        {{ config('app.name', 'Laravel') }}

                    </div>


                    <div>

                        <a
                            href="#"
                            class="text-decoration-none"
                        >
                            Privacy Policy
                        </a>

                        <span class="mx-1">
                            &middot;
                        </span>

                        <a
                            href="#"
                            class="text-decoration-none"
                        >
                            Terms &amp; Conditions
                        </a>

                    </div>

                </div>

            </div>

        </footer>


    </div>

</div>



{{-- =========================
     BOOTSTRAP JS
========================== --}}
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous">
</script>


{{-- =========================
     SB ADMIN JS
========================== --}}
<script src="{{ asset('admin/js/scripts.js') }}"></script>


{{-- =========================
     SIMPLE DATATABLES
========================== --}}
<script>
