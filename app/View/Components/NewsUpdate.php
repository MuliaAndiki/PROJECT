<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewsUpdate extends Component
{
    public $Dashboardpict;
    /**
     * Create a new component instance.
     */
    public function __construct($Dashboardpict = [])
    {
        $this->Dashboardpict = $Dashboardpict;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.newsupdate', ['Dashboardpict' => $this->Dashboardpict]);
    }
}
