  <tr>
      <!--begin::Item-->
      <td>
          <a href="{{ route('product.edit', ['id' => $product->id, 'slug' => $product->slug]) }}"
              class="text-dark text-hover-primary text-capitalize">{{ $product->title }}</a>
      </td>
      <!--end::Item-->

      <!--begin::Product ID-->
      <td class="text-end">
          {{ $product->sku }}
      </td>
      <!--end::Product ID-->

      <!--begin::Date added-->
      <td class="text-end">
          {{ date('j M, Y', strtotime($product->created_at)) }}
      </td>
      <!--end::Date added-->

      <!--begin::Price-->
      <td class="text-end">
          <div class="d-inline-flex">
              <span class="currency">
                  &#163;
              </span>
              <span class="price">{{ $product->price }}</span>
          </div>
      </td>
      <!--end::Price-->

      <!--begin::Status-->
      <td class="text-end">

          @php
              $status = [
                  2 => ['status' => 'primary', 'value' => 'In Stock'],
                  0 => ['status' => 'danger', 'value' => 'Out of Stock'],
                  1 => ['status' => 'warning', 'value' => 'Low Stock'],
              ];

              $stockReport = $product->qty === 0 ? $status['0'] : ($product->quantity <= 10 ? $status[1] : $status[2]);
          @endphp
          <span class="badge py-3 px-4 fs-7 badge-light-{{ $stockReport['status'] }}">{{ $stockReport['value'] }}</span>
      </td>
      <!--end::Status-->

      <!--begin::Qty-->
      <td class="text-end" data-order="{{ $product->quantity }}">
          <span class="text-dark fw-bold">{{ $product->quantity }} PCS</span>
      </td>
      <!--end::Qty-->
  </tr>
