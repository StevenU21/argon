<div class="mt-5">
    <!-- Range slider container -->
    <div id="{{ $id }}" data-range-value-min="{{ $min }}" data-range-value-max="{{ $max }}"></div>
    <!-- Range slider values -->
    <div class="row d-none">
        <div class="col-6">
            <span class="range-slider-value value-low" data-range-value-low="{{ $lowValue }}"
                id="{{ $lowValueId }}"></span>
        </div>
        <div class="col-6 text-right">
            <span class="range-slider-value value-high" data-range-value-high="{{ $highValue }}"
                id="{{ $highValueId }}"></span>
        </div>
    </div>
</div>
