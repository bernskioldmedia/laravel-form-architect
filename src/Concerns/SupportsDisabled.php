<?php

namespace BernskioldMedia\LaravelFormArchitect\Concerns;

trait SupportsDisabled
{

    public bool $disabled = false;

    public function disabled(bool $disabled = true): static
    {
        $this->disabled = $disabled;

        return $this;
    }
}