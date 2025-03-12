<form action="{{ $route }}" method="POST" style="display: inline-block; margin: 0; display: flex; align-items: center;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm">
        <i class="{{ $icon }}"></i> {{ $text }}
    </button>
</form>
