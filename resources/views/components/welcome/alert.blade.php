<div class="alert alert-{{ $type }} alert-dismissible fade show" role="alert">
    <span class="alert-inner--icon"><i class="{{ $icon }}"></i></span>
    <span class="alert-inner--text"><strong>{{ $title }}</strong> {{ $message }}</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
