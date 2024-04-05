<?php

namespace BernskioldMedia\LaravelFormArchitect\Concerns;

use Illuminate\Contracts\Support\Arrayable;
use function method_exists;

trait SupportsOptions
{

    public ?string $enumForOptions = null;

    protected array $options = [];

    public bool $isOptionsGrouped = false;

    public function options(array|Arrayable $options = []): static
    {
        $this->options = $options instanceof Arrayable ? $options->toArray() : $options;

        return $this;
    }

    public function attachEnum(string $enumClass): static
    {
        $this->enumForOptions = $enumClass;
        $this->options = [];

        return $this;
    }

    public function groupedOptions(bool $grouped = true): static
    {
        $this->isOptionsGrouped = $grouped;

        return $this;
    }

    public function getOptions(): array
    {
        if ($this->enumForOptions && method_exists($this->enumForOptions, 'asSelectArray')) {
            return $this->enumForOptions::asSelectArray();
        }

        return $this->options;
    }
}