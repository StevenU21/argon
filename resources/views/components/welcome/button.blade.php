@props(['size' => 'btn-1', 'color' => 'primary', 'outline' => false])

<button class="btn {{ $size }} btn-{{ $outline ? 'outline-' : '' }}{{ $color }}" type="button">{{ $slot }}</button>
