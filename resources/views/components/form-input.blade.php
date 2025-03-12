@props([
    'label' => '',
    'id' => '',
    'name' => '',
    'placeholder' => '',
    'value' => '',
])

<div class="form-group">
    @if($label)
        <label class="form-control-label" for="{{ $id }}">{{ $label }}</label>
    @endif
    <input type="text" id="{{ $id }}" name="{{ $name }}" class="form-control form-control-alternative"
        placeholder="{{ $placeholder }}" value="{{ old($name, $value) }}">
</div>
