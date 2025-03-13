@props([
    'id' => 'modal-form-id',
    'title' => 'Modal Form Title'
])

<div class="modal fade" id="{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="{{ $id }}-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-white pb-5">
                        <div class="text-muted text-center mb-3">
                            <small>{{ $title }}</small>
                        </div>
                        <div class="btn-wrapper text-center">
                            {{ $slot }}
                        </div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        {{ $form }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
