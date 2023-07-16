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
                        Product Form
                    </h1>
                    <!--end::Title-->


                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">
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
                            Product
                        </li>
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
                <!--begin::Form-->
                <form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row"
                    data-kt-redirect="{{ route('products') }}">

                    @csrf
                    <!--begin::Aside column-->
                    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                        <!--begin::Thumbnail settings-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Thumbnail</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body text-center pt-0">
                                <!--begin::Image input-->
                                <!--begin::Image input placeholder-->
                                <style>
                                    .image-input-placeholder {
                                        background-image: url('../../../assets/media/svg/files/blank-image.svg');
                                    }

                                    [data-bs-theme="dark"] .image-input-placeholder {
                                        background-image: url('../../../assets/media/svg/files/blank-image-dark.svg');
                                    }
                                </style>
                                <!--end::Image input placeholder-->

                                <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                                    data-kt-image-input="true">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-150px h-150px"></div>
                                    <!--end::Preview existing avatar-->

                                    <!--begin::Label-->
                                    <label
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                        <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span
                                                class="path2"></span></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->

                                    <!--begin::Cancel-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                        <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                                class="path2"></span></i> </span>
                                    <!--end::Cancel-->

                                    <!--begin::Remove-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                        <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                                class="path2"></span></i> </span>
                                    <!--end::Remove-->
                                </div>
                                <!--end::Image input-->

                                <!--begin::Description-->
                                <div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg
                                    image files are accepted</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Thumbnail settings-->
                        <!--begin::Status-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Status</h2>
                                </div>
                                <!--end::Card title-->

                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <div class="rounded-circle bg-success w-15px h-15px"
                                        id="kt_ecommerce_add_product_status"></div>
                                </div>
                                <!--begin::Card toolbar-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Select2-->
                                <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                    data-placeholder="Select an option" id="kt_ecommerce_add_product_status_select"
                                    name="status">
                                    <option></option>
                                    <option value="published" selected>Published</option>
                                    <option value="draft">Draft</option>
                                    <option value="scheduled">Scheduled</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                                <!--end::Select2-->

                                <!--begin::Description-->
                                <div class="text-muted fs-7">Set the product status.</div>
                                <!--end::Description-->

                                <!--begin::Datepicker-->
                                <div class="d-none mt-10">
                                    <label for="kt_ecommerce_add_product_status_datepicker" class="form-label">Select
                                        publishing date and time</label>
                                    <input class="form-control" id="kt_ecommerce_add_product_status_datepicker"
                                        placeholder="Pick date & time" />
                                </div>
                                <!--end::Datepicker-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Status-->

                        <!--begin::Category & tags-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Product Details</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <!--begin::Label-->
                                <label class="form-label">Categories</label>
                                <!--end::Label-->

                                <!--begin::Select2-->
                                <select class="form-select mb-2" data-control="select2" data-placeholder="Select an option"
                                    data-allow-clear="true" multiple="multiple" name="category">
                                    <option></option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <!--end::Select2-->

                                <!--begin::Description-->
                                <div class="text-muted fs-7 mb-7">Add product to a category.</div>
                                <!--end::Description-->
                                <!--end::Input group-->

                                <!--begin::Button-->
                                <a href="{{ route('category.add') }}" class="btn btn-light-primary btn-sm mb-10">
                                    <i class="ki-duotone ki-plus fs-2"></i> Create new category
                                </a>
                                <!--end::Button-->

                                <!--begin::Input group-->
                                <!--begin::Label-->
                                <label class="form-label d-block">Tags</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input id="kt_ecommerce_add_product_tags" name="product_tags"
                                    class="form-control mb-2" value="" />
                                <!--end::Input-->

                                <!--begin::Description-->
                                <div class="text-muted fs-7">Add tags to a product.</div>
                                <!--end::Description-->
                                <!--end::Input group-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Category & tags-->
                        <!--begin::Weekly sales-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Weekly Sales</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <span class="text-muted">No data available. Sales data will begin capturing once product
                                    has been published.</span>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Weekly sales-->


                    </div>
                    <!--end::Aside column-->

                    <!--begin::Main column-->
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <!--begin:::Tabs-->
                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                            <!--begin:::Tab item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                    href="#kt_ecommerce_add_product_general">General</a>
                            </li>
                            <!--end:::Tab item-->

                            <!--begin:::Tab item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                    href="#kt_ecommerce_add_product_advanced">Advanced</a>
                            </li>
                            <!--end:::Tab item-->

                        </ul>
                        <!--end:::Tabs-->
                        <!--begin::Tab content-->
                        <div class="tab-content">
                            <!--begin::Tab pane-->
                            <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general"
                                role="tab-panel">
                                <div class="d-flex flex-column gap-7 gap-lg-10">

                                    <!--begin::General options-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>General</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->

                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Input group-->
                                            <div class="mb-10 fv-row">
                                                <!--begin::Label-->
                                                <label class="required form-label">Product Name</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input type="text" name="product_name" class="form-control mb-2"
                                                    placeholder="Product name" value="" />
                                                <!--end::Input-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">A product name is required and recommended to
                                                    be unique.</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div>
                                                <!--begin::Label-->
                                                <label class="form-label">Description</label>
                                                <!--end::Label-->

                                                <!--begin::Editor-->
                                                <input type="hidden" name="description"
                                                    id="kt_ecommerce_add_product_description_input">
                                                <div id="kt_ecommerce_add_product_description"
                                                    name="kt_ecommerce_add_product_description" class="min-h-200px mb-2">
                                                </div>
                                                <!--end::Editor-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Set a description to the product for better
                                                    visibility.</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Card header-->
                                    </div>
                                    <!--end::General options-->
                                    <!--begin::Media-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Media</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->

                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-2">
                                                <!--begin::Dropzone-->
                                                <div class="dropzone" id="kt_ecommerce_add_product_media">
                                                    <!--begin::Message-->
                                                    <div class="dz-message needsclick">
                                                        <!--begin::Icon-->
                                                        <i class="ki-duotone ki-file-up text-primary fs-3x"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                        <!--end::Icon-->
                                                        <!--begin::Info-->
                                                        <div class="ms-4">
                                                            <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or
                                                                click to upload.</h3>
                                                            <span class="fs-7 fw-semibold text-gray-400">Upload up to 10
                                                                files</span>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                </div>
                                                <!--end::Dropzone-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set the product media gallery.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Card header-->
                                    </div>
                                    <!--end::Media-->

                                    <!--begin::Pricing-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Pricing</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->

                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Input group-->
                                            <div class="mb-10 fv-row">
                                                <!--begin::Label-->
                                                <label class="required form-label">Base Price</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input type="text" name="price" class="form-control mb-2"
                                                    placeholder="Product price" value="" />
                                                <!--end::Input-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Set the product price.</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2">
                                                    Discount Type


                                                    <span class="ms-1" data-bs-toggle="tooltip"
                                                        title="Select a discount type that will be applied to this product">
                                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span></i></span> </label>
                                                <!--End::Label-->

                                                <!--begin::Row-->
                                                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9"
                                                    data-kt-buttons="true"
                                                    data-kt-buttons-target="[data-kt-button='true']">
                                                    <!--begin::Col-->
                                                    <div class="col">
                                                        <!--begin::Option-->
                                                        <label
                                                            class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6"
                                                            data-kt-button="true">
                                                            <!--begin::Radio-->
                                                            <span
                                                                class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                <input class="form-check-input" type="radio"
                                                                    name="discount_option" value="1"
                                                                    checked="checked" />
                                                            </span>
                                                            <!--end::Radio-->

                                                            <!--begin::Info-->
                                                            <span class="ms-5">
                                                                <span class="fs-4 fw-bold text-gray-800 d-block">No
                                                                    Discount</span>
                                                            </span>
                                                            <!--end::Info-->
                                                        </label>
                                                        <!--end::Option-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col">
                                                        <!--begin::Option-->
                                                        <label
                                                            class="btn btn-outline btn-outline-dashed btn-active-light-primary  d-flex text-start p-6"
                                                            data-kt-button="true">
                                                            <!--begin::Radio-->
                                                            <span
                                                                class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                <input class="form-check-input" type="radio"
                                                                    name="discount_option" value="2" />
                                                            </span>
                                                            <!--end::Radio-->

                                                            <!--begin::Info-->
                                                            <span class="ms-5">
                                                                <span class="fs-4 fw-bold text-gray-800 d-block">Percentage
                                                                    %</span>
                                                            </span>
                                                            <!--end::Info-->
                                                        </label>
                                                        <!--end::Option-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col">
                                                        <!--begin::Option-->
                                                        <label
                                                            class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                                                            data-kt-button="true">
                                                            <!--begin::Radio-->
                                                            <span
                                                                class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                <input class="form-check-input" type="radio"
                                                                    name="discount_option" value="3" />
                                                            </span>
                                                            <!--end::Radio-->

                                                            <!--begin::Info-->
                                                            <span class="ms-5">
                                                                <span class="fs-4 fw-bold text-gray-800 d-block">Fixed
                                                                    Price</span>
                                                            </span>
                                                            <!--end::Info-->
                                                        </label>
                                                        <!--end::Option-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="d-none mb-10 fv-row"
                                                id="kt_ecommerce_add_product_discount_percentage">
                                                <!--begin::Label-->
                                                <label class="form-label">Set Discount Percentage</label>
                                                <!--end::Label-->

                                                <!--begin::Slider-->
                                                <div class="d-flex flex-column text-center mb-5">
                                                    <div class="d-flex align-items-start justify-content-center mb-7">
                                                        <span class="fw-bold fs-3x"
                                                            id="kt_ecommerce_add_product_discount_label">0</span>
                                                        <span class="fw-bold fs-4 mt-1 ms-2">%</span>
                                                    </div>
                                                    <div id="kt_ecommerce_add_product_discount_slider" class="noUi-sm">
                                                    </div>
                                                </div>
                                                <!--end::Slider-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Set a percentage discount to be applied on
                                                    this product.</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_fixed">
                                                <!--begin::Label-->
                                                <label class="form-label">Fixed Discounted Price</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input type="text" name="dicsounted_price" class="form-control mb-2"
                                                    placeholder="Discounted price" />
                                                <!--end::Input-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Set the discounted product price. The product
                                                    will be reduced at the determined fixed price</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Tax-->
                                            {{-- <div class="d-flex flex-wrap gap-5">
                                                <!--begin::Input group-->
                                                <div class="fv-row w-100 flex-md-root">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Tax Class</label>
                                                    <!--end::Label-->

                                                    <!--begin::Select2-->
                                                    <select class="form-select mb-2" name="tax"
                                                        data-control="select2" data-hide-search="true"
                                                        data-placeholder="Select an option">
                                                        <option></option>
                                                        <option value="0">Tax Free</option>
                                                        <option value="1">Taxable Goods</option>
                                                        <option value="2">Downloadable Product</option>
                                                    </select>
                                                    <!--end::Select2-->

                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Set the product tax class.</div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="fv-row w-100 flex-md-root">
                                                    <!--begin::Label-->
                                                    <label class="form-label">VAT Amount (%)</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control mb-2" value="" />
                                                    <!--end::Input-->

                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Input group-->
                                            </div> --}}
                                            <!--end:Tax-->
                                        </div>
                                        <!--end::Card header-->
                                    </div>
                                    <!--end::Pricing-->
                                </div>
                            </div>
                            <!--end::Tab pane-->

                            <!--begin::Tab pane-->
                            <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
                                <div class="d-flex flex-column gap-7 gap-lg-10">

                                    <!--begin::Inventory-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Inventory</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->

                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Input group-->
                                            <div class="mb-10 fv-row">
                                                <!--begin::Label-->
                                                <label class="form-label">SKU</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input type="text" name="sku" class="form-control mb-2"
                                                    placeholder="SKU Number" value="" />
                                                <!--end::Input-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Enter the product SKU.</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            {{-- <div class="mb-10 fv-row">
                                                <!--begin::Label-->
                                                <label class="required form-label">Barcode</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input type="text" name="sku" class="form-control mb-2"
                                                    placeholder="Barcode Number" value="" />
                                                <!--end::Input-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Enter the product barcode number.</div>
                                                <!--end::Description-->
                                            </div> --}}
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-10 fv-row">
                                                <!--begin::Label-->
                                                <label class="required form-label">Quantity</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <div class="d-flex gap-3">
                                                    <input type="number" name="quantity" class="form-control mb-2"
                                                        placeholder="Available" value="" />

                                                    {{-- <input type="number" name="warehouse" class="form-control mb-2"
                                                        placeholder="In warehouse" /> --}}
                                                </div>
                                                <!--end::Input-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Enter the product quantity.</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            {{-- <div class="fv-row">
                                                <!--begin::Label-->
                                                <label class="form-label">Allow Backorders</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <div class="form-check form-check-custom form-check-solid mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" />
                                                    <label class="form-check-label">
                                                        Yes
                                                    </label>
                                                </div>
                                                <!--end::Input-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Allow customers to purchase products that are
                                                    out of stock.</div>
                                                <!--end::Description-->
                                            </div> --}}
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Card header-->
                                    </div>
                                    <!--end::Inventory-->

                                    <!--begin::Variations-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Variations</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->

                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Input group-->
                                            <div class="" data-kt-ecommerce-catalog-add-product="auto-options">
                                                <!--begin::Label-->
                                                <label class="form-label">Add Product Variations</label>
                                                <!--end::Label-->

                                                <!--begin::Repeater-->
                                                <div id="kt_ecommerce_add_product_options">
                                                    <!--begin::Form group-->
                                                    <div class="form-group">
                                                        <div data-repeater-list="product_options"
                                                            class="d-flex flex-column gap-3">
                                                            <div data-repeater-item
                                                                class="form-group d-flex flex-wrap align-items-center gap-5">
                                                                <!--begin::Select2-->
                                                                <div class="w-100 w-md-200px">
                                                                    <select class="form-select" name="product_option"
                                                                        data-placeholder="Select a variation"
                                                                        data-kt-ecommerce-catalog-add-product="product_option">
                                                                        <option></option>
                                                                        <option value="color">Color</option>
                                                                        <option value="size">Size</option>
                                                                        <option value="material">Material</option>
                                                                        <option value="style">Style</option>
                                                                    </select>
                                                                </div>
                                                                <!--end::Select2-->

                                                                <!--begin::Input-->
                                                                <input type="text" class="form-control mw-100 w-200px"
                                                                    name="product_option_value" placeholder="Variation" />
                                                                <!--end::Input-->

                                                                <button type="button" data-repeater-delete
                                                                    class="btn btn-sm btn-icon btn-light-danger">
                                                                    <i class="ki-duotone ki-cross fs-1"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i> </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Form group-->

                                                    <!--begin::Form group-->
                                                    <div class="form-group mt-5">
                                                        <button type="button" data-repeater-create
                                                            class="btn btn-sm btn-light-primary">
                                                            <i class="ki-duotone ki-plus fs-2"></i> Add another variation
                                                        </button>
                                                    </div>
                                                    <!--end::Form group-->
                                                </div>
                                                <!--end::Repeater-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Card header-->
                                    </div>
                                    <!--end::Variations-->

                                    <!--begin::Shipping-->
                                    {{-- <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Shipping</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->

                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Input group-->
                                            <div class="fv-row">
                                                <!--begin::Input-->
                                                <div class="form-check form-check-custom form-check-solid mb-2">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="kt_ecommerce_add_product_shipping_checkbox" value="1" />
                                                    <label class="form-check-label">
                                                        This is a physical product
                                                    </label>
                                                </div>
                                                <!--end::Input-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Set if the product is a physical or digital
                                                    item. Physical products may require shipping.</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Shipping form-->
                                            <div id="kt_ecommerce_add_product_shipping" class="d-none mt-10">
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row">
                                                    <!--begin::Label-->
                                                    <label class="form-label">Weight</label>
                                                    <!--end::Label-->

                                                    <!--begin::Editor-->
                                                    <input type="text" name="weight" class="form-control mb-2"
                                                        placeholder="Product weight" value="" />
                                                    <!--end::Editor-->

                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Set a product weight in kilograms (kg).
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="fv-row">
                                                    <!--begin::Label-->
                                                    <label class="form-label">Dimension</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <div class="d-flex flex-wrap flex-sm-nowrap gap-3">
                                                        <input type="number" name="width" class="form-control mb-2"
                                                            placeholder="Width (w)" value="" />
                                                        <input type="number" name="height" class="form-control mb-2"
                                                            placeholder="Height (h)" value="" />
                                                        <input type="number" name="length" class="form-control mb-2"
                                                            placeholder="Lengtn (l)" value="" />
                                                    </div>
                                                    <!--end::Input-->

                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Enter the product dimensions in
                                                        centimeters (cm).</div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Shipping form-->
                                        </div>
                                        <!--end::Card header-->
                                    </div> --}}
                                    <!--end::Shipping-->

                                    <!--begin::Meta options-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Meta Options</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->

                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label">Meta Tag Title</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input type="text" class="form-control mb-2" name="meta_title"
                                                    placeholder="Meta tag name" />
                                                <!--end::Input-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Set a meta tag title. Recommended to be simple
                                                    and precise keywords.</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label">Meta Tag Description</label>
                                                <!--end::Label-->

                                                <!--begin::Editor-->
                                                <input type="hidden" name="meta_description"
                                                    id="kt_ecommerce_add_product_meta_description_input">
                                                <div id="kt_ecommerce_add_product_meta_description"
                                                    name="kt_ecommerce_add_product_meta_description"
                                                    class="min-h-100px mb-2"></div>
                                                <!--end::Editor-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Set a meta tag description to the product for
                                                    increased SEO ranking.</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div>
                                                <!--begin::Label-->
                                                <label class="form-label">Meta Tag Keywords</label>
                                                <!--end::Label-->

                                                <!--begin::Editor-->
                                                <input id="kt_ecommerce_add_product_meta_keywords"
                                                    name="kt_ecommerce_add_product_meta_keywords"
                                                    class="form-control mb-2" />
                                                <!--end::Editor-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Set a list of keywords that the product is
                                                    related to. Separate the keywords by adding a comma <code>,</code>
                                                    between each keyword.</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Card header-->
                                    </div>
                                    <!--end::Meta options-->
                                </div>
                            </div>
                            <!--end::Tab pane-->

                        </div>
                        <!--end::Tab content-->

                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <a href="products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">
                                Cancel
                            </a>
                            <!--end::Button-->

                            <!--begin::Button-->
                            <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                                <span class="indicator-label">
                                    Save Changes
                                </span>
                                <span class="indicator-progress">
                                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                            <!--end::Button-->
                        </div>
                    </div>
                    <!--end::Main column-->
                </form>
                <!--end::Form-->
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
    <script src="{{ asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/apps/ecommerce/catalog/save-product.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
@endsection
