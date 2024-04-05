<?php

namespace BernskioldMedia\LaravelFormArchitect\Concerns;

trait Makeable
{
    public static function make(...$args)
    {
        return new static(...$args);
    }
}