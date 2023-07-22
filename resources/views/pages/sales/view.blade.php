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
                        Order Details
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
                <!--begin::Order details page-->
                <div class="d-flex flex-column gap-7 gap-lg-10">
                    <div class="d-flex flex-wrap flex-stack gap-5 gap-lg-10">
                        <!--begin:::Tabs-->
                        <ul
                            class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-lg-n2 me-auto">
                            <!--begin:::Tab item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                    href="#kt_ecommerce_sales_order_summary">Order Summary</a>
                            </li>
                            <!--end:::Tab item-->

                            <!--begin:::Tab item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                    href="#kt_ecommerce_sales_order_history">Order History</a>
                            </li>
                            <!--end:::Tab item-->
                        </ul>
                        <!--end:::Tabs-->

                        <!--begin::Button-->
                        <a href="listing.html" class="btn btn-icon btn-light btn-sm ms-auto me-lg-n7">
                            <i class="ki-duotone ki-left fs-2"></i> </a>
                        <!--end::Button-->

                        <!--begin::Button-->
                        <a href="edit-order.html" class="btn btn-success btn-sm me-lg-n7">Edit Order</a>
                        <!--end::Button-->

                        <!--begin::Button-->
                        <a href="add-order.html" class="btn btn-primary btn-sm">Add New Order</a>
                        <!--end::Button-->
                    </div>
                    <!--begin::Order summary-->
                    <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
                        <!--begin::Order details-->
                        <div class="card card-flush py-4 flex-row-fluid">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Order Details (#14534)</h2>
                                </div>
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                        <tbody class="fw-semibold text-gray-600">
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                        <i class="ki-duotone ki-calendar fs-2 me-2"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                        Date Added
                                                    </div>
                                                </td>
                                                <td class="fw-bold text-end">
                                                    {{ date('d/m/Y', strtotime($customerOrder->created_at)) }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                        <i class="ki-duotone ki-wallet fs-2 me-2"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span><span class="path4"></span></i>
                                                        Payment Method
                                                    </div>
                                                </td>
                                                <td class="fw-bold text-end text-capitalize">
                                                    {{ $customerOrder->payment->payment_type }}
                                                    <img src="{{ asset('assets/media/svg/card-logos/' . $customerOrder->payment->card_type . '.svg') }}"
                                                        class="w-50px ms-2" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                        <i class="ki-duotone ki-truck fs-2 me-2"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span><span class="path4"></span><span
                                                                class="path5"></span></i> Shipping Method
                                                    </div>
                                                </td>
                                                <td class="fw-bold text-end text-capitalize">
                                                    {{ $customerOrder->shipping->shipping_method }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--end::Table-->
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Order details-->

                        <!--begin::Customer details-->
                        <div class="card card-flush py-4  flex-row-fluid">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Customer Details</h2>
                                </div>
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                        <tbody class="fw-semibold text-gray-600">
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                        <i class="ki-duotone ki-profile-circle fs-2 me-2"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span></i> Customer
                                                    </div>
                                                </td>

                                                <td class="fw-bold text-end">
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <!--begin:: Avatar -->
                                                        <div class="symbol symbol-circle symbol-25px overflow-hidden me-3">
                                                            <a
                                                                href="{{ route('customer.view', ['id' => $customerOrder->customer_id]) }}">
                                                                @php

                                                                    $avatarStatus = $customerOrder->id / 2 !== 0 ? 'danger' : 'success';
                                                                    $name = "{$customerOrder->customer->first_name} {$customerOrder->customer->last_name}";

                                                                @endphp
                                                                <div
                                                                    class="symbol-label fs-3 bg-light-{{ $avatarStatus }} text-{{ $avatarStatus }}">
                                                                    {{ $name[0] }}
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--end::Avatar-->

                                                        <!--begin::Name-->
                                                        <a href="../customers/details.html"
                                                            class="text-gray-600 text-hover-primary">
                                                            Dan Wilson </a>
                                                        <!--end::Name-->
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                        <i class="ki-duotone ki-sms fs-2 me-2"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                        Email
                                                    </div>
                                                </td>
                                                <td class="fw-bold text-end">
                                                    <a href="{{ route('customer.view', ['id' => $customerOrder->customer_id]) }}"
                                                        class="text-gray-600 text-hover-primary">
                                                        {{ $customerOrder->customer->user->email }} </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                        <i class="ki-duotone ki-phone fs-2 me-2"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                        Phone
                                                    </div>
                                                </td>
                                                <td class="fw-bold text-end">{{ $customerOrder->customer->phone }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--end::Table-->
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Customer details-->
                        <!--begin::Documents-->
                        <div class="card card-flush py-4  flex-row-fluid">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Documents</h2>
                                </div>
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                        <tbody class="fw-semibold text-gray-600">
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                        <i class="ki-duotone ki-devices fs-2 me-2"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span><span class="path4"></span><span
                                                                class="path5"></span></i> Invoice


                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="View the invoice generated by this order.">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span></i></span>
                                                    </div>
                                                </td>
                                                <td class="fw-bold text-end"><a href="../../invoices/view/invoice-3.html"
                                                        class="text-gray-600 text-hover-primary">#INV-{{ $customerOrder->order_code }}</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                        <i class="ki-duotone ki-truck fs-2 me-2"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span><span class="path4"></span><span
                                                                class="path5"></span></i> Shipping


                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="View the shipping manifest generated by this order.">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span></i></span>
                                                    </div>
                                                </td>
                                                <td class="fw-bold text-end"><a href="#"
                                                        class="text-gray-600 text-hover-primary">#SHP-{{ $customerOrder->shipping->track_code }}</a>
                                                </td>
                                            </tr>
                                            {{-- <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                        <i class="ki-duotone ki-discount fs-2 me-2"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                        Reward Points


                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Reward value earned by customer when purchasing this order">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span></i></span>
                                                    </div>
                                                </td>
                                                <td class="fw-bold text-end">600</td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                    <!--end::Table-->
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Documents-->
                    </div>
                    <!--end::Order summary-->

                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_ecommerce_sales_order_summary" role="tab-panel">
                            <!--begin::Orders-->
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
                                    <!--begin::Payment address-->
                                    <div class="card card-flush py-4 flex-row-fluid position-relative">
                                        <!--begin::Background-->
                                        <div
                                            class="position-absolute top-0 end-0 bottom-0 opacity-10 d-flex align-items-center me-5">
                                            <i class="ki-solid ki-two-credit-cart" style="font-size: 14em">
                                            </i>
                                        </div>
                                        <!--end::Background-->

                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Billing Address</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->

                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">

                                            {{-- @dd($customerOrder->customer->location); --}}

                                            {{ $customerOrder->customer->location->address1 ?? $customerOrder->shipping->address }},<br />
                                            {{ $customerOrder->customer->location->city ?? $customerOrder->shipping->city }}
                                            {{ $customerOrder->shipping->zipcode }},<br />
                                            {{ $customerOrder->customer->location->state ?? $customerOrder->shipping->state }},<br />
                                            {{ $customerOrder->customer->location->country_code->name ?? $customerOrder->shipping->country->name }}.
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Payment address-->
                                    <!--begin::Shipping address-->
                                    <div class="card card-flush py-4 flex-row-fluid position-relative">
                                        <!--begin::Background-->
                                        <div
                                            class="position-absolute top-0 end-0 bottom-0 opacity-10 d-flex align-items-center me-5">
                                            <i class="ki-solid ki-delivery" style="font-size: 13em">
                                            </i>
                                        </div>
                                        <!--end::Background-->

                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Shipping Address</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->

                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            {{ $customerOrder->shipping->address }},<br />
                                            {{ $customerOrder->shipping->city }}
                                            {{ $customerOrder->shipping->zipcode }},<br />
                                            {{ $customerOrder->shipping->state }},<br />
                                            {{ $customerOrder->shipping->country->name }}.
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Shipping address-->
                                </div>

                                <!--begin::Product List-->
                                <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Order #14534</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                                <thead>
                                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                        <th class="min-w-175px">Product</th>
                                                        <th class="min-w-100px text-end">SKU</th>
                                                        <th class="min-w-70px text-end">Qty</th>
                                                        <th class="min-w-100px text-end">Unit Price</th>
                                                        <th class="min-w-100px text-end">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fw-semibold text-gray-600">

                                                    @php
                                                        $orders = $customerOrder->items;

                                                        $orderTotal = 0;

                                                        $subtotal = 0;
                                                        $vat = 0;
                                                        $shipping_rate = 0;

                                                        foreach ($orders as $order) {
                                                            $orderTotal = $order->quantity * $order->unit_price;
                                                            $subtotal += $orderTotal;
                                                        }

                                                        $total = $subtotal + $vat;
                                                    @endphp

                                                    {{-- @dd($orders) --}}

                                                    @if ($orders)

                                                        @foreach ($orders as $order)
                                                            <x-sales.product-item :order="$order" />
                                                        @endforeach


                                                        <tr>
                                                            <td colspan="4" class="text-end">
                                                                Subtotal
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-inline-flex">
                                                                    <span class="currency" data-currency="">&#163;</span>
                                                                    <span class="price">
                                                                        {{ $subtotal }}
                                                                    </span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4" class="text-end">
                                                                VAT (0%)
                                                            </td>
                                                            <td class="text-end">

                                                                <div class="d-inline-flex">
                                                                    <span class="currency" data-currency="">&#163;</span>
                                                                    <span class="price">
                                                                        {{ $vat }}
                                                                    </span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4" class="text-end">
                                                                Shipping Rate
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-inline-flex">
                                                                    <span class="currency" data-currency="">&#163;</span>
                                                                    <span class="price">
                                                                        {{ $shipping_rate }}
                                                                    </span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4" class="fs-3 text-dark text-end">
                                                                Grand Total
                                                            </td>
                                                            <td class="text-dark fs-3 fw-bolder text-end">
                                                                <div class="d-inline-flex">
                                                                    <span class="currency" data-currency="">&#163;</span>
                                                                    <span class="price">
                                                                        {{ $total }}
                                                                    </span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Product List-->
                            </div>
                            <!--end::Orders-->
                        </div>
                        <!--end::Tab pane-->

                        <!--begin::Tab pane-->
                        <div class="tab-pane fade" id="kt_ecommerce_sales_order_history" role="tab-panel">
                            <!--begin::Orders-->
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::Order history-->
                                <div class="card card-flush py-4 flex-row-fluid">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Order History</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                                <thead>
                                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                        <th class="min-w-100px">Date Added</th>
                                                        <th class="min-w-175px">Comment</th>
                                                        <th class="min-w-70px">Order Status</th>
                                                        <th class="min-w-100px">Customer Notifed</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fw-semibold text-gray-600">
                                                    <tr>
                                                        <td>02/07/2023</td>
                                                        <td>
                                                            Order completed </td>
                                                        <td>
                                                            <!--begin::Badges-->
                                                            <div class="badge badge-light-success">Completed</div>
                                                            <!--end::Badges-->
                                                        </td>
                                                        <td>
                                                            No </td>
                                                    </tr>
                                                    <tr>
                                                        <td>01/07/2023</td>
                                                        <td>
                                                            Order received by customer </td>
                                                        <td>
                                                            <!--begin::Badges-->
                                                            <div class="badge badge-light-success">Delivered</div>
                                                            <!--end::Badges-->
                                                        </td>
                                                        <td>
                                                            Yes </td>
                                                    </tr>
                                                    <tr>
                                                        <td>30/06/2023</td>
                                                        <td>
                                                            Order shipped from warehouse </td>
                                                        <td>
                                                            <!--begin::Badges-->
                                                            <div class="badge badge-light-primary">Delivering</div>
                                                            <!--end::Badges-->
                                                        </td>
                                                        <td>
                                                            Yes </td>
                                                    </tr>
                                                    <tr>
                                                        <td>29/06/2023</td>
                                                        <td>
                                                            Payment received </td>
                                                        <td>
                                                            <!--begin::Badges-->
                                                            <div class="badge badge-light-primary">Processing</div>
                                                            <!--end::Badges-->
                                                        </td>
                                                        <td>
                                                            No </td>
                                                    </tr>
                                                    <tr>
                                                        <td>28/06/2023</td>
                                                        <td>
                                                            Pending payment </td>
                                                        <td>
                                                            <!--begin::Badges-->
                                                            <div class="badge badge-light-warning">Pending</div>
                                                            <!--end::Badges-->
                                                        </td>
                                                        <td>
                                                            No </td>
                                                    </tr>
                                                    <tr>
                                                        <td>27/06/2023</td>
                                                        <td>
                                                            Payment method updated </td>
                                                        <td>
                                                            <!--begin::Badges-->
                                                            <div class="badge badge-light-warning">Pending</div>
                                                            <!--end::Badges-->
                                                        </td>
                                                        <td>
                                                            No </td>
                                                    </tr>
                                                    <tr>
                                                        <td>26/06/2023</td>
                                                        <td>
                                                            Payment method expired </td>
                                                        <td>
                                                            <!--begin::Badges-->
                                                            <div class="badge badge-light-danger">Failed</div>
                                                            <!--end::Badges-->
                                                        </td>
                                                        <td>
                                                            Yes </td>
                                                    </tr>
                                                    <tr>
                                                        <td>25/06/2023</td>
                                                        <td>
                                                            Pending payment </td>
                                                        <td>
                                                            <!--begin::Badges-->
                                                            <div class="badge badge-light-warning">Pending</div>
                                                            <!--end::Badges-->
                                                        </td>
                                                        <td>
                                                            No </td>
                                                    </tr>
                                                    <tr>
                                                        <td>24/06/2023</td>
                                                        <td>
                                                            Order received </td>
                                                        <td>
                                                            <!--begin::Badges-->
                                                            <div class="badge badge-light-warning">Pending</div>
                                                            <!--end::Badges-->
                                                        </td>
                                                        <td>
                                                            Yes </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Order history-->
                                <!--begin::Order data-->
                                <div class="card card-flush py-4 flex-row-fluid">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Order Data</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5">
                                                <tbody class="fw-semibold text-gray-600">
                                                    <tr>
                                                        <td class="text-muted">IP Address</td>
                                                        <td class="fw-bold text-end">172.68.221.26</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Forwarded IP</td>
                                                        <td class="fw-bold text-end">89.201.163.49</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">User Agent</td>
                                                        <td class="fw-bold text-end">Mozilla/5.0 (Windows NT 10.0; Win64;
                                                            x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110
                                                            Safari/537.36</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Accept Language</td>
                                                        <td class="fw-bold text-end">en-GB,en-US;q=0.9,en;q=0.8</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Order data-->
                            </div>
                            <!--end::Orders-->
                        </div>
                        <!--end::Tab pane-->
                    </div>
                    <!--end::Tab content-->
                </div>
                <!--end::Order details page-->
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
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
@endsection
