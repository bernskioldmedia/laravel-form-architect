<?php

namespace BernskioldMedia\LaravelFormArchitect\Concerns;

trait SupportsSuffix
{

    public ?string $suffix = null;

    public function suffix(?string $suffix = null): static
    {
        $this->suffix = $suffix;

        return $this;
    }
}