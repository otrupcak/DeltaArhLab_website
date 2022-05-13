<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MasterLayout extends Component
{
    public $title;
    //secret definiše da li je link u vrhu logotipa aktivan ili ne
    public $secret;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = null, $secret = False)
    {
        $this->title = $title;
        $this->secret = $secret;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.master');
    }
}
