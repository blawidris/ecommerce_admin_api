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
                    Products Viewed Report
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
                        id="kt_menu_64a0c28a38f41">
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
                                        data-placeholder="Select option" data-dropdown-parent="#kt_menu_64a0c28a38f41"
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
                            <i class="ki-duotone ki-magnifier fs-2 position-absolute ms-4"><span
                                    class="path1"></span><span class="path2"></span></i> <input type="text"
                                data-kt-ecommerce-order-filter="search"
                                class="form-control form-control-solid w-250px ps-12" placeholder="Search Report" />
                        </div>
                        <!--end::Search-->

                        <!--begin::Export buttons-->
                        <div id="kt_ecommerce_report_views_export" class="d-none"></div>
                        <!--end::Export buttons-->
                    </div>
                    <!--end::Card title-->

                    <!--begin::Card toolbar-->
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <!--begin::Daterangepicker-->
                        <input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range"
                            id="kt_ecommerce_report_views_daterangepicker" />
                        <!--end::Daterangepicker-->

                        <!--begin::Filter-->
                        <div class="w-150px">
                            <!--begin::Select2-->
                            <select class="form-select form-select-solid" data-control="select2"
                                data-hide-search="true" data-placeholder="Rating"
                                data-kt-ecommerce-order-filter="rating">
                                <option></option>
                                <option value="all">All</option>
                                <option value="rating-5">5 Stars</option>
                                <option value="rating-4">4 Stars</option>
                                <option value="rating-3">3 Stars</option>
                                <option value="rating-2">2 Stars</option>
                                <option value="rating-1">1 Stars</option>
                            </select>
                            <!--end::Select2-->
                        </div>
                        <!--end::Filter-->

                        <!--begin::Export dropdown-->
                        <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-exit-up fs-2"><span class="path1"></span><span
                                    class="path2"></span></i> Export Report
                        </button>
                        <!--begin::Menu-->
                        <div id="kt_ecommerce_report_views_export_menu"
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
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_views_table">
                        <thead>
                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-150px">Product</th>
                                <th class="text-end min-w-100px">SKU</th>
                                <th class="text-end min-w-100px">Rating</th>
                                <th class="text-end min-w-100px">Price</th>
                                <th class="text-end min-w-70px">Viewed</th>
                                <th class="text-end min-w-100px">Percent</th>
                            </tr>
                        </thead>
                        <tbody class="fw-semibold text-gray-600">
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/7.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 7</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04861002</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$148.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>219800</span>
                                </td>
                                <td class="text-end pe-0">
                                    21.98%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/35.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 35</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04738002</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$224.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>250440</span>
                                </td>
                                <td class="text-end pe-0">
                                    25.044%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/45.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 45</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04534004</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$88.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>187152</span>
                                </td>
                                <td class="text-end pe-0">
                                    18.7152%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/28.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 28</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04662003</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$231.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>123222</span>
                                </td>
                                <td class="text-end pe-0">
                                    12.32216%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/19.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 19</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01629003</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$158.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>43877</span>
                                </td>
                                <td class="text-end pe-0">
                                    4.38773%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/12.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 12</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04281004</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$25.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>35102</span>
                                </td>
                                <td class="text-end pe-0">
                                    3.51018%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/23.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 23</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02323008</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$28.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>28082</span>
                                </td>
                                <td class="text-end pe-0">
                                    2.80815%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/47.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 47</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04119005</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$192.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>22465</span>
                                </td>
                                <td class="text-end pe-0">
                                    2.24652%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/39.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 39</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01546001</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$50.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>17972</span>
                                </td>
                                <td class="text-end pe-0">
                                    1.79721%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/49.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 49</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02537005</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$234.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>14378</span>
                                </td>
                                <td class="text-end pe-0">
                                    1.43777%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/18.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 18</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03757006</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$162.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>11502</span>
                                </td>
                                <td class="text-end pe-0">
                                    1.15022%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/14.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 14</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04386006</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$287.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>9202</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.92017%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/4.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 4</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02759007</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$101.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>7361</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.73614%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/37.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 37</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01425006</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$75.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>5889</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.58891%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/1.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 1</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01443008</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$160.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>4711</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.47113%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/50.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 50</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01666009</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$164.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>3769</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.3769%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/31.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 31</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02568007</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$159.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>3015</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.30152%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/8.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 8</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03215002</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$64.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>2412</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.24122%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/44.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 44</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04770007</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$131.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>1930</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.19297%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/34.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 34</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04123001</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$204.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>1544</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.15438%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/10.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 10</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01380005</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$273.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>1235</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.1235%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/33.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 33</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01726006</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$81.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>988</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.0988%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/20.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 20</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04157006</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$53.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>790</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.07904%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/42.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 42</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04340001</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$236.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>632</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.06323%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/46.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 46</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02619007</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$145.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>506</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.05059%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/21.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 21</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03924008</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$184.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>405</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.04047%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/29.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 29</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03562005</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$220.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>324</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.03238%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/38.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 38</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02286008</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$14.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>259</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.0259%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/13.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 13</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03380001</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$189.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>207</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.02072%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/17.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 17</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04614007</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$241.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>166</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.01658%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/27.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 27</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03627007</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$296.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>133</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.01326%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/22.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 22</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01327008</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$16.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>106</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.01061%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/40.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 40</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04947009</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$207.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>85</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.00849%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/24.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 24</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01218002</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$195.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>68</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.00679%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/5.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 5</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01601008</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$167.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>54</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.00543%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/36.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 36</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04193001</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$224.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>44</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.00435%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/16.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 16</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02386008</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$136.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>35</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.00348%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/3.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 3</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01930001</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$48.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>28</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.00278%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/25.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 25</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02383001</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$232.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>22</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.00222%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/6.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 6</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01376004</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$13.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>18</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.00178%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/32.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 32</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04434003</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$109.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>14</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.00142%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/43.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 43</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03774005</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$267.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>11</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.00114%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/2.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 2</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02920006</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$152.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>9</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.00091%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/26.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 26</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01115004</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$26.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>7</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.00073%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/9.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 9</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02117007</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$162.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>6</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.00058%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/11.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 11</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01155001</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$185.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>5</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.00047%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/30.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 30</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02626001</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$73.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>4</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.00037%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/15.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 15</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01765006</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$57.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>3</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.0003%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/48.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 48</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04230009</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$209.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>2</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.00024%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url(../../../assets/media/stock/ecommerce/41.gif);"></span>
                                        </a>
                                        <!--end::Thumbnail-->

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../catalog/edit-product.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 41</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02138006</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label ">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$17.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>2</span>
                                </td>
                                <td class="text-end pe-0">
                                    0.00019%
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
<script src="{{asset('assets/js/custom/apps/ecommerce/reports/views/views.js')}}"></script>
<script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
<script src="{{asset('assets/js/custom/widgets.js')}}"></script>
<script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/create-app.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
<!--end::Custom Javascript-->
@endsection
