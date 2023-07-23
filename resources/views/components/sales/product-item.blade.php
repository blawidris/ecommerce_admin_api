 <tr>
     <td>
         <div class="d-flex align-items-center">
             <!--begin::Thumbnail-->
             <a href="{{ route('product.edit', ['slug' => $order->product->slug, 'id' => $order->product->id]) }}"
                 class="symbol symbol-50px">
                 <span class="symbol-label"
                     style="background-image:url({{ asset($order->product->thumbnail ? 'storage/' . $order->product->thumbnail : 'assets/media/svg/files/blank-image.svg)') }});"></span>
             </a>
             <!--end::Thumbnail-->

             <!--begin::Title-->
             <div class="ms-5">
                 <a href="{{ route('product.edit', ['slug' => $order->product->slug, 'id' => $order->product->id]) }}"
                     class="fw-bold text-gray-600 text-hover-primary">
                     {{ $order->product->title }}
                 </a>
                 {{-- <div class="fs-7 text-muted">Delivery Date: {{02/07/2023}} --}}
             </div>
         </div>
         <!--end::Title-->
         </div>
     </td>
     <td class="text-end">
         {{ $order->product->sku }}
     </td>
     <td class="text-end">
         {{ $order->quantity }}
     </td>
     <td class="text-end">
         <div class="d-inline-flex">
             <span class="currency" data-currency="">&#163;</span>
             <span class="price">
                 {{ $order->unit_price }}
             </span>
         </div>
     </td>
     @php
         $total = $order->unit_price * $order->quantity;
     @endphp
     <td class="text-end">

         <div class="d-inline-flex">
             <span class="currency" data-currency="">&#163;</span>
             <span class="price">
                 {{ $total }}
             </span>
         </div>
     </td>
 </tr>
