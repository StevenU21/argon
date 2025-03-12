<?php

namespace App\View\Components\welcome;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Image extends Component
{
    public $src;
    public $alt;
    public $class;
    public $style;
    public $label;

    /**
     * Create a new component instance.
     */
    public function __construct($src, $alt, $class = '', $style = '', $label = '')
    {
        $this->src = $src;
        $this->alt = $alt;
        $this->class = $class;
        $this->style = $style;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.welcome.image');
    }
}
