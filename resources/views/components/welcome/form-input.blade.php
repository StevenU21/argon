@props(['type' => 'text', 'placeholder' => '', 'icon' => '', 'iconPosition' => 'left', 'disabled' => false, 'isValid' => null])

<div class="form-group {{ $isValid === true ? 'has-success' : ($isValid === false ? 'has-danger' : '') }}">
    <div class="input-group mb-4">
        @if($icon && $iconPosition === 'left')
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="{{ $icon }}"></i></span>
            </div>
        @endif
        <input class="form-control {{ $isValid === true ? 'is-valid' : ($isValid === false ? 'is-invalid' : '') }}" placeholder="{{ $placeholder }}" type="{{ $type }}" {{ $disabled ? 'disabled' : '' }}>
        @if($icon && $iconPosition === 'right')
            <div class="input-group-append">
                <span class="input-group-text"><i class="{{ $icon }}"></i></span>
            </div>
        @endif
    </div>
</div>
