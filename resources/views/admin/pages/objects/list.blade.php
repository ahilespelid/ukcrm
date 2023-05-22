@extends('admin.index')

@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Группы домов</h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <!--end::Separator-->
                    <!--begin::Breadcrumb-->
                    <x-breadcrumb :items="[
                            0 => ['name' => 'Главная', 'link' => 'admin'],
                        ]"/>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-fluid">
                <!--begin::Contacts App- Getting Started-->
                <div class="row g-7">
                    <!--begin::Contact groups-->
                    <div class="col-lg-6 col-xl-3">
                        <x-card-groups :items="$data['houses']" />
                        {{--
                        <x-card-groups :items="
                            [
                                0 => [
                                    'name' => 'Группа 1',
                                    'link' => '#',
                                    'count' => 3,
                                ],
                                1 => [
                                    'name' => 'Группа 2',
                                    'link' => '#',
                                    'count' => 2,
                                ],
                                2 => [
                                    'name' => 'Группа 3',
                                    'link' => '#',
                                    'count' => 3,
                                ],
                            ]"/>
                            --}}
                    </div>
                    <!--end::Contact groups-->
                    <!--begin::Search-->
                    <div class="col-lg-6 col-xl-6">
                        <!--begin::Contacts-->
                        <x-card-addreses :items="
                            [
                                0 => [
                                    'address' => '10-й проезд Марьиной Рощи 1',
                                    'group' => 'Группа 1'
                                ],
                                1 => [
                                    'address' => 'улица 10-летия Октября 12',
                                    'group' => 'Группа 2'
                                ],
                                2 => [
                                    'address' => 'Бабаевская улица 3',
                                    'group' => 'Группа 3'
                                ],
                            ]" />
                        <!--end::Contacts-->
                    </div>
                    <!--end::Search-->
                    <!--begin::Content-->
                    <div class="col-xl-3">
                        <!--begin::Card-->
                        <div class="card card-flush h-lg-100" id="kt_contacts_main">
                            <!--begin::Card body-->
                            <div class="card-body p-0">
                                <!--begin::Wrapper-->
                                <div class="card-px text-center py-20 my-10">
                                    <!--begin::Title-->
                                    <h2 class="fs-2x fw-bolder mb-10">Добавление нового объекта</h2>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <p class="text-gray-400 fs-4 fw-bold mb-10"></p>
                                    <!--end::Description-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-primary">Добавить дом</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Illustration-->
                                <div class="text-center px-4">
                                    <img class="mw-100 mh-300px" alt="" src="{{ asset('assets/media/illustrations/sketchy-1/5.png') }}" />
                                </div>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Contacts App- Getting Started-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
@endsection
