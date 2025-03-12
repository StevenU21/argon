<?php

namespace App\View\Components\welcome;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormInputAlternative extends Component
{
    public $type;
    public $placeholder;
    public $icon;
    public $iconPosition;
    public $disabled;
    public $isValid;

    /**
     * Create a new component instance.
     */
    public function __construct($type = 'text', $placeholder = '', $icon = '', $iconPosition = 'left', $disabled = false, $isValid = null)
    {
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->icon = $icon;
        $this->iconPosition = $iconPosition;
        $this->disabled = $disabled;
        $this->isValid = $isValid;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.welcome.form-input-alternative');
    }
}
