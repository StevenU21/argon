<?php

namespace App\View\Components\welcome;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavPillItem extends Component
{
    public $id;
    public $icon;
    public $active;

    /**
     * Create a new component instance.
     */
    public function __construct($id, $icon, $active = false)
    {
        $this->id = $id;
        $this->icon = $icon;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.welcome.nav-pill-item');
    }
}
