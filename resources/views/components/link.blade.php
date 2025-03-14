@props([
    'href' => '#',
    'variant' => 'primary',
    'icon' => '',
    'text' => '',
    'size' => '',
    'style' => '',
    'can' => null, // Permiso opcional
])

@php
    $buttonClass = 'btn btn-' . $variant;
    if ($size) {
        $buttonClass .= ' btn-' . $size;
    }
@endphp

@if(is_null($can) || auth()->user()->can($can))
    <a href="{{ $href }}" class="{{ $buttonClass }}" style="{{ $style }}">
        @if($icon)
            <i class="{{ $icon }}"></i>
        @endif
        {{ $text }}
    </a>
@endif
