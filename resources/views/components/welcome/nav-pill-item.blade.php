<li class="nav-item">
    <a class="nav-link rounded-circle {{ $active ? 'active' : '' }}" id="{{ $id }}-tab" data-toggle="tab" href="#{{ $id }}" role="tab" aria-controls="{{ $id }}" aria-selected="{{ $active ? 'true' : 'false' }}">
        <span class="nav-link-icon d-block"><i class="{{ $icon }}"></i></span>
    </a>
</li>
