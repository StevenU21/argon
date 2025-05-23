<?php

namespace App\View\Components\welcome;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Heading extends Component
{
    public $level;
    public $text;

    /**
     * Create a new component instance.
     */
    public function __construct($level, $text)
    {
        $this->level = $level;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.welcome.heading');
    }
}
