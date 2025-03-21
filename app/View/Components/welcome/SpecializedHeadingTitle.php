<?php

namespace App\View\Components\welcome;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SpecializedHeadingTitle extends Component
{
    public $text;
    public $color;

    /**
     * Create a new component instance.
     */
    public function __construct($text, $color = 'warning')
    {
        $this->text = $text;
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.welcome.specialized-heading-title');
    }
}
