@props([
    'id' => 'carouselExampleIndicators',
    'indicators' => [],
    'size' => 'd-block w-100',
])

<div id="{{ $id }}" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach ($indicators as $index => $active)
            <li data-target="#{{ $id }}" data-slide-to="{{ $index }}" class="{{ $active ? 'active' : '' }}"></li>
        @endforeach
    </ol>
    <div class="carousel-inner">
        {{ $slot }}
    </div>
    <a class="carousel-control-prev" href="#{{ $id }}" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#{{ $id }}" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
