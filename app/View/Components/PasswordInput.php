<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PasswordInput extends Component
{


    public $name;
    public $label;
    public $placeholder;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label = 'Password', $placeholder = 'Enter your password')
    {
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.password-input');
    }
}
