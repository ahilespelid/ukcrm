<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('owner.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite([
        'resources/assets/css/bootstrap.min.css',
        'resources/assets/css/dataTables.bootstrap5.min.css',
        'resources/assets/js/jquery.min.js',
        'resources/assets/js/jquery.dataTables.min.js',
        'resources/assets/js/dataTables.bootstrap5.min.js',
        'resources/assets/js/bootstrap.bundle.min.js',
    ])
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <script type="text/javascript" src="chrome-extension://epebfcehmdedogndhlcacafjaacknbcm/nmcades_plugin_api.js"></script>
</head>
