<?php

namespace App\View\Components\welcome;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Tooltip extends Component
{
    public $placement;
    public $title;
    public $text;

    public function __construct($placement, $title, $text)
    {
        $this->placement = $placement;
        $this->title = $title;
        $this->text = $text;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.welcome.tooltip');
    }
}
