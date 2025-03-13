<?php

namespace App\View\Components\welcome;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormTextarea extends Component
{
    public $label;
    public $rows;
    public $id;
    public $name;
    public $placeholder;
    public $value;
    public $icon;

    public function __construct($label = '', $rows = 4, $id = '', $name = '', $placeholder = '', $value = '', $icon = '')
    {
        $this->label = $label;
        $this->rows = $rows;
        $this->id = $id;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->value = $value;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.welcome.form-textarea');
    }
}
