@php
    if(is_array($items) && count($items) >= 2) {
        foreach ($items as $key => $value) {
            if($key+1 <  count($items)) {
                $ar_result[] =  $value;
                $ar_result[] = ['name' => 'separator'];
            }
            else {
                $ar_result[] =  $value;
            }
        }
    }
    else {
        $ar_result[] =  $items[0];
    }
@endphp
<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
    @foreach ($ar_result as $item)
        @if ($item['name'] == 'separator')
            <!--begin::Separator-->
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-300 w-5px h-2px"></span>
            </li>
            <!--end::Separator-->
        @else
            <!--begin::Item-->
            <li class="breadcrumb-item text-muted">
                <a href="{{ $item['link']  ? route($item['link']) : 'home' }}" class="text-muted text-hover-primary">{{ $item['name'] }}</a>
            </li>
            <!--end::Item-->
        @endif
    @endforeach
</ul>
