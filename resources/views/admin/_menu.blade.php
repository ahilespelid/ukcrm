@php
    $items = config('admin.menu');
@endphp

@foreach ( $items as $item )
    {{ view('admin.blocks.menu._'.$item['type'], ['item' => $item]) }}
@endforeach
