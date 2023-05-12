<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="{{ Vite::asset('resources/assets/media/uk/logo-uk.gif') }}">
    </a>

    @include('lk._menu')

    <div class="dropdown text-end">
        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ Vite::asset('resources/assets/media/uk/user.png') }}" alt="User:logo" width="32" height="32" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small" style="">
            <li>
                <span class="dropdown-item">{{ $user->name }}</span>
            </li>
            <li>
                <x-logout-button class="dropdown-item" />
            </li>
        </ul>
    </div>
</header>
