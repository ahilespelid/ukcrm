@if ($type == 'thead')
    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="{{ '#'.$id }} .form-check-input" value="1" />
    </div>
@endif

@if ($type == 'tboby')
    <div class="form-check form-check-sm form-check-custom form-check-solid">
        <input class="form-check-input" type="checkbox" data-kt-check="true" value="1" />
    </div>
@endif
