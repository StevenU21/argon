@props(['name', 'id', 'checked' => false, 'disabled' => false, 'label' => ''])

<div class="custom-control custom-radio mb-3">
    <input name="{{ $name }}" class="custom-control-input" id="{{ $id }}" type="radio" {{ $checked ? 'checked' : '' }} {{ $disabled ? 'disabled' : '' }}>
    <label class="custom-control-label" for="{{ $id }}">
        <span>{{ $label }}</span>
    </label>
</div>
