@props([
    'id' => 'modal-id',
    'title' => 'Modal Title',
    'body' => '',
    'footer' => '',
    'style' => 'default' // default, danger, etc.
])

@php
    $modalClasses = [
        'default' => 'modal-dialog-centered',
        'danger' => 'modal-danger modal-dialog-centered modal-',
    ];
    $contentClasses = [
        'default' => '',
        'danger' => 'bg-gradient-danger',
    ];
@endphp

<div class="modal fade" id="{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="{{ $id }}-label" aria-hidden="true">
    <div class="modal-dialog {{ $modalClasses[$style] ?? $modalClasses['default'] }}" role="document">
        <div class="modal-content {{ $contentClasses[$style] ?? $contentClasses['default'] }}">
            <div class="modal-header">
                <h6 class="modal-title" id="{{ $id }}-label">{{ $title }}</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                {!! $body !!}
            </div>
            <div class="modal-footer">
                {!! $footer !!}
            </div>
        </div>
    </div>
</div>
