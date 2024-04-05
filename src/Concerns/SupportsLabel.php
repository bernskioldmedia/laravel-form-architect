<?php

namespace BernskioldMedia\LaravelFormArchitect\Concerns;

trait SupportsLabel
{

    public string $label = '';

    public function label(?string $label = null): static
    {
        $this->label = $label;

        return $this;
    }
}