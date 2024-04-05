<?php

namespace BernskioldMedia\LaravelFormArchitect\Concerns;

trait SupportsPrefix
{
    public ?string $prefix = null;

    public function prefix(?string $prefix = null): static
    {
        $this->prefix = $prefix;

        return $this;
    }
}