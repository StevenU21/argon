@props([
    'name',
    'id' => '',
    'label' => '',
    'icon' => '',
    'accept' => 'image/png,image/jpg,image/jpeg,image/webp',
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
    <input type="file" name="{{ $name }}" id="{{ $id }}" class="filepond" accept="{{ $accept }}">
</div>

    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>
    <link href="https://unpkg.com/filepond/dist/filepond.min.css" rel="stylesheet">
<script>
        $(document).ready(function() {
            FilePond.create(document.querySelector('#{{ $id }}'));
        });
</script>

