<?php

namespace BernskioldMedia\LaravelFormArchitect\Concerns;

trait Makeable
{
    public static function make(...$args): static
    {
        return new static(...$args);
    }
}