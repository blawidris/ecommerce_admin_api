 <tr data-kt-row>
     <td>
         <!--begin::Checkbox-->
         <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
             <input class="form-check-input" type="checkbox" value="1" />
         </div>
         <!--end::Checkbox-->
     </td>
     <td data-order="rating-{{ $item->rate }}">
         <!--begin::Rating-->
         <div class="rating">
             <x-product.rating :rating="$item->rate" />
         </div>
         <!--end::Rating-->
     </td>
     <td>
         <a href="#" class="d-flex text-dark text-gray-800 text-hover-primary">
             <!--begin::Avatar-->
             <div class="symbol symbol-circle symbol-25px me-3">
                 <div class="symbol-label bg-light-danger">
                     <span class="text-danger">M</span>
                 </div>
             </div>
             <!--end::Avatar-->

             <!--begin::Name-->
             <span class="fw-bold">{{ $item->customer->first_name }}
                 {{ $item->customer->last_name }}</span>
             <!--end::Name-->
         </a>
     </td>
     <td class="text-gray-600 fw-bold">
         {{ $item->comment }}
     </td>
     <td class="text-end" data-kt-review-date="{{$item->created_at}}" >
         <span class="fw-semibold text-muted" >Today</span>
     </td>
 </tr>
