<?php

namespace App\View\Components\welcome;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TabItem extends Component
{
    public $id;
    public $label;
    public $icon;
    public $active;

    /**
     * Create a new component instance.
     */
    public function __construct($id, $label, $icon = null, $active = false)
    {
        $this->id = $id;
        $this->label = $label;
        $this->icon = $icon;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.welcome.tab-item');
    }
}
