@props([
    'size' => 'btn-1',
    'color' => 'primary',
    'outline' => false,
    'type' => 'button',
    'dismiss' => false,
    'textColor' => '',
    'style' => '',
    'isDisabled' => false,
])

@php
    $buttonClass = $outline ? 'btn-outline-' : 'btn-';
    $buttonClass .= $color === 'link' ? 'link' : $color;
    $buttonClass .= $style ? ' btn-' . $style : '';
@endphp

<button class="btn {{ $size }} {{ $buttonClass }} {{ $textColor ? 'text-' . $textColor : '' }}"
    type="{{ $type }}"
    @if($dismiss) data-dismiss="modal" @endif
    @if($isDisabled) disabled @endif>
    {{ $slot }}
</button>
