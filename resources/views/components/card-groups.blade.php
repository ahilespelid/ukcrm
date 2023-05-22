<!--begin::Contact group wrapper-->
<div class="card card-flush">
    <!--begin::Card header-->
    <div class="card-header pt-7" id="kt_chat_contacts_header">
        <!--begin::Card title-->
        <div class="card-title">
            <h2>Группы домов</h2>
        </div>
        <!--end::Card title-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-5">
        <!--begin::Contact groups-->
        <div class="d-flex flex-column gap-5">
            <!--begin::Contact group-->
            <div class="d-flex flex-stack">
                <a href="#" class="fs-6 fw-bolder text-gray-800 text-hover-primary text-active-primary active">Все группы</a>
                <div class="badge badge-light-primary">{{ $items->count() }}</div>
            </div>

            @foreach ($items as $item)
                <!--begin::Contact group-->
                <div class="d-flex flex-stack">
                    <a href="{{ $item['link'] }}" class="fs-6 fw-bolder text-gray-800 text-hover-primary">{{ $item['name'] }}</a>
                    <div class="badge badge-light-primary">{{ $item['count'] }}</div>
                </div>
                <!--end::Contact group-->
            @endforeach

            {{--заблокированные группы
            <div class="d-flex flex-stack">
                <a href="../../demo1/dist/apps/contacts/getting-started.html" class="fs-6 fw-bolder text-danger text-hover-primary">Blocked</a>
                <div class="badge badge-light-danger">2</div>
            </div>
            --}}
            <!--begin::Contact group-->
        </div>
        <!--end::Contact groups-->
        <!--begin::Separator-->
        <div class="separator my-7"></div>
        <!--begin::Separator-->
        <!--begin::Add contact group-->
        <label class="fs-6 fw-bold form-label">Новая группа</label>

            <form method="POST" action="{{ route('objects.store') }}">
                @csrf
                <div class="input-group">
                <input type="text" class="form-control form-control-solid" name="name" placeholder="Название группы" />
                <button type="submit" class="btn btn-icon btn-light">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </button>
                </div>
            </form>

        <!--end::Add contact group-->
        <!--begin::Separator-->
        <div class="separator my-7"></div>
        <!--begin::Separator-->
        <!--begin::Add new contact-->
        <a href="#" class="btn btn-primary w-100">
        <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
        <span class="svg-icon svg-icon-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor" />
                <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor" />
            </svg>
        </span>
        <!--end::Svg Icon-->Новый адресс</a>
        <!--end::Add new contact-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Contact group wrapper-->
