@props([
    'type' => 'submit',
    'variant' => 'primary',
    'icon' => '',
    'text' => ''
])

@php
    $buttonClass = 'btn btn-' . $variant;
@endphp

<div class="form-group">
    <button type="{{ $type }}" class="{{ $buttonClass }}">
        @if($icon)
            <i class="{{ $icon }}"></i>
        @endif
        {{ $text }}
    </button>
</div>
