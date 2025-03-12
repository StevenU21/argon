@props([
    'label' => '',
    'id' => '',
    'name' => '',
    'placeholder' => '',
    'value' => '',
    'icon' => '', 
])

<div class="form-group">
    @if($label)
        <label class="form-control-label" for="{{ $id }}">
            @if($icon)
                <i class="{{ $icon }}"></i>
            @endif
            {{ $label }}
        </label>
    @endif
    <div class="input-group">
        <input type="text" id="{{ $id }}" name="{{ $name }}" class="form-control form-control-alternative"
            placeholder="{{ $placeholder }}" value="{{ old($name, $value) }}">
    </div>
</div>
