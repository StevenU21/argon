<?php

namespace App\View\Components\welcome;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public $type;
    public $icon;
    public $title;
    public $message;

    /**
     * Create a new component instance.
     */
    public function __construct($type, $icon, $title, $message)
    {
        $this->type = $type;
        $this->icon = $icon;
        $this->title = $title;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.welcome.alert');
    }
}
