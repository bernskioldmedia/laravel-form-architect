<?php

namespace BernskioldMedia\LaravelFormArchitect\Concerns;

trait SupportsVisibility
{

    public bool $visible = true;

    public function show(bool $show = true): static
    {
        $this->visible = $show;

        return $this;
    }

    public function hide(bool $hide = true): static
    {
        return $this->show(!$hide);
    }
}