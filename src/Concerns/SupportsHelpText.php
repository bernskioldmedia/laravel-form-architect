<?php

namespace BernskioldMedia\LaravelFormArchitect\Concerns;

trait SupportsHelpText
{

    public ?string $helpText = null;

    public function helpText(?string $helpText = null): static
    {
        $this->helpText = $helpText;

        return $this;
    }
}