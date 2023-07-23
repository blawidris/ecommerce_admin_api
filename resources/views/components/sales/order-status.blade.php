<tr>
    <td>{{ date('d/m/Y', strtotime($status->created_at)) }}</td>
    <td>
        {{ $status->comment }}
    </td>
    <td>
        @php
            $statusInfo = [
                0 => ['color' => 'warning', 'status' => 'Pending'],
                1 => ['color' => 'danger', 'status' => 'Failed'],
                2 => ['color' => 'primary', 'status' => 'Processing'],
                3 => ['color' => 'primary', 'status' => 'Delivering'],
                4 => ['color' => 'success', 'status' => 'Delivered'],
                5 => ['color' => 'success', 'status' => 'Completed'],
            ];
            
            $itemStatus = $statusInfo[$status->status];
            
            $color = $itemStatus['color'];
        @endphp

        {{-- @dd() --}}
        <!--begin::Badges-->
        <div class="badge badge-light-{{ $color }}">{{ $itemStatus['status'] }}</div>
        <!--end::Badges-->
    </td>
    <td>
        {{ $status->is_notify ? 'Yes' : 'No' }}
    </td>
</tr>
