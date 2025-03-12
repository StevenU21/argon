<button class="btn btn-icon btn-3 btn-primary" type="button">
    <span class="btn-inner--icon"><i class="{{ $icon }}"></i></span>
    @if(trim($slot) != '')
        <span class="btn-inner--text">{{ $slot }}</span>
    @endif
</button>
