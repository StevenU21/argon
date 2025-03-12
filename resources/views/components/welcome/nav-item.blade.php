<li class="nav-item">
    <a class="nav-link mb-sm-3 mb-md-0 {{ $active ? 'active' : '' }}" id="{{ $id }}-tab" data-toggle="tab"
        href="#{{ $id }}" role="tab" aria-controls="{{ $id }}" aria-selected="{{ $active ? 'true' : 'false' }}">
        <i class="{{ $icon }} mr-2"></i>{{ $label }}
    </a>
</li>
