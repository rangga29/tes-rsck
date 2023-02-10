<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />

    <title>{{ $title }} | SIREM</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Plugin CSS -->
    {{ $css }}

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/icons.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/theme.css') }}" />
</head>

<body>
    @include('sweetalert::alert')
    <div id="layout-wrapper">
        <div class="main-content">
            <x-header />
            <x-navbar :active="$active" />
            <div class="page-content">
                <div class="container-fluid">
                    <x-title :title="$title" :active="$active" :print="$print" />
                    {{ $slot }}
                </div>
            </div>
            <x-footer />
        </div>
    </div>

    <!-- JQuery  -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/waves.js') }}"></script>
    <script src="{{ asset('js/simplebar.min.js') }}"></script>

    <!-- Plugin JS -->
    {{ $js }}

    <!-- Theme JS -->
    <script src="{{ asset('js/theme.js') }}"></script>
</body>

</html>
