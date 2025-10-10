<?php

namespace App\View\Components\Exam;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TrueFalse extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public bool $isShow = false,
        public bool $isCreate = false,
    )
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.exam.true-false');
    }
}
