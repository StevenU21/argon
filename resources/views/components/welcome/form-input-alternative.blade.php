@props([
    'type' => 'text',
    'placeholder' => '',
    'icon' => '',
    'iconPosition' => 'left',
    'disabled' => false,
    'isValid' => null,
    'label' => '',
    'value' => '',
    'name' => ''
])

<div class="form-group {{ $isValid === true ? 'has-success' : ($isValid === false ? 'has-danger' : '') }}">
    @if($label)
        <label class="form-control-label">{{ $label }}</label>
    @endif
    @if($icon)
        <div class="input-group input-group-alternative mb-4">
            @if($icon && $iconPosition === 'left')
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="{{ $icon }}"></i></span>
                </div>
            @endif
            <input class="form-control form-control-alternative {{ $isValid === true ? 'is-valid' : ($isValid === false ? 'is-invalid' : '') }}" placeholder="{{ $placeholder }}" type="{{ $type }}" value="{{ $value }}" name="{{ $name }}" {{ $disabled ? 'disabled' : '' }}>
            @if($icon && $iconPosition === 'right')
                <div class="input-group-append">
                    <span class="input-group-text"><i class="{{ $icon }}"></i></span>
                </div>
            @endif
        </div>
    @else
        <input type="{{ $type }}" placeholder="{{ $placeholder }}" class="form-control form-control-alternative {{ $isValid === true ? 'is-valid' : ($isValid === false ? 'is-invalid' : '') }}" value="{{ $value }}" name="{{ $name }}" {{ $disabled ? 'disabled' : '' }}>
    @endif
</div>
