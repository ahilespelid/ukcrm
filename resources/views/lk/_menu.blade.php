@php
    $items = config('owner.menu');
@endphp
<ul class="nav nav-pills">
    @foreach($items as $item)
        <li class="nav-item">
            <a href="{{ route($item['link']) }}" class="nav-link {{ Route::currentRouteName() === $item['link'] ? 'active' : '' }}" aria-current="page">{{ $item['name'] }}</a>
        </li>
    @endforeach
</ul>
