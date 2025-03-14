@props(['styleType' => '', 'limit' => null])

@php
    $styles = [
        'action' => 'white-space: nowrap; display: flex; align-items: center;',
    ];
    $style = $styles[$styleType] ?? '';
@endphp

<td {{ $attributes->merge(['style' => $style]) }}>
    @if($limit)
        {{ Str::limit($slot, $limit) }}
    @else
        {{ $slot }}
    @endif
</td>
