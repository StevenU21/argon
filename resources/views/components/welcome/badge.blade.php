@props(['color' => 'primary'])

<span class="badge badge-pill badge-{{ $color }} text-uppercase">{{ $slot }}</span>
