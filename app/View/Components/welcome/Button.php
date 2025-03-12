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

    /**
     * Create a new component instance.
     */
    public function __construct($size = 'btn-1', $color = 'primary', $outline = false)
    {
        $this->size = $size;
        $this->color = $color;
        $this->outline = $outline;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.welcome.button');
    }
}
