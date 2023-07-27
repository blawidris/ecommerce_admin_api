 <tr>
     <td>
         <div class="form-check form-check-sm form-check-custom form-check-solid">
             <input class="form-check-input" type="checkbox" value="{{ $user->id }}" name="id" />
         </div>
     </td>
     <td>
         <a href="{{ route('customer.view', $user->id) }}" class="text-gray-800 text-hover-primary mb-1">
             {{ $user->first_name }}
             {{ $user->last_name }}
         </a>
     </td>
     <td>
         <a href="#" class="text-gray-600 text-hover-primary mb-1">{{ $user->user->email ?? '' }}</a>
     </td>
     <td>
         @php
             $status = [
                 '0' => ['name' => 'pending', 'css' => 'warning'],
                 1 => ['name' => 'active', 'css' => 'success'],
                 2 => ['name' => 'inactive', 'css' => 'danger'],
             ];
             
             $customerStatus = $status[$user->status];
             
         @endphp
         <!--begin::Badges-->
         <div class="badge badge-light-{{ $customerStatus['css'] }} text-capitalize">{{ $customerStatus['name'] }}</div>
         <!--end::Badges-->
     </td>
     <td>
         {{ date('j F Y, H:i:s a', strtotime($user->created_at)) }}
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
                 <a href="{{ route('customer.view', $user->id) }}" class="menu-link px-3">
                     View
                 </a>
             </div>
             <!--end::Menu item-->

             <!--begin::Menu item-->
             <div class="menu-item px-3">
                 <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row"
                     data-kt-customer-id="{{ $user->id }}">
                     Delete
                 </a>
             </div>
             <!--end::Menu item-->
         </div>
         <!--end::Menu-->
     </td>
 </tr>
