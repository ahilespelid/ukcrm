@php
    $items = config('owner.menu');
@endphp
{{--
<ul class="nav nav-pills">
    @foreach($items as $item)
        <li class="nav-item">
            <a href="{{ route($item['link']) }}" class="nav-link {{ Route::currentRouteName() === $item['link'] ? 'active' : '' }}" aria-current="page">{{ $item['name'] }}</a>
        </li>
    @endforeach
</ul>
--}}
<nav class="navbar navbar-expand-lg navbar-light w-100" style="background-color: #fff;">
    <div class="container-fluid">
        <a href="{{ route('lk') }}" class="navbar-brand">
            <img src="{{ asset('assets/media/uk/logo-uk.gif') }}">
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 w-100 justify-content-end" style="">
            @foreach($items as $item)
            <li class="nav-item">
                <a href="{{ route($item['link']) }}" class="nav-link {{ Route::currentRouteName() === $item['link'] ? 'active' : '' }}" aria-current="page">{{ $item['name'] }}</a>
            </li>
        @endforeach
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('assets/media/uk/user.png') }}" alt="User:logo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                    <li>
                        <span class="dropdown-item">{{ $user->name }}</span>
                    </li>
                    <li>
                        <x-logout-button class="dropdown-item" />
                    </li>
                </ul>
            </li>
        </ul>

      </div>
    </div>
  </nav>
