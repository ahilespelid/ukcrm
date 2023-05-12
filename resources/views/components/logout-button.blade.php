<!-- Authentication Logout-->
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <a {{ $attributes }} href="{!! route('logout') !!}" {{--menu-link px-5--}}
            onclick="event.preventDefault();
                        this.closest('form').submit();">
        {{ __('Выход') }}
    </a>
</form>
