@extends('layouts.master')

@section('pageTItle', $pageTitle)

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
                        Edit order
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
                            Edit Sales
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
                <form id="kt_ecommerce_edit_order_form" class="form d-flex flex-column flex-lg-row"
                    data-kt-redirect="{{ route('orders') }}">
                    <!--begin::Aside column-->

                    @csrf
                    @method('PUT')

                    <input type="hidden" name="id" value="{{ $order->id }}">
                    <div class="w-100 flex-lg-row-auto w-lg-300px mb-7 me-7 me-lg-10">

                        <!--begin::order details-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>order Details</h2>
                                </div>
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div class="d-flex flex-column gap-10">
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="form-label">order ID</label>
                                        <!--end::Label-->

                                        <!--begin::Auto-generated ID-->
                                        <div class="fw-bold fs-3">#{{ $order->order_code }}</div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">Payment Method</label>
                                        <!--end::Label-->

                                        <!--begin::Select2-->
                                        <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                            data-placeholder="Select an option" name="payment_method"
                                            id="kt_ecommerce_edit_order_payment">
                                            <option></option>
                                            <option value="cod"
                                                {{ $order->payment->payment_type === 'cash' ? 'selected' : '' }}>Cash on
                                                Delivery</option>
                                            <option value="card"
                                                {{ $order->payment->payment_type === 'card' ? 'selected' : '' }}>
                                                Credit/Debit Card
                                            </option>
                                            <option value="applePay"
                                                {{ $order->payment->payment_type === 'applePay' ? 'selected' : '' }}>
                                                ApplePay
                                            </option>
                                            <option value="paypal"
                                                {{ $order->payment->payment_type === 'paypal' ? 'selected' : '' }}>Paypal
                                            </option>
                                        </select>
                                        <!--end::Select2-->

                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Set the date of the order to process.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">Shipping Method</label>
                                        <!--end::Label-->

                                        <!--begin::Select2-->
                                        <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                            data-placeholder="Select an option" name="shipping_method"
                                            id="kt_ecommerce_edit_order_shipping">
                                            <option></option>
                                            {{-- <option value="none">N/A - Virtual Product</option> --}}
                                            <option value="flat"
                                                {{ $order->shipping->shipping_method === 'flat' ? 'selected' : '' }}>
                                                Standard Rate</option>
                                            <option value="express"
                                                {{ $order->shipping->shipping_method === 'express' ? 'selected' : '' }}>
                                                Express Rate</option>
                                            {{-- <option value="speed" >Speed Overnight Rate</option> --}}
                                        </select>
                                        <!--end::Select2-->

                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Set the date of the order to process.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        {{-- <label class="required form-label">order Date</label> --}}
                                        <!--end::Label-->

                                        <!--begin::Editor-->
                                        {{--  <input id="kt_ecommerce_edit_order_date" name="order_date"
                                            placeholder="Select a date" class="form-control mb-2" value="2021-12-22" /> --}}
                                        <!--end::Editor-->

                                        <!--begin::Description-->
                                        {{-- <div class="text-muted fs-7">Set the date of the order to process.</div> --}}
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::order details-->
                    </div>
                    <!--end::Aside column-->

                    <!--begin::Main column-->
                    <div class="d-flex flex-column flex-lg-row-fluid gap-7 gap-lg-10">

                        <!--begin::order details-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Select Products</h2>
                                </div>
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div class="d-flex flex-column gap-10">
                                    <!--begin::Input group-->
                                    <div>
                                        <!--begin::Label-->
                                        <label class="form-label">Add products to this order</label>
                                        <!--end::Label-->

                                        <!--begin::Selected products-->
                                        <div class="row row-cols-1 row-cols-xl-3 row-cols-md-2 border border-dashed rounded pt-3 pb-1 px-2 mb-5 mh-300px overflow-scroll"
                                            id="kt_ecommerce_edit_order_selected_products">
                                            <!--begin::Empty message-->
                                            <span class="w-100 text-muted d-none">Select one or more products from the list
                                                below by ticking the checkbox.</span>
                                            <!--end::Empty message-->

                                            @php
                                                $orderItems = $order->items;
                                            @endphp
                                            {{-- order item --}}
                                            @foreach ($orderItems as $item)
                                                <x-sales.order-card-item :orderItem="$item" />
                                            @endforeach


                                        </div>
                                        <!--begin::Selected products-->

                                        <!--begin::Total price-->
                                        <div class="fw-bold fs-4 d-inline-flex gap-0">
                                            Total Cost: &#163;
                                            <span id="kt_ecommerce_edit_order_total_price">
                                                {{ $order->total_price }}
                                            </span>
                                        </div>
                                        <!--end::Total price-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Separator-->
                                    <div class="separator"></div>
                                    <!--end::Separator-->

                                    <!--begin::Search products-->
                                    <div class="d-flex align-items-center position-relative mb-n7 ">
                                        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span
                                                class="path1"></span><span class="path2"></span></i> <input type="text"
                                            data-kt-ecommerce-edit-order-filter="search"
                                            class="form-control form-control-solid w-100 w-lg-50 ps-12"
                                            placeholder="Search Products" />
                                    </div>
                                    <!--end::Search products-->

                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5"
                                        id="kt_ecommerce_edit_order_product_table">
                                        <thead>
                                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                <th class="w-25px pe-2"></th>
                                                <th class="min-w-200px">Product</th>
                                                <th class="min-w-100px text-end pe-5">Qty Remaining</th>
                                            </tr>
                                        </thead>
                                        <tbody class="fw-semibold text-gray-600">
                                            @foreach ($products as $product)
                                                <x-sales.order-product-item :product="$product" />
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <!--end::Table-->
                                </div>
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::order details-->

                        <!--begin::order details-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Delivery Details</h2>
                                </div>
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Billing address-->
                                <div class="d-flex flex-column gap-5 gap-md-7">
                                    <!--begin::Title-->
                                    <div class="fs-3 fw-bold mb-n2">Billing Address</div>
                                    <!--end::Title-->

                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column flex-md-row gap-5">
                                        <div class="fv-row flex-row-fluid">
                                            <!--begin::Label-->
                                            <label class="required form-label">Address Line 1</label>
                                            <!--end::Label-->


                                            {{-- @dd($order->location) --}}
                                            <!--begin::Input-->
                                            <input class="form-control" name="billing_address" placeholder="Address Line 1"
                                                value="{{ $order->customer->customerAddress->address1 ?? '' }}" />
                                            <!--end::Input-->
                                        </div>

                                        <div class="flex-row-fluid">
                                            <!--begin::Label-->
                                            <label class="form-label">Address Line 2</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input class="form-control" name="billing_address_2"
                                                placeholder="Address Line 2"
                                                value="{{ $order->customer->location->address2 ?? '' }}" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column flex-md-row gap-5">
                                        <div class="flex-row-fluid">
                                            <!--begin::Label-->
                                            <label class="form-label">City</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input class="form-control" name="billing_city" placeholder=""
                                                value="{{ $order->customer->location->city ?? '' }}" />
                                            <!--end::Input-->
                                        </div>

                                        <div class="fv-row flex-row-fluid">
                                            <!--begin::Label-->
                                            <label class="required form-label">Postcode</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input class="form-control" name="billing_postcode" placeholder=""
                                                value="{{ $order->customer->location->zipcode ?? '' }}" />
                                            <!--end::Input-->
                                        </div>

                                        <div class="fv-row flex-row-fluid">
                                            <!--begin::Label-->
                                            <label class="required form-label">State</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input class="form-control" name="billing_state" placeholder=""
                                                value="{{ $order->customer->location->state ?? '' }}" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">Country</label>
                                        <!--end::Label-->

                                        <!--begin::Select2-->
                                        <select class="form-select" data-placeholder="Select an option"
                                            id="kt_ecommerce_edit_order_billing_country" name="billing_country">
                                            <option></option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->code }}"
                                                    {{ $country->code === $order->customer->country_code ? 'selected' : '' }}
                                                    data-kt-select2-country="{{ asset('assets/media/flags/' . strtolower(str_replace(' ', '-', $country->name)) . '.svg') }}">
                                                    {{ $country->name }}
                                                </option>
                                            @endforeach

                                        </select>
                                        <!--end::Select2-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Checkbox-->
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="same_as_billing" />
                                        <label class="form-check-label" for="same_as_billing">
                                            Shipping address is the same as billing address
                                        </label>
                                    </div>
                                    <!--end::Checkbox-->

                                    <!--begin::Shipping address-->
                                    <div class=" d-flex flex-column gap-5 gap-md-7"
                                        id="kt_ecommerce_edit_order_shipping_form">
                                        <!--begin::Title-->
                                        <div class="fs-3 fw-bold mb-n2">Shipping Address</div>
                                        <!--end::Title-->

                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column flex-md-row gap-5">
                                            <div class="fv-row flex-row-fluid">
                                                <!--begin::Label-->
                                                <label class="form-label">Address Line 1</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control" name="shipping_address"
                                                    placeholder="Address Line 1"
                                                    value="{{ $order->shipping->address }}" />
                                                <!--end::Input-->
                                            </div>

                                            {{-- <div class="flex-row-fluid"> --}}
                                            <!--begin::Label-->
                                            {{-- <label class="form-label">Address Line 2</label> --}}
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            {{-- <input class="form-control" name="shipping_address_2"
                                                    placeholder="Address Line 2"
                                                    value="{{ $order->shipping->address_2 }}" /> --}}
                                            <!--end::Input-->
                                            {{-- </div> --}}
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column flex-md-row gap-5">
                                            <div class="flex-row-fluid">
                                                <!--begin::Label-->
                                                <label class="form-label">City</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control" name="shipping_city" placeholder=""
                                                    value="{{ $order->shipping->city }}" />
                                                <!--end::Input-->
                                            </div>

                                            <div class="fv-row flex-row-fluid">
                                                <!--begin::Label-->
                                                <label class="form-label">Postcode</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control" name="shipping_postcode" placeholder=""
                                                    value="{{ $order->shipping->zipcode }}" />
                                                <!--end::Input-->
                                            </div>

                                            <div class="fv-row flex-row-fluid">
                                                <!--begin::Label-->
                                                <label class="form-label">State</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control" name="shipping_state" placeholder=""
                                                    value="{{ $order->shipping->state }}" />
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label">Country</label>
                                            <!--end::Label-->

                                            <!--begin::Select2-->
                                            <select class="form-select" data-placeholder="Select an option"
                                                id="kt_ecommerce_edit_order_shipping_country" name="shipping_country">
                                                <option value=""></option>
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country->code }}"
                                                        {{ $country->code === $order->shipping->country_code ? 'selected' : '' }}
                                                        data-kt-select2-country="{{ asset('assets/media/flags/' . strtolower(str_replace(' ', '-', $country->name)) . '.svg') }}">
                                                        {{ $country->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <!--end::Select2-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Shipping address-->
                                </div>
                                <!--end::Billing address-->


                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::order details-->
                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <a href="{{ route('orders') }}" id="kt_ecommerce_edit_order_cancel"
                                class="btn btn-light me-5">
                                Cancel
                            </a>
                            <!--end::Button-->

                            <!--begin::Button-->
                            <button type="submit" id="kt_ecommerce_edit_order_submit" class="btn btn-primary">
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
    <script src="{{ asset('assets/js/custom/apps/ecommerce/sales/save-order.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
@endsection
