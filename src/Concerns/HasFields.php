<?php

namespace BernskioldMedia\LaravelFormArchitect\Concerns;

trait HasFields
{

    public array $fields = [];

    public function fields(array $fields): static
    {
        $this->fields = $fields;

        return $this;
    }
}