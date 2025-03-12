<?php

namespace App\View\Components\welcome;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RangeSlider extends Component
{
    public $id;
    public $min;
    public $max;
    public $lowValueId;
    public $lowValue;
    public $highValueId;
    public $highValue;

    /**
     * Create a new component instance.
     */
    public function __construct($id, $min, $max, $lowValueId, $lowValue, $highValueId, $highValue)
    {
        $this->id = $id;
        $this->min = $min;
        $this->max = $max;
        $this->lowValueId = $lowValueId;
        $this->lowValue = $lowValue;
        $this->highValueId = $highValueId;
        $this->highValue = $highValue;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.welcome.range-slider');
    }
}
