<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormLabel extends Component
{
    public $for;
    public $icon;
    public $label;
    public $value;
    /**
     * Create a new component instance.
     */
    public function __construct($for, $icon, $label, $value = null)
    {
        $this->for = $for;
        $this->icon = $icon;
        $this->label = $label;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-label');
    }
}
