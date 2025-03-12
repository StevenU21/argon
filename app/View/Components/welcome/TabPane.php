<?php

namespace App\View\Components\welcome;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TabPane extends Component
{
    public $id;
    public $active;

    /**
     * Create a new component instance.
     */
    public function __construct($id, $active = false)
    {
        $this->id = $id;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.welcome.tab-pane');
    }
}
