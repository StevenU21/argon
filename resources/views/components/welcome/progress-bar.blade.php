<div class="progress-wrapper">
    <div class="progress-info">
        <div class="progress-label">
            <span>{{ $label }}</span>
        </div>
        <div class="progress-percentage">
            <span>{{ $percentage }}%</span>
        </div>
    </div>
    <div class="progress">
        <div class="progress-bar bg-{{ $color }}" role="progressbar" aria-valuenow="{{ $value }}" aria-valuemin="0"
            aria-valuemax="100" style="width: {{ $value }}%;"></div>
    </div>
</div>
