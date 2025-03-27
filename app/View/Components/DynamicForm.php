<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DynamicForm extends Component
{
    public $fields ;
    public $action ;
    public $method ;
    public $button;
    public function __construct($fields,  $action='#', $method = 'POST' , $button )
    {
        $this->fields =$fields;
        $this->action = $action;
        $this->method = strtoupper($method);
        $this->button = $button;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dynamic-form');
    }
}
