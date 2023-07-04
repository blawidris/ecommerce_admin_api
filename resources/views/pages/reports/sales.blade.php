@extends('layouts.master')

@section('pageTitle', $pageTitle)

@section('content')
<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">

    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">



            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                    Sales Report
                </h1>
                <!--end::Title-->


                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="../../../index.html" class="text-muted text-hover-primary">
                            Home </a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        eCommerce </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        Reports </li>
                    <!--end::Item-->

                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Filter menu-->
                <div class="m-0">
                    <!--begin::Menu toggle-->
                    <a href="#"
                        class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-filter fs-6 text-muted me-1"><span class="path1"></span><span
                                class="path2"></span></i>
                        Filter
                    </a>
                    <!--end::Menu toggle-->



                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                        id="kt_menu_64a0c28b2012b">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bold">Filter Options</div>
                        </div>
                        <!--end::Header-->

                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->

                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-semibold">Status:</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid" data-kt-select2="true"
                                        data-placeholder="Select option" data-dropdown-parent="#kt_menu_64a0c28b2012b"
                                        data-allow-clear="true">
                                        <option></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-semibold">Member Type:</label>
                                <!--end::Label-->

                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                        <span class="form-check-label">
                                            Author
                                        </span>
                                    </label>
                                    <!--end::Options-->

                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2"
                                            checked="checked" />
                                        <span class="form-check-label">
                                            Customer
                                        </span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-semibold">Notifications:</label>
                                <!--end::Label-->

                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications"
                                        checked />
                                    <label class="form-check-label">
                                        Enabled
                                    </label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                    data-kt-menu-dismiss="true">Reset</button>

                                <button type="submit" class="btn btn-sm btn-primary"
                                    data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                </div>
                <!--end::Filter menu-->


                <!--begin::Secondary button-->
                <!--end::Secondary button-->

                <!--begin::Primary button-->
                <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_create_app">
                    Create </a>
                <!--end::Primary button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Content-->
    <div id="kt_app_content" class="app-content  flex-column-fluid ">


        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container  container-xxl ">
            <!--begin::Products-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span
                                    class="path1"></span><span class="path2"></span></i> <input type="text"
                                data-kt-ecommerce-order-filter="search"
                                class="form-control form-control-solid w-250px ps-12" placeholder="Search Report" />
                        </div>
                        <!--end::Search-->

                        <!--begin::Export buttons-->
                        <div id="kt_ecommerce_report_sales_export" class="d-none"></div>
                        <!--end::Export buttons-->
                    </div>
                    <!--end::Card title-->

                    <!--begin::Card toolbar-->
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <!--begin::Daterangepicker-->
                        <input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range"
                            id="kt_ecommerce_report_sales_daterangepicker" />
                        <!--end::Daterangepicker-->

                        <!--begin::Export dropdown-->
                        <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-exit-up fs-2"><span class="path1"></span><span
                                    class="path2"></span></i> Export Report
                        </button>
                        <!--begin::Menu-->
                        <div id="kt_ecommerce_report_sales_export_menu"
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-export="copy">
                                    Copy to clipboard
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-export="excel">
                                    Export as Excel
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-export="csv">
                                    Export as CSV
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-export="pdf">
                                    Export as PDF
                                </a>
                            </div>
                            <!--end::Menu item-->

                        </div>
                        <!--end::Menu-->
                        <!--end::Export dropdown-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body pt-0">

                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_sales_table">
                        <thead>
                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-100px">Date</th>
                                <th class="text-end min-w-75px">No. Orders</th>
                                <th class="text-end min-w-75px">Products Sold</th>
                                <th class="text-end min-w-75px">Tax</th>
                                <th class="text-end min-w-100px">Total</th>
                            </tr>
                        </thead>
                        <tbody class="fw-semibold text-gray-600">
                            <tr>
                                <td>
                                    Aug 19, 2023 </td>
                                <td class="text-end pe-0">
                                    6 </td>
                                <td class="text-end pe-0">
                                    11 </td>
                                <td class="text-end pe-0">
                                    $47.00
                                </td>
                                <td class="text-end">
                                    $315.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Jun 24, 2023 </td>
                                <td class="text-end pe-0">
                                    13 </td>
                                <td class="text-end pe-0">
                                    16 </td>
                                <td class="text-end pe-0">
                                    $4.00
                                </td>
                                <td class="text-end">
                                    $24.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Jun 20, 2023 </td>
                                <td class="text-end pe-0">
                                    4 </td>
                                <td class="text-end pe-0">
                                    6 </td>
                                <td class="text-end pe-0">
                                    $42.00
                                </td>
                                <td class="text-end">
                                    $277.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    May 05, 2023 </td>
                                <td class="text-end pe-0">
                                    18 </td>
                                <td class="text-end pe-0">
                                    23 </td>
                                <td class="text-end pe-0">
                                    $29.00
                                </td>
                                <td class="text-end">
                                    $196.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Feb 21, 2023 </td>
                                <td class="text-end pe-0">
                                    8 </td>
                                <td class="text-end pe-0">
                                    11 </td>
                                <td class="text-end pe-0">
                                    $21.00
                                </td>
                                <td class="text-end">
                                    $143.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Sep 22, 2023 </td>
                                <td class="text-end pe-0">
                                    14 </td>
                                <td class="text-end pe-0">
                                    17 </td>
                                <td class="text-end pe-0">
                                    $19.00
                                </td>
                                <td class="text-end">
                                    $128.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    May 05, 2023 </td>
                                <td class="text-end pe-0">
                                    5 </td>
                                <td class="text-end pe-0">
                                    8 </td>
                                <td class="text-end pe-0">
                                    $70.00
                                </td>
                                <td class="text-end">
                                    $465.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Mar 10, 2023 </td>
                                <td class="text-end pe-0">
                                    15 </td>
                                <td class="text-end pe-0">
                                    18 </td>
                                <td class="text-end pe-0">
                                    $2.00
                                </td>
                                <td class="text-end">
                                    $15.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Oct 25, 2023 </td>
                                <td class="text-end pe-0">
                                    8 </td>
                                <td class="text-end pe-0">
                                    11 </td>
                                <td class="text-end pe-0">
                                    $6.00
                                </td>
                                <td class="text-end">
                                    $43.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Mar 10, 2023 </td>
                                <td class="text-end pe-0">
                                    20 </td>
                                <td class="text-end pe-0">
                                    24 </td>
                                <td class="text-end pe-0">
                                    $40.00
                                </td>
                                <td class="text-end">
                                    $269.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Sep 22, 2023 </td>
                                <td class="text-end pe-0">
                                    14 </td>
                                <td class="text-end pe-0">
                                    16 </td>
                                <td class="text-end pe-0">
                                    $61.00
                                </td>
                                <td class="text-end">
                                    $407.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Jul 25, 2023 </td>
                                <td class="text-end pe-0">
                                    15 </td>
                                <td class="text-end pe-0">
                                    19 </td>
                                <td class="text-end pe-0">
                                    $27.00
                                </td>
                                <td class="text-end">
                                    $179.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Nov 10, 2023 </td>
                                <td class="text-end pe-0">
                                    13 </td>
                                <td class="text-end pe-0">
                                    17 </td>
                                <td class="text-end pe-0">
                                    $60.00
                                </td>
                                <td class="text-end">
                                    $401.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Jul 25, 2023 </td>
                                <td class="text-end pe-0">
                                    8 </td>
                                <td class="text-end pe-0">
                                    10 </td>
                                <td class="text-end pe-0">
                                    $31.00
                                </td>
                                <td class="text-end">
                                    $207.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Dec 20, 2023 </td>
                                <td class="text-end pe-0">
                                    9 </td>
                                <td class="text-end pe-0">
                                    14 </td>
                                <td class="text-end pe-0">
                                    $52.00
                                </td>
                                <td class="text-end">
                                    $349.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Aug 19, 2023 </td>
                                <td class="text-end pe-0">
                                    20 </td>
                                <td class="text-end pe-0">
                                    24 </td>
                                <td class="text-end pe-0">
                                    $17.00
                                </td>
                                <td class="text-end">
                                    $110.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Oct 25, 2023 </td>
                                <td class="text-end pe-0">
                                    2 </td>
                                <td class="text-end pe-0">
                                    4 </td>
                                <td class="text-end pe-0">
                                    $84.00
                                </td>
                                <td class="text-end">
                                    $563.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    May 05, 2023 </td>
                                <td class="text-end pe-0">
                                    11 </td>
                                <td class="text-end pe-0">
                                    15 </td>
                                <td class="text-end pe-0">
                                    $40.00
                                </td>
                                <td class="text-end">
                                    $266.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Jun 24, 2023 </td>
                                <td class="text-end pe-0">
                                    11 </td>
                                <td class="text-end pe-0">
                                    14 </td>
                                <td class="text-end pe-0">
                                    $34.00
                                </td>
                                <td class="text-end">
                                    $227.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Dec 20, 2023 </td>
                                <td class="text-end pe-0">
                                    15 </td>
                                <td class="text-end pe-0">
                                    19 </td>
                                <td class="text-end pe-0">
                                    $42.00
                                </td>
                                <td class="text-end">
                                    $282.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Sep 22, 2023 </td>
                                <td class="text-end pe-0">
                                    18 </td>
                                <td class="text-end pe-0">
                                    21 </td>
                                <td class="text-end pe-0">
                                    $43.00
                                </td>
                                <td class="text-end">
                                    $288.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Feb 21, 2023 </td>
                                <td class="text-end pe-0">
                                    10 </td>
                                <td class="text-end pe-0">
                                    14 </td>
                                <td class="text-end pe-0">
                                    $33.00
                                </td>
                                <td class="text-end">
                                    $223.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Jul 25, 2023 </td>
                                <td class="text-end pe-0">
                                    14 </td>
                                <td class="text-end pe-0">
                                    19 </td>
                                <td class="text-end pe-0">
                                    $49.00
                                </td>
                                <td class="text-end">
                                    $326.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Nov 10, 2023 </td>
                                <td class="text-end pe-0">
                                    7 </td>
                                <td class="text-end pe-0">
                                    12 </td>
                                <td class="text-end pe-0">
                                    $34.00
                                </td>
                                <td class="text-end">
                                    $224.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Mar 10, 2023 </td>
                                <td class="text-end pe-0">
                                    12 </td>
                                <td class="text-end pe-0">
                                    15 </td>
                                <td class="text-end pe-0">
                                    $4.00
                                </td>
                                <td class="text-end">
                                    $29.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    May 05, 2023 </td>
                                <td class="text-end pe-0">
                                    5 </td>
                                <td class="text-end pe-0">
                                    8 </td>
                                <td class="text-end pe-0">
                                    $87.00
                                </td>
                                <td class="text-end">
                                    $583.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Nov 10, 2023 </td>
                                <td class="text-end pe-0">
                                    11 </td>
                                <td class="text-end pe-0">
                                    13 </td>
                                <td class="text-end pe-0">
                                    $16.00
                                </td>
                                <td class="text-end">
                                    $106.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Nov 10, 2023 </td>
                                <td class="text-end pe-0">
                                    16 </td>
                                <td class="text-end pe-0">
                                    21 </td>
                                <td class="text-end pe-0">
                                    $33.00
                                </td>
                                <td class="text-end">
                                    $219.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Jun 20, 2023 </td>
                                <td class="text-end pe-0">
                                    1 </td>
                                <td class="text-end pe-0">
                                    3 </td>
                                <td class="text-end pe-0">
                                    $62.00
                                </td>
                                <td class="text-end">
                                    $416.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Sep 22, 2023 </td>
                                <td class="text-end pe-0">
                                    14 </td>
                                <td class="text-end pe-0">
                                    17 </td>
                                <td class="text-end pe-0">
                                    $51.00
                                </td>
                                <td class="text-end">
                                    $341.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Aug 19, 2023 </td>
                                <td class="text-end pe-0">
                                    3 </td>
                                <td class="text-end pe-0">
                                    5 </td>
                                <td class="text-end pe-0">
                                    $25.00
                                </td>
                                <td class="text-end">
                                    $168.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Oct 25, 2023 </td>
                                <td class="text-end pe-0">
                                    14 </td>
                                <td class="text-end pe-0">
                                    18 </td>
                                <td class="text-end pe-0">
                                    $16.00
                                </td>
                                <td class="text-end">
                                    $104.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Jun 24, 2023 </td>
                                <td class="text-end pe-0">
                                    6 </td>
                                <td class="text-end pe-0">
                                    8 </td>
                                <td class="text-end pe-0">
                                    $40.00
                                </td>
                                <td class="text-end">
                                    $269.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Feb 21, 2023 </td>
                                <td class="text-end pe-0">
                                    13 </td>
                                <td class="text-end pe-0">
                                    15 </td>
                                <td class="text-end pe-0">
                                    $46.00
                                </td>
                                <td class="text-end">
                                    $307.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Feb 21, 2023 </td>
                                <td class="text-end pe-0">
                                    14 </td>
                                <td class="text-end pe-0">
                                    18 </td>
                                <td class="text-end pe-0">
                                    $34.00
                                </td>
                                <td class="text-end">
                                    $225.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Apr 15, 2023 </td>
                                <td class="text-end pe-0">
                                    3 </td>
                                <td class="text-end pe-0">
                                    6 </td>
                                <td class="text-end pe-0">
                                    $15.00
                                </td>
                                <td class="text-end">
                                    $97.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Feb 21, 2023 </td>
                                <td class="text-end pe-0">
                                    8 </td>
                                <td class="text-end pe-0">
                                    13 </td>
                                <td class="text-end pe-0">
                                    $69.00
                                </td>
                                <td class="text-end">
                                    $457.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Jun 24, 2023 </td>
                                <td class="text-end pe-0">
                                    20 </td>
                                <td class="text-end pe-0">
                                    25 </td>
                                <td class="text-end pe-0">
                                    $71.00
                                </td>
                                <td class="text-end">
                                    $472.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Jun 20, 2023 </td>
                                <td class="text-end pe-0">
                                    19 </td>
                                <td class="text-end pe-0">
                                    24 </td>
                                <td class="text-end pe-0">
                                    $69.00
                                </td>
                                <td class="text-end">
                                    $459.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    May 05, 2023 </td>
                                <td class="text-end pe-0">
                                    6 </td>
                                <td class="text-end pe-0">
                                    10 </td>
                                <td class="text-end pe-0">
                                    $10.00
                                </td>
                                <td class="text-end">
                                    $65.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Jun 20, 2023 </td>
                                <td class="text-end pe-0">
                                    6 </td>
                                <td class="text-end pe-0">
                                    9 </td>
                                <td class="text-end pe-0">
                                    $31.00
                                </td>
                                <td class="text-end">
                                    $205.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Jul 25, 2023 </td>
                                <td class="text-end pe-0">
                                    6 </td>
                                <td class="text-end pe-0">
                                    9 </td>
                                <td class="text-end pe-0">
                                    $31.00
                                </td>
                                <td class="text-end">
                                    $205.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Jun 24, 2023 </td>
                                <td class="text-end pe-0">
                                    10 </td>
                                <td class="text-end pe-0">
                                    12 </td>
                                <td class="text-end pe-0">
                                    $21.00
                                </td>
                                <td class="text-end">
                                    $142.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Feb 21, 2023 </td>
                                <td class="text-end pe-0">
                                    1 </td>
                                <td class="text-end pe-0">
                                    5 </td>
                                <td class="text-end pe-0">
                                    $19.00
                                </td>
                                <td class="text-end">
                                    $125.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Jun 20, 2023 </td>
                                <td class="text-end pe-0">
                                    19 </td>
                                <td class="text-end pe-0">
                                    23 </td>
                                <td class="text-end pe-0">
                                    $76.00
                                </td>
                                <td class="text-end">
                                    $506.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Jun 24, 2023 </td>
                                <td class="text-end pe-0">
                                    2 </td>
                                <td class="text-end pe-0">
                                    6 </td>
                                <td class="text-end pe-0">
                                    $34.00
                                </td>
                                <td class="text-end">
                                    $226.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Nov 10, 2023 </td>
                                <td class="text-end pe-0">
                                    6 </td>
                                <td class="text-end pe-0">
                                    10 </td>
                                <td class="text-end pe-0">
                                    $42.00
                                </td>
                                <td class="text-end">
                                    $279.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Jul 25, 2023 </td>
                                <td class="text-end pe-0">
                                    8 </td>
                                <td class="text-end pe-0">
                                    12 </td>
                                <td class="text-end pe-0">
                                    $26.00
                                </td>
                                <td class="text-end">
                                    $176.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    May 05, 2023 </td>
                                <td class="text-end pe-0">
                                    5 </td>
                                <td class="text-end pe-0">
                                    7 </td>
                                <td class="text-end pe-0">
                                    $69.00
                                </td>
                                <td class="text-end">
                                    $460.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Dec 20, 2023 </td>
                                <td class="text-end pe-0">
                                    8 </td>
                                <td class="text-end pe-0">
                                    13 </td>
                                <td class="text-end pe-0">
                                    $18.00
                                </td>
                                <td class="text-end">
                                    $117.00
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Products-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
<!--end::Content wrapper-->
@endsection

@section('custom-js')
<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<!--end::Vendors Javascript-->

<!--begin::Custom Javascript(used for this page only)-->
<script src="{{asset('assets/js/custom/apps/ecommerce/reports/sales/sales.js')}}"></script>
<script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
<script src="{{asset('assets/js/custom/widgets.js')}}"></script>
<script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/create-app.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->
@endsection
