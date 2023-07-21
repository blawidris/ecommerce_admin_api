 <tr class="{{ $item->id / 2 === 1 ? 'odd' : 'even' }}">
     <td>
         <div class="form-check form-check-sm form-check-custom form-check-solid">
             <input class="form-check-input" type="checkbox" value="1">
         </div>
     </td>
     <td>
         <div class="d-flex">
             <!--begin::Thumbnail-->
             <a href="{{ route('category.edit', ['slug' => Str::slug(strtolower($item->name)), 'id' => $item->id]) }}"
                 class="symbol symbol-50px">
                 <span class="symbol-label"
                     style="background-image:url({{ asset('storage/' . $item->thumbnail) ?? '' }});"></span>
             </a>
             <!--end::Thumbnail-->

             <div class="ms-5">
                 <!--begin::Title-->
                 <a href="{{ route('category.edit', ['slug' => Str::slug(strtolower($item->name)), 'id' => $item->id]) }}"
                     class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1"
                     data-kt-ecommerce-category-filter="category_name"
                     data-kt-ecommerce-category-id="{{ $item->id }}">{{ $item->name }}</a>
                 <!--end::Title-->

                 <!--begin::Description-->
                 <div class="text-muted fs-7 fw-bold {{ !$item->description ? 'd-none' : '' }}">
                     {{ $item->description ?? '' }}</div>
                 <!--end::Description-->
             </div>
         </div>
     </td>
     <td>
         <!--begin::Badges-->
         <div
             class="text-capitalize badge badge-light-{{ $item->status == 'published' ? 'success' : ($item->status == 'unpublished' ? 'primary' : 'warning') }}">
             {{ $item->status }}</div>
         <!--end::Badges-->
     </td>
     <td class="text-end">
         <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center"
             data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
             Actions
             <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
         <!--begin::Menu-->
         <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
             data-kt-menu="true">
             <!--begin::Menu item-->
             <div class="menu-item px-3">
                 <a href="{{ route('category.edit', ['slug' => Str::slug(strtolower($item->name)), 'id' => $item->id]) }}"
                     class="menu-link px-3">
                     Edit
                 </a>
             </div>
             <!--end::Menu item-->

             <!--begin::Menu item-->
             <div class="menu-item px-3">
                 <a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row"
                     data-id="{{ $item->id }}" data-token="{{ csrf_token() }}">
                     Delete
                 </a>
             </div>
             <!--end::Menu item-->
         </div>
         <!--end::Menu-->
     </td>
 </tr>
