<?php

namespace BernskioldMedia\LaravelFormArchitect\Concerns;

use Illuminate\View\ComponentAttributeBag;

trait OutputsToViewComponent
{

    abstract public function viewComponent(): string;

    public function toViewComponentAttributes(): ComponentAttributeBag
    {
        return new ComponentAttributeBag($this->toArray());
    }

}