<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;

class NavLink extends Component
{

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $routeName;

    /**
     * @var bool
     */
    public $active;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $routeName, string $tag)
    {
        $this->tag = $tag;
        $this->routeName = $routeName;
        $this->active = $this->isActive();
    }

    /**
     * Checks if current route is the route of the nav link
     *
     * @return bool
     */
    private function isActive(): bool
    {
        return Route::currentRouteName() == $this->routeName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav-link');
    }
}
