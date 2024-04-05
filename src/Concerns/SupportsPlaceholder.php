<?php

namespace BernskioldMedia\LaravelFormArchitect\Concerns;

trait SupportsPlaceholder
{

    public ?string $placeholder = null;

    public function placeholder(?string $placeholder = null): static
    {
        $this->placeholder = $placeholder;

        return $this;
    }
}