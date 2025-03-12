<?php

namespace App\View\Components\welcome;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputSlider extends Component
{
    public $id;
    public $min;
    public $max;
    public $valueId;
    public $value;

    /**
     * Create a new component instance.
     */
    public function __construct($id, $min, $max, $valueId, $value)
    {
        $this->id = $id;
        $this->min = $min;
        $this->max = $max;
        $this->valueId = $valueId;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.welcome.input-slider');
    }
}
