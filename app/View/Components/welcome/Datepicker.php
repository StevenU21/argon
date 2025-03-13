<?php

namespace App\View\Components\welcome;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Datepicker extends Component
{
    public $placeholder;
    public $value;

    public function __construct($placeholder = 'Select date', $value = '')
    {
        $this->placeholder = $placeholder;
        $this->value = $value;
    }
    
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.welcome.datepicker');
    }
}
