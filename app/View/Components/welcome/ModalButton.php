<?php

namespace App\View\Components\welcome;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModalButton extends Component
{
    public $target;
    public $color;
    public $text;

    /**
     * Create a new component instance.
     */
    public function __construct($target, $color = 'primary', $text = 'Open Modal')
    {
        $this->target = $target;
        $this->color = $color;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.welcome.modal-button');
    }
}
