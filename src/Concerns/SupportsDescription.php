<?php

namespace BernskioldMedia\LaravelFormArchitect\Concerns;

trait SupportsDescription
{

    public ?string $description = null;

    public function description(?string $description = null): static
    {
        $this->description = $description;

        return $this;
    }
}