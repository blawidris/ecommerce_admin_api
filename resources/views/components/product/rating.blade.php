@php
    $total = 5;
@endphp


@for ($i = 1; $i < $total; $i++)

    <div class="rating-label checked">
        <i class="ki-duotone ki-star fs-6"></i>
    </div>

    @if ($i > $rating)
        <div class="rating-label">
            <i class="ki-duotone ki-star fs-6"></i>
        </div>
    @endif
@endfor
