<?php

namespace BernskioldMedia\LaravelFormArchitect\Concerns;

use function explode;
use function property_exists;

trait SupportsLivewire
{

    public ?string $wireModel = null;

    public bool $isWiredLive = false;

    public function wired(?string $model = null): static
    {
        if ($model === null && property_exists($this, 'name')) {
            $this->wireModel = $this->name;
        } else {
            $this->wireModel = $model;
        }

        return $this;
    }

    public function live(): static
    {
        $this->isWiredLive = true;

        return $this;
    }

}