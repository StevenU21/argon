<?php

namespace App\View\Components\welcome;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ColoredText extends Component
{
    public $color;
    public $text;

    /**
     * Create a new component instance.
     */
    public function __construct($color, $text)
    {
        $this->color = $color;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.welcome.colored-text');
    }
}
