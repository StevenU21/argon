<?php

namespace App\View\Components\welcome;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class IconButton extends Component
{
    public $icon;
    public $iconPosition;
    public $isDisabled;
    public $color;
    public $outline;
    public $size;
    public $type;
    public $dismiss;
    public $textColor;
    public $style;

    /**
     * Create a new component instance.
     */
    public function __construct(
        $icon,
        $iconPosition = 'left',
        $isDisabled = false,
        $color = 'primary',
        $outline = false,
        $size = 'btn-1',
        $type = 'button',
        $dismiss = false,
        $textColor = '',
        $style = ''
    ) {
        $this->icon = $icon;
        $this->iconPosition = $iconPosition;
        $this->isDisabled = $isDisabled;
        $this->color = $color;
        $this->outline = $outline;
        $this->size = $size;
        $this->type = $type;
        $this->dismiss = $dismiss;
        $this->textColor = $textColor;
        $this->style = $style;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.welcome.icon-button');
    }
}
