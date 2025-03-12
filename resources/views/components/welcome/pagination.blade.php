<nav aria-label="Page navigation example" class="{{ $class ?? '' }}">
    <ul class="pagination">
        @if($showArrows)
            <li class="page-item {{ $currentPage == 1 ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $currentPage > 1 ? $url . ($currentPage - 1) : '#' }}">
                    <i class="fa fa-angle-left"></i>
                </a>
            </li>
        @endif
        @foreach($pages as $page)
            <li class="page-item {{ $page == $currentPage ? 'active' : '' }}">
                <a class="page-link" href="{{ $url . $page }}">{{ $page }}</a>
            </li>
        @endforeach
        @if($showArrows)
            <li class="page-item {{ $currentPage == count($pages) ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $currentPage < count($pages) ? $url . ($currentPage + 1) : '#' }}">
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        @endif
    </ul>
</nav>
