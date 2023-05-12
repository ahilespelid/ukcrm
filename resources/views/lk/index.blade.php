<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('lk._head')

    <body>
        <div class="container">
            @include('lk._header')
        </div>

    @yield('content')

    <div class="container">
        @include('lk._footer')
    </div>

        <div at-magnifier-wrapper="">
            <div class="at-theme-light">
                <div class="at-base notranslate" translate="no">
                    <div class="Z1-AJ" style="top: 0px; left: 0px;"></div>
                </div>
            </div>
        </div>
    </body>
</html>
