@props([
    'type' => 'submit',
    'variant' => 'primary',
    'icon' => '',
    'text' => '',
    'size' => 'md' 
])

@php
    $buttonClass = 'btn btn-' . $variant;
    if ($size === 'sm') {
        $buttonClass .= ' btn-sm';
    } elseif ($size === 'lg') {
        $buttonClass .= ' btn-lg';
    }
@endphp

<div class="form-group">
    <button type="{{ $type }}" class="{{ $buttonClass }}">
        @if($icon)
            <i class="{{ $icon }}"></i>
        @endif
        {{ $text }}
    </button>
</div>
