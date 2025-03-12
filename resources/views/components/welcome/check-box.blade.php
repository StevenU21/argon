@props(['id', 'checked' => false, 'disabled' => false, 'label' => ''])

<div class="custom-control custom-checkbox mb-3">
    <input class="custom-control-input" id="{{ $id }}" type="checkbox" {{ $checked ? 'checked' : '' }} {{ $disabled ? 'disabled' : '' }}>
    <label class="custom-control-label" for="{{ $id }}">
        <span>{{ $label }}</span>
    </label>
</div>
