<?php

namespace BernskioldMedia\LaravelFormArchitect\Concerns;

trait SupportsMaxLength
{

    public ?int $maxlength = null;

    public bool $enforceMaxlength = true;

    public function maxlength(int $maxlength, bool $enforced = true): self
    {
        $this->maxlength = $maxlength;
        $this->enforceMaxlength = $enforced;

        return $this;
    }
}