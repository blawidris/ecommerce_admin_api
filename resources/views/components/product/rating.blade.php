@foreach (range(1, 5) as $item)
    {{-- <div class="rating-label">
        <i class="ki-duotone ki-star fs-6"></i>
    </div> --}}

    @if ($rating > 0)
        @if ($rating > 0.5)
            <div class="rating-label checked">
                <i class="ki-duotone ki-star fs-6"></i>
            </div>
        @else
            <div class="rating-label checked">
                <i class="ki-duotone ki-star-half fs-6"></i>
            </div>
        @endif
    @endif

    @php $rating--; @endphp
    
@endforeach
