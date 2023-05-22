@php
    /*
    object for table
    $data[
        'th_title' => ['title key' => 'title name'],
        'items' => [
            0 => [
                'column title' => 'item data',
                'column title' => 'item data',
                'column title' => '',
                'column title' => 'item data',
            ],
        ],
    ]
    */

    $th_title = isset($data['th_title']) ? $data['th_title'] : '';
    $items = $data['items'];

    if(isset($th_title)) {
        foreach ($th_title as $k => $v) {
            if(isset($items[0][$k])) {
                $column_name[] = $k;
            }
            else {
                if($k == 'role') {
                    $column_name[] = $k;
                }
                else {
                    continue;
                }
            }
        }
    }
    else {
        $th_title = config('admin.rename');
        foreach ($items[0] as $key => $value) {
            $column_name[] = $key;
        }
    }
@endphp
<!--begin::Table-->
<table class="table align-middle table-row-dashed fs-6 gy-5" id="{{ $id }}">
    <!--begin::Table head-->
    <thead>
        <!--begin::Table row-->
        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
            <th class="w-10px pe-2">
                <x-table.checkbox id="{{ $id }}" type="thead" />
            </th>
            @foreach ($column_name as $title)
                <th class="min-w-50px">{{ isset($th_title[$title]) ? $th_title[$title] : $title }}</th>
            @endforeach
            @isset($data['button'])
                <th class="text-end">
                    Действия
                </th>
            @endisset
        </tr>
        <!--end::Table row-->
    </thead>
    <!--end::Table head-->
    <!--begin::Table body-->
    <tbody class="fw-bold text-gray-600">
        @foreach ($items as $item)
            <tr>
                <!--begin::Checkbox-->
                <td>
                    <x-table.checkbox type="tbody" />
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <!--end::Checkbox-->
                @foreach ($column_name as $val)
                    @if($val == 'role')
                        <!--begin::{{$val}}=-->
                        <td>
                            @foreach ( $item->roles as $role )
                                {{ $role->name }}
                            @endforeach
                        </td>
                        <!--end::{{$val}}=-->
                    @else
                        <!--begin::{{$val}}=-->
                        <td>{{ $item[$val] }}</td>
                        <!--end::{{$val}}=-->
                    @endif
                @endforeach

                @isset($data['button'])
                    <td class="text-end min-w-100px">
                        <x-dynamic-component :component="$data['button']" class="mt-4" />
                    </td>
                @endisset
            </tr>
        @endforeach
        <!--end::Table row-->
    </tbody>
    <!--end::Table body-->
</table>
<!--end::Table-->
