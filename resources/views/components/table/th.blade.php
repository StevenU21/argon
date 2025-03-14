@props(['icon' => ''])

<th scope="col" {{ $attributes }}>
    @if($icon)
        <i class="{{ $icon }}"></i>
    @endif
    {{ $slot }}
</th>
