<?php

namespace App\View\Components\welcome;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class IconTabs extends Component
{
    public $id;
    public $tabs;

    /**
     * Create a new component instance.
     */
    public function __construct($id, $tabs)
    {
        $this->id = $id;
        $this->tabs = $tabs;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.welcome.icon-tabs');
    }
}
