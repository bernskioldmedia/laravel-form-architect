<?php

namespace BernskioldMedia\LaravelFormArchitect\Concerns;

trait Metable
{

    public array $meta = [];

    public function meta(): array
    {
        return $this->meta;
    }

    public function withMeta(array $meta): static
    {
        $this->meta = array_merge($this->meta, $meta);

        return $this;
    }
}