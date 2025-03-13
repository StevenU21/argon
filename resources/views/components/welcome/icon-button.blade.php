@props([
    'icon',
    'iconPosition' => 'left',
    'isDisabled' => false,
    'color' => 'primary',
    'outline' => false,
    'size' => 'btn-1',
    'type' => 'button',
    'dismiss' => false,
    'textColor' => '',
    'style' => '',
])

@php
    $buttonClass = $outline ? 'btn-outline-' : 'btn-';
    $buttonClass .= $color === 'link' ? 'link' : $color;
    $buttonClass .= $style ? ' btn-' . $style : '';
@endphp

<button class="btn btn-icon btn-3 {{ $size }} {{ $buttonClass }} {{ $textColor ? 'text-' . $textColor : '' }}"
    type="{{ $type }}"
    @if($dismiss) data-dismiss="modal" @endif
    @if($isDisabled) disabled @endif>
    @if($iconPosition === 'left')
        <span class="btn-inner--icon"><i class="{{ $icon }}"></i></span>
    @endif

    @if(trim($slot) != '')
        <span class="btn-inner--text">{{ $slot }}</span>
    @endif

    @if($iconPosition === 'right')
        <span class="btn-inner--icon"><i class="{{ $icon }}"></i></span>
    @endif
</button>
