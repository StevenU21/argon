@props([
    'size' => 'btn-1',
    'color' => 'primary',
    'outline' => false,
    'type' => 'button',
    'dismiss' => false,
    'textColor' => ''
])

@php
    $buttonClass = $outline ? 'btn-outline-' : 'btn-';
    $buttonClass .= $color === 'link' ? 'link' : $color;
@endphp

<button class="btn {{ $size }} {{ $buttonClass }} {{ $textColor ? 'text-' . $textColor : '' }}"
    type="{{ $type }}"
    @if($dismiss) data-dismiss="modal" @endif>
    {{ $slot }}
</button>
