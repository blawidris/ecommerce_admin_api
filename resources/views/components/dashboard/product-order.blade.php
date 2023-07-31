<tr>
    <td>
        <a href="{{ route('order.view', ['order_code' => $order->order_code, 'id' => $order->id]) }}"
            class="text-gray-800 text-hover-primary">#{{ $order->order_code }}</a>
    </td>

    <td class="text-end">
        {{ date('j M Y, H:i:s', strtotime($order->created_at)) }}
        {{-- 7 min ago --}}
    </td>

    <td class="text-end">
        <a href="#" class="text-gray-600 text-hover-primary">
            {{ $order->customer->first_name }} {{ $order->customer->last_name }}
        </a>
    </td>

    <td class="text-end">
        <div class="d-inline-flex">
            <span class="currency">&#163;</span>
            <span class="price">{{ $order->total_price }}</span>
        </div>
    </td>

    <td class="text-end">
        @php
            $status = [
                2 => ['status' => 'primary', 'value' => 'Processing'],
                1 => ['status' => 'danger', 'value' => 'Failed'],
                3 => ['status' => 'primary', 'value' => 'Delivering'],
                4 => ['status' => 'success', 'value' => 'Delivered'],
                0 => ['status' => 'warning', 'value' => 'Pending'],
                5 => ['status' => 'success', 'value' => 'Completed'],
            ];
            $orderStatus = $status[$order->status];
        @endphp
        <span class="badge py-3 px-4 fs-7 badge-light-{{ $orderStatus['status'] }}">{{ $orderStatus['value'] }}</span>
    </td>

    <td class="text-end">
        <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
            data-kt-table-widget-4="expand_row">
            <i class="ki-duotone ki-plus fs-4 m-0 toggle-off"></i> <i
                class="ki-duotone ki-minus fs-4 m-0 toggle-on"></i> </button>
    </td>
</tr>
