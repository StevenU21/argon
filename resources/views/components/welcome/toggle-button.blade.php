@props(['checked' => false])

<label class="custom-toggle">
    <input type="checkbox" {{ $checked ? 'checked' : '' }}>
    <span class="custom-toggle-slider rounded-circle"></span>
</label>
