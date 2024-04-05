<?php

namespace BernskioldMedia\LaravelFormArchitect;

use BernskioldMedia\LaravelFormArchitect\Concerns\Dumpable;
use BernskioldMedia\LaravelFormArchitect\Concerns\Makeable;
use BernskioldMedia\LaravelFormArchitect\Concerns\Metable;
use BernskioldMedia\LaravelFormArchitect\Concerns\OutputsToViewComponent;
use BernskioldMedia\LaravelFormArchitect\Concerns\SupportsDescription;
use BernskioldMedia\LaravelFormArchitect\Concerns\SupportsLabel;
use BernskioldMedia\LaravelFormArchitect\Concerns\SupportsVisibility;
use BernskioldMedia\LaravelFormArchitect\Contracts\ViewComponentable;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Traits\Conditionable;
use Illuminate\Support\Traits\Macroable;
use Illuminate\Support\Traits\Tappable;
use function array_merge;

/**
 * @method static Field make(string $name, string $label = '')
 */
abstract class Field implements Arrayable, ViewComponentable
{
    use Makeable,
        Conditionable,
        Tappable,
        Dumpable,
        Macroable,
        Metable,
        SupportsVisibility,
        SupportsDescription,
        SupportsLabel,
        OutputsToViewComponent;

    protected ?string $id = null;

    public mixed $value = null;

    public bool $fullwidth = false;

    public ?int $spanColumns = null;

    public function __construct(
        public string $name,
        string        $label = '',
    )
    {
    }

    public function id(): string
    {
        return $this->id ?? $this->name;
    }

    protected function fieldData(): array
    {
        return [
            'id' => $this->id(),
            'name' => $this->name,
            'value' => $this->value,
            'visible' => $this->visible,
            'description' => $this->description,
            'fullwidth' => $this->fullwidth,
            'spanColumns' => $this->spanColumns,
        ];
    }

    public function toArray()
    {
        return array_merge($this->meta(), $this->fieldData());
    }

    public function name(?string $name = null): static
    {
        $this->name = $name;

        return $this;
    }

    public function fullwidth(bool $fullwidth = true): static
    {
        $this->fullwidth = $fullwidth;

        return $this;
    }

    public function spanColumns(int $columns): static
    {
        $this->spanColumns = $columns;

        return $this;
    }
}