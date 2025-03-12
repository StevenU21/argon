<?php

namespace App\View\Components\welcome;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class IconButton extends Component
{
    public $icon;
    /**
     * Create a new component instance.
     */
    public function __construct($icon)
    {
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.welcome.icon-button');
    }
}
