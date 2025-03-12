<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SocialButton extends Component
{
    /**
     * Create a new component instance.
     */
    public $link;
    public $icon;
    public $text;

    public function __construct($link, $icon, $text)
    {
        $this->link = $link;
        $this->icon = $icon;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.social-button');
    }
}
