@extends('admin.index')

@section('content')
@php
    $page_title = 'Начисления';
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
            <!--begin::Products-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <x-input-search />
                        <x-export-button />
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <x-daterangepicker />
                        <x-export-dropdown />
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <x-table id="kt_table_users" :data="[
                            'th_title' => [
                                'id' => 'id',
                                'lc' => 'Лицевой счет',
                                'user' => 'Пользователь',
                                'date' => 'Период',
                                'accrual' => 'Начислено',
                                'to-pay' => 'К оплате',
                                ],
                            'button' => 'table.action-button-dropdown',
                            'items'=> [
                                0 => [
                                    'id' => '1',
                                    'lc' => '00026464',
                                    'user' => 'user name',
                                    'date' => '2023-02-02',
                                    'accrual' => '3000',
                                    'to-pay' => '5000',
                                ],
                                1 => [
                                    'id' => '2',
                                    'lc' => '00026464',
                                    'user' => 'user name',
                                    'date' => '2023-02-02',
                                    'accrual' => '3000',
                                    'to-pay' => '5000',
                                ],
                                2 => [
                                    'id' => '3',
                                    'lc' => '00026464',
                                    'user' => 'user name',
                                    'date' => '2023-02-02',
                                    'accrual' => '3000',
                                    'to-pay' => '5000',
                                ],
                                3 => [
                                    'id' => '4',
                                    'lc' => '00026464',
                                    'user' => 'user name',
                                    'date' => '2023-02-02',
                                    'accrual' => '3000',
                                    'to-pay' => '5000',
                                ],
                                4 => [
                                    'id' => '5',
                                    'lc' => '00026464',
                                    'user' => 'user name',
                                    'date' => '2023-02-02',
                                    'accrual' => '3000',
                                    'to-pay' => '5000',
                                ],
                            ],
                        ]" />
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Products-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
<!--end::Content-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/custom/apps/ecommerce/reports/sales/sales.js') }}"></script>
@endsection
