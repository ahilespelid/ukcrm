<!DOCTYPE html>
{{--
Product Name: {{ theme()->getOption('product', 'description') }}
Author: KeenThemes
Purchase: {{ theme()->getOption('product', 'purchase') }}
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: {{ theme()->getOption('product', 'license') }}
--}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
{{-- begin::Head --}}
<head>
    <meta charset="utf-8"/>
    <title>{{ config('admin.name', 'Laravel') }}</title>
    <meta name="description" content="{{ config('admin.description', '') }}"/>
    <meta name="keywords" content="{{ config('admin.keywords', '') }}"/>
    <link rel="canonical" href="{{ config('admin.canonical', '') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="shortcut icon" href=""/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- begin::Fonts --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    {{-- end::Fonts --}}
    @vite([
        'resources/assets/css/style.bundle.css',
        //'resources/assets/plugins/global/plugins.bundle.js',
        //'resources/assets/js/scripts.bundle.js',
        //'resources/assets/js/custom/authentication/sign-in/general.js',
        'resources/assets/plugins/global/plugins.bundle.css',
        ])

    @yield('styles')
</head>
{{-- end::Head --}}

{{-- begin::Body --}}
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">

@if (config('admin.loader'))
    {{ view('admin._loader') }}
@endif

@yield('page')

<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{ Vite::asset('resources/assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ Vite::asset('resources/assets/js/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->

<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{ Vite::asset('resources/assets/js/widgets.bundle.js') }}"></script>
<script src="{{ Vite::asset('resources/assets/js/custom/widgets.js') }}"></script>
<script src="{{ Vite::asset('resources/assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ Vite::asset('resources/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
<script src="{{ Vite::asset('resources/assets/js/custom/utilities/modals/create-app.js') }}"></script>
<script src="{{ Vite::asset('resources/assets/js/custom/utilities/modals/users-search.js') }}"></script>
<!--end::Page Custom Javascript-->
<!--end::Javascript-->
@yield('scripts')
</body>
{{-- end::Body --}}
</html>
