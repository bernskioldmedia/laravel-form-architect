<?php

namespace BernskioldMedia\LaravelFormArchitect\Concerns;

use Illuminate\Contracts\Support\Arrayable;

trait SupportsOptions
{

    public array $options = [];

    public bool $isOptionsGrouped = false;

    public function options(array|Arrayable $options = []): static
    {
        $this->options = $options instanceof Arrayable ? $options->toArray() : $options;

        return $this;
    }

    public function groupedOptions(bool $grouped = true): static
    {
        $this->isOptionsGrouped = $grouped;

        return $this;
    }
}