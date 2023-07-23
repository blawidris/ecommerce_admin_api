<div class="col my-2" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_25">
    <div class="d-flex align-items-center border border-dashed p-3 rounded bg-white">
        <!--begin::Thumbnail-->
        <a href="{{ route('product.edit', ['slug' => $orderItem->product->slug, 'id' => $orderItem->product_id]) }}"
            class="symbol symbol-50px">
            <span class="symbol-label"
                style="background-image:url({{ asset('storage/' . $orderItem->product->thumbnail ?? 'assets/media/stock/ecommerce/25.gif') }});"></span>
        </a>
        <!--end::Thumbnail-->

        <div class="ms-5">
            <!--begin::Title-->
            <a href="{{ route('product.edit', ['slug' => $orderItem->product->slug, 'id' => $orderItem->product_id]) }}"
                class="text-gray-800 text-hover-primary fs-5 fw-bold">
                {{ $orderItem->product->title }}
            </a>
            <!--end::Title-->

            <!--begin::Price-->
            <div class="fw-semibold fs-7">
                Price: &#163;<span
                    data-kt-ecommerce-edit-order-filter="price">{{ $orderItem->unit_price * $orderItem->quantity }}</span>
            </div>
            <!--end::Price-->

            <!--begin::SKU-->
            <div class="text-muted fs-7">SKU: {{ $orderItem->product->sku }}</div>
            <!--end::SKU-->
        </div>
    </div>
</div>
