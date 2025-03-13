<?php

namespace App\View\Components\welcome;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Popover extends Component
{
    public $placement;
    public $title;
    public $content;
    public $text;

    public function __construct($placement, $title, $content, $text)
    {
        $this->placement = $placement;
        $this->title = $title;
        $this->content = $content;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.welcome.popover');
    }
}
