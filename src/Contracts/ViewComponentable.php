<?php

namespace BernskioldMedia\LaravelFormArchitect\Contracts;

use Illuminate\View\ComponentAttributeBag;

interface ViewComponentable
{

    public function toViewComponentAttributes(): ComponentAttributeBag;

}