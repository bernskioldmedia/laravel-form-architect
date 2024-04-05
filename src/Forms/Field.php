<?php

namespace BernskioldMedia\LaravelFormArchitect;

use BernskioldMedia\LaravelFormArchitect\Concerns\Dumpable;
use BernskioldMedia\LaravelFormArchitect\Concerns\Makeable;
use BernskioldMedia\LaravelFormArchitect\Concerns\Metable;
use BernskioldMedia\LaravelFormArchitect\Concerns\SupportsDescription;
use BernskioldMedia\LaravelFormArchitect\Concerns\SupportsVisibility;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Traits\Conditionable;
use Illuminate\Support\Traits\Macroable;
use Illuminate\Support\Traits\Tappable;
use Illuminate\View\ComponentAttributeBag;
use function array_merge;

/**
 * @method static Field make(string $name, string $label = '')
 */
abstract class Field implements Arrayable
{
    use Makeable,
        Conditionable,
        Tappable,
        Dumpable,
        Macroable,
        Metable,
        SupportsVisibility,
        SupportsDescription;

    protected ?string $id = null;

    public mixed $value = null;

    public function __construct(
        public string $name,
        public string $label = '',
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
        ];
    }

    abstract protected function getViewComponent(): string;

    public function viewComponentProps(): ComponentAttributeBag
    {
        return new ComponentAttributeBag($this->toArray());
    }

    public function toArray()
    {
        return array_merge($this->meta(), $this->fieldData());
    }

    public function label(?string $label = null): static
    {
        $this->label = $label;

        return $this;
    }

    public function name(?string $name = null): static
    {
        $this->name = $name;

        return $this;
    }
}