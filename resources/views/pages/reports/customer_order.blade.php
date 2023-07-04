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
                        Customer Orders Report
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
                            id="kt_menu_64a0c28d23654">
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
                                            data-placeholder="Select option" data-dropdown-parent="#kt_menu_64a0c28d23654"
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
                            <div id="kt_ecommerce_report_customer_orders_export" class="d-none"></div>
                            <!--end::Export buttons-->
                        </div>
                        <!--end::Card title--

                    <!--begin::Card toolbar-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            <!--begin::Daterangepicker-->
                            <input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range"
                                id="kt_ecommerce_report_customer_orders_daterangepicker" />
                            <!--end::Daterangepicker-->

                            <!--begin::Filter-->
                            <div class="w-150px">
                                <!--begin::Select2-->
                                <select class="form-select form-select-solid" data-control="select2"
                                    data-hide-search="true" data-placeholder="Status"
                                    data-kt-ecommerce-order-filter="status">
                                    <option></option>
                                    <option value="all">All</option>
                                    <option value="active">Active</option>
                                    <option value="locked">Locked</option>
                                    <option value="disabled">Disabled</option>
                                    <option value="banned">Banned</option>
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
                            <div id="kt_ecommerce_report_customer_orders_export_menu"
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
                        <table class="table align-middle table-row-dashed fs-6 gy-5"
                            id="kt_ecommerce_report_customer_orders_table">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-100px">Customer Name</th>
                                    <th class="min-w-100px">Email</th>
                                    <th class="min-w-100px">Status</th>
                                    <th class="min-w-100px">Date Joined</th>
                                    <th class="text-end min-w-75px">No. Orders</th>
                                    <th class="text-end min-w-75px">No. Products</th>
                                    <th class="text-end min-w-100px">Total</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Emma
                                            Smith</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">smith@kpmg.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        10 Nov 2023, 10:10 pm </td>
                                    <td class="text-end pe-0">
                                        19 </td>
                                    <td class="text-end pe-0">
                                        29 </td>
                                    <td class="text-end">
                                        $2336.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Melody
                                            Macy</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">melody@altbox.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        10 Mar 2023, 10:30 am </td>
                                    <td class="text-end pe-0">
                                        81 </td>
                                    <td class="text-end pe-0">
                                        89 </td>
                                    <td class="text-end">
                                        $741.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Max
                                            Smith</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">max@kt.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-warning">Locked</div>
                                    </td>
                                    <td>
                                        10 Mar 2023, 8:43 pm </td>
                                    <td class="text-end pe-0">
                                        93 </td>
                                    <td class="text-end pe-0">
                                        104 </td>
                                    <td class="text-end">
                                        $1007.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Sean
                                            Bean</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">sean@dellito.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        05 May 2023, 5:20 pm </td>
                                    <td class="text-end pe-0">
                                        9 </td>
                                    <td class="text-end pe-0">
                                        20 </td>
                                    <td class="text-end">
                                        $4890.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Brian
                                            Cox</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">brian@exchange.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        10 Mar 2023, 6:05 pm </td>
                                    <td class="text-end pe-0">
                                        6 </td>
                                    <td class="text-end pe-0">
                                        21 </td>
                                    <td class="text-end">
                                        $2112.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Mikaela
                                            Collins</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">mik@pex.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-warning">Locked</div>
                                    </td>
                                    <td>
                                        20 Jun 2023, 5:30 pm </td>
                                    <td class="text-end pe-0">
                                        59 </td>
                                    <td class="text-end pe-0">
                                        66 </td>
                                    <td class="text-end">
                                        $2946.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Francis
                                            Mitcham</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">f.mit@kpmg.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        22 Sep 2023, 10:10 pm </td>
                                    <td class="text-end pe-0">
                                        23 </td>
                                    <td class="text-end pe-0">
                                        28 </td>
                                    <td class="text-end">
                                        $2583.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Olivia
                                            Wild</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">olivia@corpmail.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        25 Jul 2023, 5:30 pm </td>
                                    <td class="text-end pe-0">
                                        73 </td>
                                    <td class="text-end pe-0">
                                        79 </td>
                                    <td class="text-end">
                                        $2269.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Neil
                                            Owen</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">owen.neil@gmail.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        10 Nov 2023, 11:30 am </td>
                                    <td class="text-end pe-0">
                                        26 </td>
                                    <td class="text-end pe-0">
                                        40 </td>
                                    <td class="text-end">
                                        $2881.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Dan
                                            Wilson</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">dam@consilting.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        25 Oct 2023, 10:30 am </td>
                                    <td class="text-end pe-0">
                                        14 </td>
                                    <td class="text-end pe-0">
                                        25 </td>
                                    <td class="text-end">
                                        $4328.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Emma
                                            Bold</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">emma@intenso.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        19 Aug 2023, 10:10 pm </td>
                                    <td class="text-end pe-0">
                                        38 </td>
                                    <td class="text-end pe-0">
                                        43 </td>
                                    <td class="text-end">
                                        $3723.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Ana
                                            Crown</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">ana.cf@limtel.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        05 May 2023, 10:30 am </td>
                                    <td class="text-end pe-0">
                                        22 </td>
                                    <td class="text-end pe-0">
                                        31 </td>
                                    <td class="text-end">
                                        $4838.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Robert
                                            Doe</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">robert@benko.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        10 Mar 2023, 10:10 pm </td>
                                    <td class="text-end pe-0">
                                        7 </td>
                                    <td class="text-end pe-0">
                                        18 </td>
                                    <td class="text-end">
                                        $3631.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">John
                                            Miller</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">miller@mapple.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        21 Feb 2023, 6:43 am </td>
                                    <td class="text-end pe-0">
                                        82 </td>
                                    <td class="text-end pe-0">
                                        91 </td>
                                    <td class="text-end">
                                        $2131.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Lucy
                                            Kunic</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">lucy.m@fentech.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        05 May 2023, 11:05 am </td>
                                    <td class="text-end pe-0">
                                        90 </td>
                                    <td class="text-end pe-0">
                                        104 </td>
                                    <td class="text-end">
                                        $1720.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Ethan
                                            Wilder</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">ethan@loop.com.au</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        10 Nov 2023, 11:05 am </td>
                                    <td class="text-end pe-0">
                                        87 </td>
                                    <td class="text-end pe-0">
                                        99 </td>
                                    <td class="text-end">
                                        $1846.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Max
                                            Smith</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">max@kt.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        22 Sep 2023, 6:43 am </td>
                                    <td class="text-end pe-0">
                                        29 </td>
                                    <td class="text-end pe-0">
                                        40 </td>
                                    <td class="text-end">
                                        $3913.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Emma
                                            Smith</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">smith@kpmg.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        10 Mar 2023, 11:30 am </td>
                                    <td class="text-end pe-0">
                                        47 </td>
                                    <td class="text-end pe-0">
                                        61 </td>
                                    <td class="text-end">
                                        $2191.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Melody
                                            Macy</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">melody@altbox.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-warning">Locked</div>
                                    </td>
                                    <td>
                                        19 Aug 2023, 11:30 am </td>
                                    <td class="text-end pe-0">
                                        40 </td>
                                    <td class="text-end pe-0">
                                        51 </td>
                                    <td class="text-end">
                                        $531.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Max
                                            Smith</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">max@kt.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        19 Aug 2023, 6:05 pm </td>
                                    <td class="text-end pe-0">
                                        67 </td>
                                    <td class="text-end pe-0">
                                        82 </td>
                                    <td class="text-end">
                                        $2214.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Sean
                                            Bean</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">sean@dellito.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-danger">Banned</div>
                                    </td>
                                    <td>
                                        15 Apr 2023, 11:05 am </td>
                                    <td class="text-end pe-0">
                                        2 </td>
                                    <td class="text-end pe-0">
                                        7 </td>
                                    <td class="text-end">
                                        $1637.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Brian
                                            Cox</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">brian@exchange.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        10 Mar 2023, 6:05 pm </td>
                                    <td class="text-end pe-0">
                                        76 </td>
                                    <td class="text-end pe-0">
                                        89 </td>
                                    <td class="text-end">
                                        $2675.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Mikaela
                                            Collins</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">mik@pex.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        10 Mar 2023, 6:43 am </td>
                                    <td class="text-end pe-0">
                                        85 </td>
                                    <td class="text-end pe-0">
                                        95 </td>
                                    <td class="text-end">
                                        $4971.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Francis
                                            Mitcham</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">f.mit@kpmg.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        25 Oct 2023, 11:05 am </td>
                                    <td class="text-end pe-0">
                                        96 </td>
                                    <td class="text-end pe-0">
                                        102 </td>
                                    <td class="text-end">
                                        $4827.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Olivia
                                            Wild</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">olivia@corpmail.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        25 Oct 2023, 11:30 am </td>
                                    <td class="text-end pe-0">
                                        59 </td>
                                    <td class="text-end pe-0">
                                        66 </td>
                                    <td class="text-end">
                                        $2195.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Neil
                                            Owen</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">owen.neil@gmail.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        19 Aug 2023, 9:23 pm </td>
                                    <td class="text-end pe-0">
                                        23 </td>
                                    <td class="text-end pe-0">
                                        30 </td>
                                    <td class="text-end">
                                        $1238.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Dan
                                            Wilson</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">dam@consilting.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        24 Jun 2023, 5:20 pm </td>
                                    <td class="text-end pe-0">
                                        36 </td>
                                    <td class="text-end pe-0">
                                        51 </td>
                                    <td class="text-end">
                                        $3020.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Emma
                                            Bold</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">emma@intenso.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        19 Aug 2023, 9:23 pm </td>
                                    <td class="text-end pe-0">
                                        94 </td>
                                    <td class="text-end pe-0">
                                        106 </td>
                                    <td class="text-end">
                                        $1500.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Ana
                                            Crown</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">ana.cf@limtel.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        10 Mar 2023, 5:20 pm </td>
                                    <td class="text-end pe-0">
                                        3 </td>
                                    <td class="text-end pe-0">
                                        17 </td>
                                    <td class="text-end">
                                        $2118.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Robert
                                            Doe</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">robert@benko.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        19 Aug 2023, 2:40 pm </td>
                                    <td class="text-end pe-0">
                                        84 </td>
                                    <td class="text-end pe-0">
                                        99 </td>
                                    <td class="text-end">
                                        $683.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">John
                                            Miller</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">miller@mapple.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        21 Feb 2023, 10:30 am </td>
                                    <td class="text-end pe-0">
                                        71 </td>
                                    <td class="text-end pe-0">
                                        79 </td>
                                    <td class="text-end">
                                        $1991.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Lucy
                                            Kunic</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">lucy.m@fentech.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        20 Dec 2023, 11:30 am </td>
                                    <td class="text-end pe-0">
                                        32 </td>
                                    <td class="text-end pe-0">
                                        45 </td>
                                    <td class="text-end">
                                        $2005.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Ethan
                                            Wilder</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">ethan@loop.com.au</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        24 Jun 2023, 11:30 am </td>
                                    <td class="text-end pe-0">
                                        76 </td>
                                    <td class="text-end pe-0">
                                        83 </td>
                                    <td class="text-end">
                                        $571.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Mikaela
                                            Collins</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">mik@pex.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        25 Oct 2023, 6:43 am </td>
                                    <td class="text-end pe-0">
                                        14 </td>
                                    <td class="text-end pe-0">
                                        25 </td>
                                    <td class="text-end">
                                        $959.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Emma
                                            Smith</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">smith@kpmg.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        10 Nov 2023, 10:30 am </td>
                                    <td class="text-end pe-0">
                                        70 </td>
                                    <td class="text-end pe-0">
                                        80 </td>
                                    <td class="text-end">
                                        $5018.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Melody
                                            Macy</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">melody@altbox.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        20 Jun 2023, 11:05 am </td>
                                    <td class="text-end pe-0">
                                        99 </td>
                                    <td class="text-end pe-0">
                                        109 </td>
                                    <td class="text-end">
                                        $482.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Max
                                            Smith</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">max@kt.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        25 Jul 2023, 6:43 am </td>
                                    <td class="text-end pe-0">
                                        26 </td>
                                    <td class="text-end pe-0">
                                        41 </td>
                                    <td class="text-end">
                                        $4683.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Sean
                                            Bean</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">sean@dellito.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        20 Jun 2023, 11:30 am </td>
                                    <td class="text-end pe-0">
                                        12 </td>
                                    <td class="text-end pe-0">
                                        23 </td>
                                    <td class="text-end">
                                        $2100.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Brian
                                            Cox</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">brian@exchange.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-warning">Locked</div>
                                    </td>
                                    <td>
                                        25 Jul 2023, 10:30 am </td>
                                    <td class="text-end pe-0">
                                        33 </td>
                                    <td class="text-end pe-0">
                                        48 </td>
                                    <td class="text-end">
                                        $3876.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Mikaela
                                            Collins</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">mik@pex.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        10 Nov 2023, 11:05 am </td>
                                    <td class="text-end pe-0">
                                        57 </td>
                                    <td class="text-end pe-0">
                                        64 </td>
                                    <td class="text-end">
                                        $2474.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Francis
                                            Mitcham</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">f.mit@kpmg.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        19 Aug 2023, 6:43 am </td>
                                    <td class="text-end pe-0">
                                        26 </td>
                                    <td class="text-end pe-0">
                                        41 </td>
                                    <td class="text-end">
                                        $756.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Olivia
                                            Wild</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">olivia@corpmail.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        22 Sep 2023, 11:05 am </td>
                                    <td class="text-end pe-0">
                                        20 </td>
                                    <td class="text-end pe-0">
                                        34 </td>
                                    <td class="text-end">
                                        $1483.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Neil
                                            Owen</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">owen.neil@gmail.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        25 Jul 2023, 10:10 pm </td>
                                    <td class="text-end pe-0">
                                        69 </td>
                                    <td class="text-end pe-0">
                                        84 </td>
                                    <td class="text-end">
                                        $1253.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Dan
                                            Wilson</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">dam@consilting.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-warning">Locked</div>
                                    </td>
                                    <td>
                                        10 Nov 2023, 11:05 am </td>
                                    <td class="text-end pe-0">
                                        23 </td>
                                    <td class="text-end pe-0">
                                        34 </td>
                                    <td class="text-end">
                                        $340.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Emma
                                            Bold</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">emma@intenso.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-info">Disabled</div>
                                    </td>
                                    <td>
                                        19 Aug 2023, 8:43 pm </td>
                                    <td class="text-end pe-0">
                                        38 </td>
                                    <td class="text-end pe-0">
                                        48 </td>
                                    <td class="text-end">
                                        $4330.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Ana
                                            Crown</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">ana.cf@limtel.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-danger">Banned</div>
                                    </td>
                                    <td>
                                        22 Sep 2023, 11:30 am </td>
                                    <td class="text-end pe-0">
                                        75 </td>
                                    <td class="text-end pe-0">
                                        82 </td>
                                    <td class="text-end">
                                        $4990.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Robert
                                            Doe</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">robert@benko.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        25 Jul 2023, 5:20 pm </td>
                                    <td class="text-end pe-0">
                                        88 </td>
                                    <td class="text-end pe-0">
                                        101 </td>
                                    <td class="text-end">
                                        $4853.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">John
                                            Miller</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">miller@mapple.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        15 Apr 2023, 11:30 am </td>
                                    <td class="text-end pe-0">
                                        50 </td>
                                    <td class="text-end pe-0">
                                        61 </td>
                                    <td class="text-end">
                                        $765.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Lucy
                                            Kunic</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">lucy.m@fentech.com</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        21 Feb 2023, 11:30 am </td>
                                    <td class="text-end pe-0">
                                        7 </td>
                                    <td class="text-end pe-0">
                                        16 </td>
                                    <td class="text-end">
                                        $4731.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="../customers/details.html" class="text-dark text-hover-primary">Ethan
                                            Wilder</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark text-hover-primary">ethan@loop.com.au</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td>
                                        20 Dec 2023, 8:43 pm </td>
                                    <td class="text-end pe-0">
                                        22 </td>
                                    <td class="text-end pe-0">
                                        30 </td>
                                    <td class="text-end">
                                        $2585.00
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
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/apps/ecommerce/reports/customer-orders/customer-orders.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection
