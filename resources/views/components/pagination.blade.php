@props(['position' => 'left'])

@php
    $positionClass = [
        'left' => 'justify-content-start',
        'center' => 'justify-content-center',
        'right' => 'justify-content-end',
    ][$position] ?? 'justify-content-start';
@endphp

<div class="card-footer py-4">
    <nav aria-label="Page navigation" class="d-flex {{ $positionClass }}">
        {!! $links !!}
    </nav>
</div>
