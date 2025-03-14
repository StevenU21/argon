@props([
    'route',
    'icon' => '',
    'text' => '',
    'can' => null,
])

@if(is_null($can) || auth()->user()->can($can))
    <form action="{{ $route }}" method="POST" style="display: inline-block; margin: 0; display: flex; align-items: center;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm">
            <i class="{{ $icon }}"></i> {{ $text }}
        </button>
    </form>
@endif
