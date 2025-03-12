<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DeleteButton extends Component
{
    public $route;
    public $icon;
    public $text;

    /**
     * Create a new component instance.
     */
    public function __construct($route = '', $icon = '', $text = '')
    {
        $this->route = $route;
        $this->icon = $icon;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.delete-button');
    }
}
