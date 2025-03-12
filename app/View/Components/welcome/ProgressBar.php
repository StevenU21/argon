<?php

namespace App\View\Components\welcome;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProgressBar extends Component
{
    public $label;
    public $percentage;
    public $color;
    public $value;

    /**
     * Create a new component instance.
     */
    public function __construct($label, $percentage, $color, $value)
    {
        $this->label = $label;
        $this->percentage = $percentage;
        $this->color = $color;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.welcome.progress-bar');
    }
}
