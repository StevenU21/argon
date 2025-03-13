<?php

namespace App\View\Components\welcome;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormSelect extends Component
{
    public $options;
    public $name;
    public $id;
    public $label;
    public $icon;
    public $selected;
    public $required;
    public $multiple;
    public $maxItems;
    public $selectjs;

    public function __construct($options, $name, $id = null, $label = '', $icon = '', $selected = null, $required = true, $multiple = false, $maxItems = null, $selectjs = false)
    {
        $this->options = $options;
        $this->name = $name;
        $this->id = $id;
        $this->label = $label;
        $this->icon = $icon;
        $this->selected = $selected;
        $this->required = $required;
        $this->multiple = $multiple;
        $this->maxItems = $maxItems;
        $this->selectjs = $selectjs;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.welcome.form-select');
    }
}
