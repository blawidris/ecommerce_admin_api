@php
    $roundedRating = round($rating * 2) / 2;
    $hasHalfStar = fmod($roundedRating, 1) !== 0;
    $fullStars = floor($roundedRating);
@endphp

@for ($i = 1; $i <= 5; $i++)
    @if ($i <= $fullStars)
        <div class="rating-label checked">
            <i class="fas fa-star fs-6"></i>
        </div>
    @elseif ($hasHalfStar && $i === ($fullStars + 1))
        <div class="rating-label checked">
            <i class="fas fa-star-half fs-6"></i>
        </div>
    @else
        <div class="rating-label">
            <i class="fas fa-star fs-6"></i>
        </div>
    @endif
@endfor
