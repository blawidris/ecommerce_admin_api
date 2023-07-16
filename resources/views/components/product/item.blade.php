 <tr>
     <td>
         <div class="form-check form-check-sm form-check-custom form-check-solid">
             <input class="form-check-input" type="checkbox" value="1" />
         </div>
     </td>
     <td>
         <div class="d-flex align-items-center">
             <!--begin::Thumbnail-->
             <a href="{{ route('product.edit', ['slug' => $item->slug]) }}" class="symbol symbol-50px">
                 <span class="symbol-label"
                     style="background-image:url({{ asset('storage/' . $item->thumbnail) ?? '' }});"></span>
             </a>
             <!--end::Thumbnail-->

             <div class="ms-5">
                 <!--begin::Title-->
                 <a href="{{ route('product.edit', ['slug' => $item->slug]) }}"
                     class="text-gray-800 text-hover-primary fs-5 fw-bold"
                     data-kt-ecommerce-product-filter="product_name">{{ $item->title }}</a>
                 <!--end::Title-->
             </div>
         </div>
     </td>
     {{-- <td class="text-end pe-0">
         <span class="fw-bold">02686005</span>
     </td> --}}
     <td class="text-end pe-0" data-order="{{ $item->quantity }}">
         <span class="fw-bold ms-3">{{ $item->item }}</span>
     </td>
     <td class="text-end pe-0">
         {{ $item->price }}
     </td>
     <td class="text-end pe-0" data-order="rating-{{ $item->rating ?? 5 }}">
         <div class="rating justify-content-end">
             @if ($item->rating)
                 <x-product.rating :rating="$item->rating" />
             @else
                 <x-product.rating :rating="5" />
             @endif
         </div>
     </td>
     <td class="text-end pe-0" data-order="Scheduled">
         <!--begin::Badges-->
         <div class="badge badge-light-primary">Scheduled</div>
         <!--end::Badges-->
     </td>
     <td class="text-end">
         <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
             data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
             Actions
             <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
         <!--begin::Menu-->
         <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
             data-kt-menu="true">
             <!--begin::Menu item-->
             <div class="menu-item px-3">
                 <a href="{{ route('product.edit', ['slug' => $item->slug]) }}" class="menu-link px-3">
                     Edit
                 </a>
             </div>
             <!--end::Menu item-->

             <!--begin::Menu item-->
             <div class="menu-item px-3">
                 <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
                     Delete
                 </a>
             </div>
             <!--end::Menu item-->
         </div>
         <!--end::Menu-->
     </td>
 </tr>
