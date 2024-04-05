<?php

namespace BernskioldMedia\LaravelFormArchitect\Concerns;

use function explode;

trait SupportsRequired
{

    public bool $required = false;

    public bool $showOptionalLabel = false;

    public function required(bool $required = true): static
    {
        $this->required = $required;

        return $this;
    }

    public function showOptionalLabel(bool $showOptionalLabel = true): static
    {
        $this->showOptionalLabel = $showOptionalLabel;

        return $this;
    }
}