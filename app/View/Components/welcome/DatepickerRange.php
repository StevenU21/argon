<?php

namespace App\View\Components\welcome;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DatepickerRange extends Component
{
    public $startPlaceholder;
    public $endPlaceholder;
    public $startValue;
    public $endValue;

    public function __construct($startPlaceholder = 'Start date', $endPlaceholder = 'End date', $startValue = '', $endValue = '')
    {
        $this->startPlaceholder = $startPlaceholder;
        $this->endPlaceholder = $endPlaceholder;
        $this->startValue = $startValue;
        $this->endValue = $endValue;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.welcome.datepicker-range');
    }
}
