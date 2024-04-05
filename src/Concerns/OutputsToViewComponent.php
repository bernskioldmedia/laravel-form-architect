<?php

namespace BernskioldMedia\LaravelFormArchitect\Concerns;

use Illuminate\View\ComponentAttributeBag;

trait OutputsToViewComponent
{

    abstract protected function getViewComponent(): string;

    public function toViewComponentAttributes(): ComponentAttributeBag
    {
        return new ComponentAttributeBag($this->toArray());
    }

}