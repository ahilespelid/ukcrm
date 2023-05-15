@extends('admin.index')

@section('content')
@php
    $page_title = 'Настройки импорта/экспорта';
@endphp

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">{{ $page_title }}</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <x-breadcrumb :items="[
                    0 => ['name' => 'Главная', 'link' => 'admin'],
                    1 => ['name' => 'Настройки', 'link' => 'fm_setting'],
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
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Card-->
            <div class="card card-flush pb-0 bgi-position-y-center bgi-no-repeat mb-10" style="background-size: auto calc(100% + 10rem); background-position-x: 100%; background-image: url('assets/media/illustrations/sketchy-1/4.png')">
                <!--begin::Card header-->
                <div class="card-header pt-10">
                    <div class="d-flex align-items-center">
                        <!--begin::Icon-->
                        <div class="symbol symbol-circle me-5">
                            <div class="symbol-label bg-transparent text-primary border border-secondary border-dashed">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs020.svg-->
                                <span class="svg-icon svg-icon-2x svg-icon-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M17.302 11.35L12.002 20.55H21.202C21.802 20.55 22.202 19.85 21.902 19.35L17.302 11.35Z" fill="currentColor" />
                                        <path opacity="0.3" d="M12.002 20.55H2.802C2.202 20.55 1.80202 19.85 2.10202 19.35L6.70203 11.45L12.002 20.55ZM11.302 3.45L6.70203 11.35H17.302L12.702 3.45C12.402 2.85 11.602 2.85 11.302 3.45Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <h2 class="mb-1">Настройки</h2>
                            <div class="text-muted fw-bolder">
                                2.6 GB
                                <span class="mx-3">|</span>758 items
                            </div>
                        </div>
                        <!--end::Title-->
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pb-0">
                    <!--begin::Navs-->
                    <div class="d-flex overflow-auto h-55px">
                        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold flex-nowrap">
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary me-6" href="{{ route('fm_import') }}">Импорт</a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary me-6" href="{{ route('fm_export') }}">Экспорт</a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary me-6 active" href="{{ route('fm_setting') }}">Настройки</a>
                            </li>
                            <!--end::Nav item-->
                        </ul>
                    </div>
                    <!--begin::Navs-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
            <!--begin::Card-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header pt-8">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Опции</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body">
                    <!--begin::Form-->
                    <form class="form" id="kt_file_manager_settings">
                        <!--begin::Input group-->
                        <div class="fv-row row mb-15">
                            <!--begin::Col-->
                            <div class="col-md-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold mt-2">Формат даты</label>
                                <div class="text-muted fs-7">
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-9">
                                <!--begin::Input-->
                                <select name="dateformat" aria-label="Укажите формат" data-hide-search="true" data-control="select2" data-placeholder="Укажите фрмат..." class="form-select mb-2">
                                    <option></option>
                                    <option value="1">10 Sep 2021, 10:15 AM</option>
                                    <option value="2">10/09/2021, 10:15 AM</option>
                                    <option value="3">09-10-2021</option>
                                    <option value="4">Sunday, September 10th 2010</option>
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row row mb-15">
                            <!--begin::Col-->
                            <div class="col-md-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold mt-2">Формат сжатия</label>
                                <div class="text-muted fs-7">Тип сжатия файлов, по умолчанию файлы не архивируются</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-9">
                                <!--begin::Input-->
                                <select name="compression" aria-label="Укажите метод сжатия" data-control="select2" data-hide-search="true" data-placeholder="Укажите мотод сжатия..." class="form-select mb-2">
                                    <option></option>
                                    <option value="1">*.zip</option>
                                    <option value="2">*.7z</option>
                                    <option value="3">*.rar</option>
                                    <option value="4">*.tar.gz</option>
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row row mb-15">
                            <!--begin::Col-->
                            <div class="col-md-3 d-flex align-items-center">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold">Разделитель:</label>
                                <!--end::Label-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-9">
                                <!--begin::Input-->
                                <select name="language" aria-label="Select a Language" data-control="select2" data-placeholder="Укажите объекты для выгрузки" class="form-select mb-2">
                                    <option></option>
                                    <option value="0" @checked(true)>;</option>
                                    <option value="1">:</option>
                                    <option value="2">_</option>
                                    <option value="3">-</option>
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
<!--end::Content-->
@endsection
