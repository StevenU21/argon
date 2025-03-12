@props([
    'label' => '',
    'rows' => 4,
    'id' => '',
    'name' => '',
    'placeholder' => '',
    'value' => '',
])

<div class="form-group">
    @if($label)
        <label class="form-control-label" for="{{ $id }}">{{ $label }}</label>
    @endif
    <textarea rows="{{ $rows }}" id="{{ $id }}" name="{{ $name }}" class="form-control form-control-alternative" placeholder="{{ $placeholder }}">{{ old($name, $value) }}</textarea>
</div>
