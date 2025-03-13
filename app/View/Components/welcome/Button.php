<?php

namespace App\View\Components\welcome;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public $size;
    public $color;
    public $outline;
    public $style;
    public $isDisabled;

    /**
     * Create a new component instance.
     */
    public function __construct($size = 'md', $color = 'primary', $outline = false, $style = '', $isDisabled = false)
    {
        $this->size = $size;
        $this->color = $color;
        $this->outline = $outline;
        $this->style = $style;
        $this->isDisabled = $isDisabled;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.welcome.button');
    }
}
