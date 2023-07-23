<?php

namespace App\View\Components\Sales;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Cartitem extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $product)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sales.cartitem');
    }
}
