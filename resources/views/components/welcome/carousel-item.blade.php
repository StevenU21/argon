@props([
    'active' => false,
    'src' => '',
    'alt' => '',
    'size' => 'd-block w-100', 
])

<div class="carousel-item {{ $active ? 'active' : '' }}">
    <img class="{{ $size }}" src="{{ $src }}" alt="{{ $alt }}">
</div>
