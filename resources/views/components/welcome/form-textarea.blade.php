@props([
    'label' => '',
    'rows' => 4,
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
    <textarea rows="{{ $rows }}" id="{{ $id }}" name="{{ $name }}" class="form-control form-control-alternative" placeholder="{{ $placeholder }}">{{ old($name, $value) }}</textarea>
</div>
