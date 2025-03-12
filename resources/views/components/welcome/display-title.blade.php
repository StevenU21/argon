@php
    $tag = 'h' . $level;
@endphp

<div class="col-sm-9">
    <<?php echo $tag; ?> class="display-{{ $level }} mb-0">{{ $text }}</<?php echo $tag; ?>>
</div>
