  <tr>
      <td>
          <div class="form-check form-check-sm form-check-custom form-check-solid">
              <input class="form-check-input" type="checkbox" value="1" />
          </div>
      </td>
      <td data-kt-ecommerce-order-filter="order_id">
          <a href="{{ route('order.view', ['order_code' => $order->order_code, 'id' => $order->id]) }}"
              class="text-gray-800 text-hover-primary fw-bold text-uppercase">
              {{ $order->order_code }}
          </a>
      </td>
      <td>
          <div class="d-flex align-items-center">

              @php
                  $name = "{$order->customer->first_name} {$order->customer->last_name}";
              @endphp
              <!--begin:: Avatar -->
              <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                  <a href="{{ route('order.view', ['order_code' => $order->order_code, 'id' => $order->id]) }}">
                      @php
                          
                          $avatarStatus = $order->id / 2 !== 0 ? 'danger' : 'success';
                          
                      @endphp
                      <div class="symbol-label fs-3 bg-light-{{ $avatarStatus }} text-{{ $avatarStatus }}">
                          {{ $name[0] }}
                      </div>
                  </a>
              </div>
              <!--end::Avatar-->

              <div class="ms-5">
                  <!--begin::Title-->
                  <a href="{{ route('order.view', ['order_code' => $order->order_code, 'id' => $order->id]) }}"
                      class="text-gray-800 text-hover-primary fs-5 fw-bold">
                      {{ $name }}
                  </a>
                  <!--end::Title-->
              </div>
          </div>
      </td>
      <td class="text-end pe-0" data-order="{{ $order->status }}">

          @php
              $status = [
                  'processing' => 'primary',
                  'cancelled' => 'danger',
                  'refunded' => 'danger',
                  'delivered' => 'success',
                  'shipping' => 'warning',
                  'shipped' => 'primary',
              ];
              
              $orderStatus = $status[$order->shipping->status];
          @endphp
          <!--begin::Badges-->
          <div class="text-capitalize badge badge-light-{{ $orderStatus }}">{{ $order->shipping->status }}</div>
          <!--end::Badges-->
      </td>
      <td class="text-end pe-0">
          <span class="fw-bold">${{ $order->total_price }}</span>
      </td>
      <td class="text-end" data-order="2023-06-29">
          <span class="fw-bold">{{ date('d/m/Y', strtotime($order->created_at)) }}</span>
      </td>
      <td class="text-end" data-order="2023-07-01">
          <span class="fw-bold">{{ date('d/m/Y', strtotime($order->updated_at)) }}</span>
      </td>
      <td class="text-end">
          <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
              data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
              Actions
              <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
          <!--begin::Menu-->
          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
              data-kt-menu="true">
              <!--begin::Menu -->
              <div class="menu- px-3">
                  <a href="{{ route('order.view', ['order_code' => $order->order_code, 'id' => $order->id]) }}"
                      class="menu-link px-3">
                      View
                  </a>
              </div>
              <!--end::Menu -->

              <!--begin::Menu -->
              <div class="menu- px-3">
                  <a href="{{ route('order.edit', ['order_code' => $order->order_code, 'id' => $order->id]) }}"
                      class="menu-link px-3">
                      Edit
                  </a>
              </div>
              <!--end::Menu -->

              <!--begin::Menu -->
              <div class="menu- px-3">
                  <a href="javascript:void(0)" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row"
                      data-order-id="{{ $order->id }}">
                      Delete
                  </a>
              </div>
              <!--end::Menu -->
          </div>
          <!--end::Menu-->
      </td>
  </tr>
