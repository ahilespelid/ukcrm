@if ($is_active == true)
    <!--begin::Menu-->
    <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
        @foreach ( $items as $item )
        <li class="menu-item">
            <a href="{{ route($item['link']) }}" target="_blank" class="menu-link px-2">{{ $item['name'] }}</a>
        </li>
        @endforeach
    </ul>
    <!--end::Menu-->
@endif
