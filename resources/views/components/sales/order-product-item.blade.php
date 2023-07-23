 <tr>
     <td>
         <div class="form-check form-check-sm form-check-custom form-check-solid">
             <input class="form-check-input" type="checkbox" value="{{ $product->id }}" />
         </div>
     </td>
     <td>
         <div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product"
             data-kt-ecommerce-edit-order-id="product_{{ $product->id }}">
             <!--begin::Thumbnail-->
             <a href="{{ route('product.edit', ['slug' => $product->slug, 'id' => $product->id]) }}"
                 class="symbol symbol-50px">
                 <span class="symbol-label"
                     style="background-image:url({{ asset('storage/' . $product->thumbnail ?? 'assets/media/stock/ecommerce/25.gif') }})"></span>
             </a>
             <!--end::Thumbnail-->

             <div class=" ms-5">
                 <!--begin::Title-->
                 <a href="{{ route('product.edit', ['slug' => $product->slug, 'id' => $product->id]) }}"
                     class="text-gray-800 text-hover-primary fs-5 fw-bold">
                     {{ $product->title }}
                 </a>
                 <!--end::Title-->

                 <!--begin::Price-->
                 <div class="fw-semibold fs-7">Price:
                     <div class="d-inline-flex">
                         <span class="text-muted">&#163;</span>
                         <span data-kt-ecommerce-edit-order-filter="price">{{ $product->price }}</span>
                     </div>
                 </div>
                 <!--end::Price-->

                 <!--begin::SKU-->
                 <div class="text-muted fs-7">SKU: {{ $product->sku }}</div>
                 <!--end::SKU-->
             </div>
         </div>


     </td>



     <td class="text-end pe-5" data-order="48">
         <span class="fw-bold ms-3">{{ $product->quantity }}</span>
     </td>
 </tr>
