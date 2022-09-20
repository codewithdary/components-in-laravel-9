<?php

namespace App\View\Components\Tag;

use Illuminate\View\Component;

class TagItem extends Component
{
    public $tag;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tag)
    {
        $this->tag = $tag;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tag.tag-item');
    }
}
