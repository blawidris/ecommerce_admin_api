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
                        Products
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
                            Catalog </li>
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
                                    data-kt-ecommerce-product-filter="search"
                                    class="form-control form-control-solid w-250px ps-12" placeholder="Search Product" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Card title-->

                        <!--begin::Card toolbar-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            <div class="w-100 mw-150px">
                                <!--begin::Select2-->
                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                    data-placeholder="Status" data-kt-ecommerce-product-filter="status">
                                    <option></option>
                                    <option value="all">All</option>
                                    <option value="published">Published</option>
                                    <option value="scheduled">Scheduled</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                                <!--end::Select2-->
                            </div>

                            <!--begin::Add product-->
                            <a href="{{ route('product.add') }}" class="btn btn-primary">
                                Add Product
                            </a>
                            <!--end::Add product-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body pt-0">

                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                data-kt-check-target="#kt_ecommerce_products_table .form-check-input"
                                                value="1" />
                                        </div>
                                    </th>
                                    <th class="min-w-200px">Product</th>
                                    <th class="text-end min-w-100px">SKU</th>
                                    <th class="text-end min-w-70px">Qty</th>
                                    <th class="text-end min-w-100px">Price</th>
                                    <th class="text-end min-w-100px">Rating</th>
                                    <th class="text-end min-w-100px">Status</th>
                                    <th class="text-end min-w-70px">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/1.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 1</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">02686005</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="24">
                                        <span class="fw-bold ms-3">24</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        162 </td>
                                    <td class="text-end pe-0" data-order="rating-3">
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
                                    <td class="text-end pe-0" data-order="Scheduled">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Scheduled</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/2.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 2</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">02816006</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="16">
                                        <span class="fw-bold ms-3">16</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        290 </td>
                                    <td class="text-end pe-0" data-order="rating-4">
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
                                    <td class="text-end pe-0" data-order="Scheduled">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Scheduled</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/3.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 3</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">01574009</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="41">
                                        <span class="fw-bold ms-3">41</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        31 </td>
                                    <td class="text-end pe-0" data-order="rating-4">
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
                                    <td class="text-end pe-0" data-order="Scheduled">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Scheduled</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/4.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 4</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">02228009</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="40">
                                        <span class="fw-bold ms-3">40</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        44 </td>
                                    <td class="text-end pe-0" data-order="rating-4">
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
                                    <td class="text-end pe-0" data-order="Published">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Published</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/5.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 5</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">01947008</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="39">
                                        <span class="fw-bold ms-3">39</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        110 </td>
                                    <td class="text-end pe-0" data-order="rating-3">
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
                                    <td class="text-end pe-0" data-order="Scheduled">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Scheduled</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/6.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 6</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">02791008</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="41">
                                        <span class="fw-bold ms-3">41</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        35 </td>
                                    <td class="text-end pe-0" data-order="rating-4">
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
                                    <td class="text-end pe-0" data-order="Inactive">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-danger">Inactive</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/7.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 7</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">02936004</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="34">
                                        <span class="fw-bold ms-3">34</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        25 </td>
                                    <td class="text-end pe-0" data-order="rating-3">
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
                                    <td class="text-end pe-0" data-order="Scheduled">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Scheduled</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/8.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 8</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">01873002</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="42">
                                        <span class="fw-bold ms-3">42</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        29 </td>
                                    <td class="text-end pe-0" data-order="rating-4">
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
                                    <td class="text-end pe-0" data-order="Inactive">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-danger">Inactive</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/9.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 9</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">03375001</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="16">
                                        <span class="fw-bold ms-3">16</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        14 </td>
                                    <td class="text-end pe-0" data-order="rating-5">
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
                                    <td class="text-end pe-0" data-order="Published">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Published</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/10.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 10</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">01959005</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="40">
                                        <span class="fw-bold ms-3">40</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        73 </td>
                                    <td class="text-end pe-0" data-order="rating-3">
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
                                    <td class="text-end pe-0" data-order="Scheduled">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Scheduled</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/11.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 11</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">01105007</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="38">
                                        <span class="fw-bold ms-3">38</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        169 </td>
                                    <td class="text-end pe-0" data-order="rating-4">
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
                                    <td class="text-end pe-0" data-order="Inactive">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-danger">Inactive</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/12.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 12</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">02595009</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="13">
                                        <span class="fw-bold ms-3">13</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        163 </td>
                                    <td class="text-end pe-0" data-order="rating-5">
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
                                    <td class="text-end pe-0" data-order="Scheduled">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Scheduled</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/13.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 13</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">02739008</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="6">
                                        <span class="badge badge-light-warning">Low stock</span>
                                        <span class="fw-bold text-warning ms-3">6</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        147 </td>
                                    <td class="text-end pe-0" data-order="rating-3">
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
                                    <td class="text-end pe-0" data-order="Inactive">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-danger">Inactive</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/14.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 14</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">03315005</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="3">
                                        <span class="badge badge-light-warning">Low stock</span>
                                        <span class="fw-bold text-warning ms-3">3</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        123 </td>
                                    <td class="text-end pe-0" data-order="rating-5">
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
                                    <td class="text-end pe-0" data-order="Published">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Published</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/15.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 15</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">02184007</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="40">
                                        <span class="fw-bold ms-3">40</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        224 </td>
                                    <td class="text-end pe-0" data-order="rating-3">
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
                                    <td class="text-end pe-0" data-order="Published">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Published</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/16.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 16</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">04748002</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="43">
                                        <span class="fw-bold ms-3">43</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        299 </td>
                                    <td class="text-end pe-0" data-order="rating-5">
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
                                    <td class="text-end pe-0" data-order="Scheduled">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Scheduled</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/17.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 17</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">01752003</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="19">
                                        <span class="fw-bold ms-3">19</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        39 </td>
                                    <td class="text-end pe-0" data-order="rating-4">
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
                                    <td class="text-end pe-0" data-order="Published">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Published</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/18.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 18</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">03959006</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="7">
                                        <span class="badge badge-light-warning">Low stock</span>
                                        <span class="fw-bold text-warning ms-3">7</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        59 </td>
                                    <td class="text-end pe-0" data-order="rating-5">
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
                                    <td class="text-end pe-0" data-order="Published">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Published</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/19.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 19</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">04483005</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="10">
                                        <span class="fw-bold ms-3">10</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        222 </td>
                                    <td class="text-end pe-0" data-order="rating-4">
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
                                    <td class="text-end pe-0" data-order="Scheduled">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Scheduled</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/20.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 20</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">04779005</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="32">
                                        <span class="fw-bold ms-3">32</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        120 </td>
                                    <td class="text-end pe-0" data-order="rating-3">
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
                                    <td class="text-end pe-0" data-order="Inactive">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-danger">Inactive</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/21.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 21</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">04761009</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="43">
                                        <span class="fw-bold ms-3">43</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        294 </td>
                                    <td class="text-end pe-0" data-order="rating-4">
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
                                    <td class="text-end pe-0" data-order="Published">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Published</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/22.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 22</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">04898002</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="18">
                                        <span class="fw-bold ms-3">18</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        73 </td>
                                    <td class="text-end pe-0" data-order="rating-3">
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
                                    <td class="text-end pe-0" data-order="Scheduled">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Scheduled</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/23.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 23</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">03170005</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="29">
                                        <span class="fw-bold ms-3">29</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        43 </td>
                                    <td class="text-end pe-0" data-order="rating-4">
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
                                    <td class="text-end pe-0" data-order="Scheduled">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Scheduled</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/24.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 24</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">04530006</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="19">
                                        <span class="fw-bold ms-3">19</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        65 </td>
                                    <td class="text-end pe-0" data-order="rating-4">
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
                                    <td class="text-end pe-0" data-order="Published">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Published</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/25.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 25</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">02907004</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="35">
                                        <span class="fw-bold ms-3">35</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        200 </td>
                                    <td class="text-end pe-0" data-order="rating-5">
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
                                    <td class="text-end pe-0" data-order="Scheduled">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Scheduled</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/26.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 26</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">04138008</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="8">
                                        <span class="badge badge-light-warning">Low stock</span>
                                        <span class="fw-bold text-warning ms-3">8</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        137 </td>
                                    <td class="text-end pe-0" data-order="rating-4">
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
                                    <td class="text-end pe-0" data-order="Published">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Published</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/27.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 27</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">04691008</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="24">
                                        <span class="fw-bold ms-3">24</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        57 </td>
                                    <td class="text-end pe-0" data-order="rating-3">
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
                                    <td class="text-end pe-0" data-order="Scheduled">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Scheduled</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/28.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 28</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">02373004</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="18">
                                        <span class="fw-bold ms-3">18</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        157 </td>
                                    <td class="text-end pe-0" data-order="rating-3">
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
                                    <td class="text-end pe-0" data-order="Inactive">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-danger">Inactive</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/29.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 29</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">04646008</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="27">
                                        <span class="fw-bold ms-3">27</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        59 </td>
                                    <td class="text-end pe-0" data-order="rating-3">
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
                                    <td class="text-end pe-0" data-order="Inactive">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-danger">Inactive</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/30.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 30</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">01745004</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="10">
                                        <span class="fw-bold ms-3">10</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        55 </td>
                                    <td class="text-end pe-0" data-order="rating-3">
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
                                    <td class="text-end pe-0" data-order="Published">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Published</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/31.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 31</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">03329009</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="47">
                                        <span class="fw-bold ms-3">47</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        135 </td>
                                    <td class="text-end pe-0" data-order="rating-3">
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
                                    <td class="text-end pe-0" data-order="Scheduled">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Scheduled</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/32.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 32</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">01228006</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="6">
                                        <span class="badge badge-light-warning">Low stock</span>
                                        <span class="fw-bold text-warning ms-3">6</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        47 </td>
                                    <td class="text-end pe-0" data-order="rating-5">
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
                                    <td class="text-end pe-0" data-order="Scheduled">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Scheduled</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/33.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 33</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">03143002</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="36">
                                        <span class="fw-bold ms-3">36</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        275 </td>
                                    <td class="text-end pe-0" data-order="rating-3">
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
                                    <td class="text-end pe-0" data-order="Scheduled">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Scheduled</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/34.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 34</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">02459004</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="15">
                                        <span class="fw-bold ms-3">15</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        119 </td>
                                    <td class="text-end pe-0" data-order="rating-5">
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
                                    <td class="text-end pe-0" data-order="Scheduled">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Scheduled</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/35.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 35</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">03910007</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="1">
                                        <span class="badge badge-light-warning">Low stock</span>
                                        <span class="fw-bold text-warning ms-3">1</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        130 </td>
                                    <td class="text-end pe-0" data-order="rating-4">
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
                                    <td class="text-end pe-0" data-order="Scheduled">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Scheduled</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/36.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 36</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">02281004</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="5">
                                        <span class="badge badge-light-warning">Low stock</span>
                                        <span class="fw-bold text-warning ms-3">5</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        200 </td>
                                    <td class="text-end pe-0" data-order="rating-4">
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
                                    <td class="text-end pe-0" data-order="Scheduled">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Scheduled</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/37.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 37</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">03782009</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="43">
                                        <span class="fw-bold ms-3">43</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        14 </td>
                                    <td class="text-end pe-0" data-order="rating-5">
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
                                    <td class="text-end pe-0" data-order="Published">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Published</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/38.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 38</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">04206005</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="42">
                                        <span class="fw-bold ms-3">42</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        198 </td>
                                    <td class="text-end pe-0" data-order="rating-3">
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
                                    <td class="text-end pe-0" data-order="Scheduled">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Scheduled</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/39.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 39</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">04502001</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="29">
                                        <span class="fw-bold ms-3">29</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        21 </td>
                                    <td class="text-end pe-0" data-order="rating-5">
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
                                    <td class="text-end pe-0" data-order="Published">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Published</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/40.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 40</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">01645001</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="9">
                                        <span class="badge badge-light-warning">Low stock</span>
                                        <span class="fw-bold text-warning ms-3">9</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        103 </td>
                                    <td class="text-end pe-0" data-order="rating-5">
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
                                    <td class="text-end pe-0" data-order="Inactive">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-danger">Inactive</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/41.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 41</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">02704004</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="31">
                                        <span class="fw-bold ms-3">31</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        193 </td>
                                    <td class="text-end pe-0" data-order="rating-3">
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
                                    <td class="text-end pe-0" data-order="Published">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Published</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/42.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 42</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">03615002</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="7">
                                        <span class="badge badge-light-warning">Low stock</span>
                                        <span class="fw-bold text-warning ms-3">7</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        11 </td>
                                    <td class="text-end pe-0" data-order="rating-4">
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
                                    <td class="text-end pe-0" data-order="Scheduled">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Scheduled</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/43.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 43</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">04541002</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="10">
                                        <span class="fw-bold ms-3">10</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        111 </td>
                                    <td class="text-end pe-0" data-order="rating-4">
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
                                    <td class="text-end pe-0" data-order="Published">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Published</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/44.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 44</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">03772008</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="17">
                                        <span class="fw-bold ms-3">17</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        176 </td>
                                    <td class="text-end pe-0" data-order="rating-3">
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
                                    <td class="text-end pe-0" data-order="Inactive">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-danger">Inactive</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/45.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 45</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">04628004</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="28">
                                        <span class="fw-bold ms-3">28</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        147 </td>
                                    <td class="text-end pe-0" data-order="rating-5">
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
                                    <td class="text-end pe-0" data-order="Published">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Published</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/46.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 46</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">04360008</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="11">
                                        <span class="fw-bold ms-3">11</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        231 </td>
                                    <td class="text-end pe-0" data-order="rating-4">
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
                                    <td class="text-end pe-0" data-order="Published">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Published</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/47.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 47</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">03343004</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="21">
                                        <span class="fw-bold ms-3">21</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        163 </td>
                                    <td class="text-end pe-0" data-order="rating-3">
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
                                    <td class="text-end pe-0" data-order="Inactive">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-danger">Inactive</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/48.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 48</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">01799007</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="45">
                                        <span class="fw-bold ms-3">45</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        236 </td>
                                    <td class="text-end pe-0" data-order="rating-4">
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
                                    <td class="text-end pe-0" data-order="Inactive">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-danger">Inactive</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/49.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 49</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">01288006</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="42">
                                        <span class="fw-bold ms-3">42</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        182 </td>
                                    <td class="text-end pe-0" data-order="rating-3">
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
                                    <td class="text-end pe-0" data-order="Published">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Published</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="{{ route('product.edit', 1) }}" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url(../../../assets/media/stock/ecommerce/50.gif);"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('product.edit', 1) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">Product 50</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">04943001</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="48">
                                        <span class="fw-bold ms-3">48</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        54 </td>
                                    <td class="text-end pe-0" data-order="rating-3">
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
                                    <td class="text-end pe-0" data-order="Inactive">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-danger">Inactive</div>
                                        <!--end::Badges-->
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
                                                <a href="{{ route('product.edit', 1) }}" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">
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
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/apps/ecommerce/catalog/products.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
@endsection
