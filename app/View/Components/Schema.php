<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Schema extends Component
{
    /**
     * Create a new component instance.
     */
    public $schema;
    public function __construct($schema)
    {
        $this->schema = $schema;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.schema');
    }
}
