@props([
    'color' => 'light',
    'variant' => 'muted',
    'size' => 'bt-1'
])

<a href="{{ $href ?? '#' }}" class="{{ $variant ? 'btn btn-' . $variant : '' }} {{ $size ? 'btn-' . $size : '' }} text-{{ $color }}">{{ $slot }}</a>
