<?php

namespace App\View\Components\welcome;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CheckBox extends Component
{
    public $id;
    public $checked;
    public $disabled;
    public $label;

    /**
     * Create a new component instance.
     */
    public function __construct($id, $checked = false, $disabled = false, $label = '')
    {
        $this->id = $id;
        $this->checked = $checked;
        $this->disabled = $disabled;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.welcome.check-box');
    }
}
