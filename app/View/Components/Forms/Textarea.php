<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Textarea extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
        <textarea 
            name="message" 
            placeholder="Enter message..."
            class="pl-4 placeholder:italic bg-neutral-700 rounded-md w-full sm:w-3/6 h-12 text-white shadow-xl mb-10"></textarea>
        blade;
    }
}
