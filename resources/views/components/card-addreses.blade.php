<div class="card card-flush" id="kt_contacts_list">
    <!--begin::Card header-->
    <div class="card-header pt-7" id="kt_contacts_list_header">
        <!--begin::Form-->
        <form class="d-flex align-items-center position-relative w-100 m-0" autocomplete="off">
            <!--begin::Icon-->
            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
            <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                </svg>
            </span>
            <!--end::Svg Icon-->
            <!--end::Icon-->
            <!--begin::Input-->
            <input type="text" class="form-control form-control-solid ps-13" name="search" value="" placeholder="Найти адрес" />
            <!--end::Input-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-5" id="kt_contacts_list_body">
        <!--begin::List-->
        <div class="scroll-y me-n5 pe-5 h-300px h-xl-auto" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_contacts_list_header" data-kt-scroll-wrappers="#kt_content, #kt_contacts_list_body" data-kt-scroll-stretch="#kt_contacts_list, #kt_contacts_main" data-kt-scroll-offset="5px">

            @foreach ($items as $item)
                <!--begin::addresses-->
                <div class="d-flex flex-stack py-4">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                        <!--begin::Details-->
                        <div class="ms-4">
                            <a href="№" class="fs-6 fw-bolder text-gray-900 text-hover-primary mb-2">{{ $item['address'] }}</a>
                            <div class="fw-bold fs-7 text-muted">{{ $item['group'] }}</div>
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::addresses-->
            @endforeach

            <!--begin::Separator-->
            <div class="separator separator-dashed d-none"></div>
            <!--end::Separator-->
        </div>
        <!--end::List-->
    </div>
    <!--end::Card body-->
</div>
