@props([
    'route',
    'icon' => '',
    'text' => '',
    'can' => null,
    'outline' => false,
])

@php
    $buttonClass = $outline ? 'btn btn-outline-danger btn-sm' : 'btn btn-danger btn-sm';
@endphp

@if(is_null($can) || auth()->user()->can($can))
    <form action="{{ $route }}" method="POST" style="display: inline-block; margin: 0; display: flex; align-items: center;">
        @csrf
        @method('DELETE')
        <button type="submit" class="{{ $buttonClass }}">
            <i class="{{ $icon }}"></i> {{ $text }}
        </button>
    </form>
@endif
