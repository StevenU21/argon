@props(['styleType' => ''])

@php
    $styles = [
        'action' => 'white-space: nowrap; display: flex; align-items: center;',
    ];
    $style = $styles[$styleType] ?? '';
@endphp

<td {{ $attributes->merge(['style' => $style]) }}>
    {{ $slot }}
</td>
