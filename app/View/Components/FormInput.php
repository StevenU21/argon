<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormInput extends Component
{
    public $label;
    public $id;
    public $name;
    public $placeholder;
    public $value;

    /**
     * Create a new component instance.
     */
    public function __construct($label = '', $id = '', $name = '', $placeholder = '', $value = '')
    {
        $this->label = $label;
        $this->id = $id;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-input');
    }
}
