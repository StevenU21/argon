<?php

namespace App\View\Components\welcome;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SocialLink extends Component
{
    public $url;
    public $icon;
    public $name;

    public function __construct($url, $icon, $name)
    {
        $this->url = $url;
        $this->icon = $icon;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.welcome.social-link');
    }
}
