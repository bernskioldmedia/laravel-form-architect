<?php

namespace BernskioldMedia\LaravelFormArchitect\Forms;

use BernskioldMedia\LaravelFormArchitect\Concerns\Dumpable;
use BernskioldMedia\LaravelFormArchitect\Concerns\Makeable;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Traits\Conditionable;
use Illuminate\Support\Traits\Macroable;
use Illuminate\Support\Traits\Tappable;

class Form implements Arrayable
{
    use Makeable,
        Tappable,
        Conditionable,
        Dumpable,
        Macroable;

    public function __construct(
        protected array $fields = [],
    )
    {
    }

    public function fields(array $fields): static
    {
        $this->fields = $fields;

        return $this;
    }

    public function toArray(): array
    {
        return collect($this->fields)->toArray();
    }
}