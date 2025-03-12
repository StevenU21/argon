<?php

namespace App\View\Components\welcome;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Pagination extends Component
{
    public $pages;
    public $currentPage;
    public $url;
    public $showArrows;
    public $class;

    /**
     * Create a new component instance.
     */
    public function __construct($pages, $currentPage, $url = '', $showArrows = true, $class = '')
    {
        $this->pages = $pages;
        $this->currentPage = $currentPage;
        $this->url = $url;
        $this->showArrows = $showArrows;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.welcome.pagination');
    }
}
