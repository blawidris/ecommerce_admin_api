@extends('layouts.master')

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
                        Orders Listing
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
                            Sales </li>
                        <!--end::Item-->

                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->

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
                                    class="form-control form-control-solid w-250px ps-12" placeholder="Search Order" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Card title-->

                        <!--begin::Card toolbar-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            <!--begin::Flatpickr-->
                            <div class="input-group w-250px">
                                <input class="form-control form-control-solid rounded rounded-end-0"
                                    placeholder="Pick date range" id="kt_ecommerce_sales_flatpickr" />
                                <button class="btn btn-icon btn-light" id="kt_ecommerce_sales_flatpickr_clear">
                                    <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                            class="path2"></span></i> </button>
                            </div>
                            <!--end::Flatpickr-->

                            <div class="w-100 mw-150px">
                                <!--begin::Select2-->
                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                    data-placeholder="Status" data-kt-ecommerce-order-filter="status">
                                    <option></option>
                                    <option value="all">All</option>
                                    <option value="Cancelled">Cancelled</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Denied">Denied</option>
                                    <option value="Expired">Expired</option>
                                    <option value="Failed">Failed</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Processing">Processing</option>
                                    <option value="Refunded">Refunded</option>
                                    <option value="Delivered">Delivered</option>
                                    <option value="Delivering">Delivering</option>
                                </select>
                                <!--end::Select2-->
                            </div>

                            <!--begin::Add product-->
                            <a href="{{ route('order.add') }}" class="btn btn-primary">
                                Add Order
                            </a>
                            <!--end::Add product-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body pt-0">

                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_sales_table">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                data-kt-check-target="#kt_ecommerce_sales_table .form-check-input"
                                                value="1" />
                                        </div>
                                    </th>
                                    <th class="min-w-100px">Order ID</th>
                                    <th class="min-w-175px">Customer</th>
                                    <th class="text-end min-w-70px">Status</th>
                                    <th class="text-end min-w-100px">Total</th>
                                    <th class="text-end min-w-100px">Date Added</th>
                                    <th class="text-end min-w-100px">Date Modified</th>
                                    <th class="text-end min-w-100px">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12836 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label">
                                                        <img src="../../../assets/media/avatars/300-23.jpg" alt="Dan Wilson"
                                                            class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Dan Wilson</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$139.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-29">
                                        <span class="fw-bold">29/06/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-07-01">
                                        <span class="fw-bold">01/07/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12837 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label">
                                                        <img src="../../../assets/media/avatars/300-13.jpg"
                                                            alt="John Miller" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">John Miller</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$121.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-26">
                                        <span class="fw-bold">26/06/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-30">
                                        <span class="fw-bold">30/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12838 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label fs-3 bg-light-warning text-warning">
                                                        C </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Mikaela
                                                    Collins</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Processing">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Processing</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$167.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-28">
                                        <span class="fw-bold">28/06/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-29">
                                        <span class="fw-bold">29/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12839 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label fs-3 bg-light-success text-success">
                                                        L </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Lucy Kunic</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$453.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-26">
                                        <span class="fw-bold">26/06/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-28">
                                        <span class="fw-bold">28/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12840 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label">
                                                        <img src="../../../assets/media/avatars/300-9.jpg"
                                                            alt="Francis Mitcham" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Francis
                                                    Mitcham</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$223.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-22">
                                        <span class="fw-bold">22/06/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-27">
                                        <span class="fw-bold">27/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12841 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                                        E </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Bold</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$398.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-20">
                                        <span class="fw-bold">20/06/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-26">
                                        <span class="fw-bold">26/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12842 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                                        E </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Bold</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$301.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-23">
                                        <span class="fw-bold">23/06/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-25">
                                        <span class="fw-bold">25/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12843 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label">
                                                        <img src="../../../assets/media/avatars/300-21.jpg"
                                                            alt="Ethan Wilder" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Ethan Wilder</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Delivered">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Delivered</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$474.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-22">
                                        <span class="fw-bold">22/06/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-24">
                                        <span class="fw-bold">24/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12844 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label">
                                                        <img src="../../../assets/media/avatars/300-6.jpg"
                                                            alt="Emma Smith" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Smith</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$112.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-17">
                                        <span class="fw-bold">17/06/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-23">
                                        <span class="fw-bold">23/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12845 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label">
                                                        <img src="../../../assets/media/avatars/300-25.jpg"
                                                            alt="Brian Cox" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Brian Cox</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$221.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-21">
                                        <span class="fw-bold">21/06/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-22">
                                        <span class="fw-bold">22/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12846 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label fs-3 bg-light-primary text-primary">
                                                        N </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Neil Owen</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$365.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-20">
                                        <span class="fw-bold">20/06/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-21">
                                        <span class="fw-bold">21/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12847 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label">
                                                        <img src="../../../assets/media/avatars/300-9.jpg"
                                                            alt="Francis Mitcham" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Francis
                                                    Mitcham</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Denied">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-danger">Denied</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$360.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-15">
                                        <span class="fw-bold">15/06/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-20">
                                        <span class="fw-bold">20/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12848 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                                        M </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Melody Macy</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Delivered">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Delivered</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$298.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-15">
                                        <span class="fw-bold">15/06/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-19">
                                        <span class="fw-bold">19/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12849 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label">
                                                        <img src="../../../assets/media/avatars/300-1.jpg" alt="Max Smith"
                                                            class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Max Smith</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$35.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-12">
                                        <span class="fw-bold">12/06/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-18">
                                        <span class="fw-bold">18/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12850 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label">
                                                        <img src="../../../assets/media/avatars/300-6.jpg"
                                                            alt="Emma Smith" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Smith</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$86.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-12">
                                        <span class="fw-bold">12/06/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-17">
                                        <span class="fw-bold">17/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12851 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label">
                                                        <img src="../../../assets/media/avatars/300-5.jpg" alt="Sean Bean"
                                                            class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Sean Bean</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$373.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-09">
                                        <span class="fw-bold">09/06/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-16">
                                        <span class="fw-bold">16/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12852 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                                        E </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Bold</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$252.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-09">
                                        <span class="fw-bold">09/06/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-15">
                                        <span class="fw-bold">15/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12853 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label">
                                                        <img src="../../../assets/media/avatars/300-23.jpg"
                                                            alt="Dan Wilson" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Dan Wilson</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$338.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-13">
                                        <span class="fw-bold">13/06/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-14">
                                        <span class="fw-bold">14/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12854 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                                        E </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Bold</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$413.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-07">
                                        <span class="fw-bold">07/06/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-13">
                                        <span class="fw-bold">13/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12855 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label fs-3 bg-light-info text-info">
                                                        A </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Robert Doe</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Delivered">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Delivered</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$270.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-09">
                                        <span class="fw-bold">09/06/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-12">
                                        <span class="fw-bold">12/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12856 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                                        M </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Melody Macy</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$127.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-10">
                                        <span class="fw-bold">10/06/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-11">
                                        <span class="fw-bold">11/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12857 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label fs-3 bg-light-success text-success">
                                                        L </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Lucy Kunic</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$75.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-04">
                                        <span class="fw-bold">04/06/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-10">
                                        <span class="fw-bold">10/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12858 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label">
                                                        <img src="../../../assets/media/avatars/300-5.jpg"
                                                            alt="Sean Bean" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Sean Bean</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$473.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-03">
                                        <span class="fw-bold">03/06/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-09">
                                        <span class="fw-bold">09/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12859 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label">
                                                        <img src="../../../assets/media/avatars/300-25.jpg"
                                                            alt="Brian Cox" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Brian Cox</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Refunded">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-info">Refunded</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$205.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-07">
                                        <span class="fw-bold">07/06/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-08">
                                        <span class="fw-bold">08/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12860 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label fs-3 bg-light-info text-info">
                                                        A </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Robert Doe</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$148.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-02">
                                        <span class="fw-bold">02/06/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-07">
                                        <span class="fw-bold">07/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12861 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label fs-3 bg-light-info text-info">
                                                        A </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Robert Doe</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Delivering">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Delivering</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$456.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-04">
                                        <span class="fw-bold">04/06/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-06">
                                        <span class="fw-bold">06/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12862 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                                        M </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Melody Macy</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$268.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-01">
                                        <span class="fw-bold">01/06/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-05">
                                        <span class="fw-bold">05/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12863 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label">
                                                        <img src="../../../assets/media/avatars/300-5.jpg"
                                                            alt="Sean Bean" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Sean Bean</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$266.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-01">
                                        <span class="fw-bold">01/06/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-04">
                                        <span class="fw-bold">04/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12864 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label fs-3 bg-light-primary text-primary">
                                                        N </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Neil Owen</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$311.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-28">
                                        <span class="fw-bold">28/05/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-03">
                                        <span class="fw-bold">03/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12865 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label fs-3 bg-light-info text-info">
                                                        A </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Robert Doe</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Processing">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Processing</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$209.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-26">
                                        <span class="fw-bold">26/05/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-02">
                                        <span class="fw-bold">02/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12866 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label">
                                                        <img src="../../../assets/media/avatars/300-9.jpg"
                                                            alt="Francis Mitcham" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Francis
                                                    Mitcham</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Processing">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Processing</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$85.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-30">
                                        <span class="fw-bold">30/05/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-06-01">
                                        <span class="fw-bold">01/06/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12867 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label">
                                                        <img src="../../../assets/media/avatars/300-6.jpg"
                                                            alt="Emma Smith" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Smith</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Expired">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-danger">Expired</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$169.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-25">
                                        <span class="fw-bold">25/05/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-31">
                                        <span class="fw-bold">31/05/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12868 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                                        E </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Bold</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$80.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-25">
                                        <span class="fw-bold">25/05/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-30">
                                        <span class="fw-bold">30/05/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12869 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label">
                                                        <img src="../../../assets/media/avatars/300-21.jpg"
                                                            alt="Ethan Wilder" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Ethan Wilder</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$415.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-22">
                                        <span class="fw-bold">22/05/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-29">
                                        <span class="fw-bold">29/05/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12870 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label">
                                                        <img src="../../../assets/media/avatars/300-12.jpg"
                                                            alt="Ana Crown" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Ana Crown</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$110.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-25">
                                        <span class="fw-bold">25/05/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-28">
                                        <span class="fw-bold">28/05/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12871 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label">
                                                        <img src="../../../assets/media/avatars/300-6.jpg"
                                                            alt="Emma Smith" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Smith</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Delivering">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Delivering</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$359.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-25">
                                        <span class="fw-bold">25/05/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-27">
                                        <span class="fw-bold">27/05/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12872 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label">
                                                        <img src="../../../assets/media/avatars/300-1.jpg"
                                                            alt="Max Smith" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Max Smith</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$469.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-24">
                                        <span class="fw-bold">24/05/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-26">
                                        <span class="fw-bold">26/05/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12873 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                                        O </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Olivia Wild</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$23.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-24">
                                        <span class="fw-bold">24/05/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-25">
                                        <span class="fw-bold">25/05/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12874 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label">
                                                        <img src="../../../assets/media/avatars/300-6.jpg"
                                                            alt="Emma Smith" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Smith</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$10.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-19">
                                        <span class="fw-bold">19/05/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-24">
                                        <span class="fw-bold">24/05/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12875 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label">
                                                        <img src="../../../assets/media/avatars/300-6.jpg"
                                                            alt="Emma Smith" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Smith</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Cancelled">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-danger">Cancelled</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$56.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-21">
                                        <span class="fw-bold">21/05/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-23">
                                        <span class="fw-bold">23/05/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12876 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                                        E </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Bold</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Pending">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-warning">Pending</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$182.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-17">
                                        <span class="fw-bold">17/05/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-22">
                                        <span class="fw-bold">22/05/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12877 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label">
                                                        <img src="../../../assets/media/avatars/300-23.jpg"
                                                            alt="Dan Wilson" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Dan Wilson</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Processing">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Processing</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$207.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-15">
                                        <span class="fw-bold">15/05/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-21">
                                        <span class="fw-bold">21/05/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12878 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                                        M </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Melody Macy</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$238.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-13">
                                        <span class="fw-bold">13/05/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-20">
                                        <span class="fw-bold">20/05/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12879 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label fs-3 bg-light-info text-info">
                                                        A </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Robert Doe</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$334.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-14">
                                        <span class="fw-bold">14/05/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-19">
                                        <span class="fw-bold">19/05/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12880 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label">
                                                        <img src="../../../assets/media/avatars/300-23.jpg"
                                                            alt="Dan Wilson" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Dan Wilson</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$301.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-17">
                                        <span class="fw-bold">17/05/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-18">
                                        <span class="fw-bold">18/05/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12881 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                                        O </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Olivia Wild</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Processing">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Processing</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$85.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-11">
                                        <span class="fw-bold">11/05/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-17">
                                        <span class="fw-bold">17/05/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12882 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label">
                                                        <img src="../../../assets/media/avatars/300-5.jpg"
                                                            alt="Sean Bean" class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Sean Bean</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$46.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-14">
                                        <span class="fw-bold">14/05/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-16">
                                        <span class="fw-bold">16/05/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12883 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label fs-3 bg-light-success text-success">
                                                        L </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Lucy Kunic</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Completed">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Completed</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$446.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-11">
                                        <span class="fw-bold">11/05/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-15">
                                        <span class="fw-bold">15/05/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12884 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label fs-3 bg-light-success text-success">
                                                        L </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Lucy Kunic</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Pending">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-warning">Pending</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$295.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-09">
                                        <span class="fw-bold">09/05/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-14">
                                        <span class="fw-bold">14/05/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td data-kt-ecommerce-order-filter="order_id">
                                        <a href="{{ route('order.view', 1) }}"
                                            class="text-gray-800 text-hover-primary fw-bold">
                                            12885 </a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('order.view', 1) }}">
                                                    <div class="symbol-label fs-3 bg-light-danger text-danger">
                                                        M </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('order.view', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">Melody Macy</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0" data-order="Expired">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-danger">Expired</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">$226.00</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-12">
                                        <span class="fw-bold">12/05/2023</span>
                                    </td>
                                    <td class="text-end" data-order="2023-05-13">
                                        <span class="fw-bold">13/05/2023</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.view', 1) }}" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('order.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-order-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
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
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/apps/ecommerce/sales/listing.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
@endsection
