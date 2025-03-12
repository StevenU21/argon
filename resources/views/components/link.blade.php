@props([
    'href' => '#',
    'variant' => 'primary',
    'icon' => '',
    'text' => '',
    'size' => '',
    'style' => '', 
])

@php
    $buttonClass = 'btn btn-' . $variant;
    if ($size) {
        $buttonClass .= ' btn-' . $size;
    }
@endphp

<a href="{{ $href }}" class="{{ $buttonClass }}" style="{{ $style }}">
    @if($icon)
        <i class="{{ $icon }}"></i>
    @endif
    {{ $text }}
</a>
