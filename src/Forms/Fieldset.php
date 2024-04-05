<?php

namespace BernskioldMedia\LaravelFormArchitect\Forms;

use BernskioldMedia\LaravelFormArchitect\Concerns\Dumpable;
use BernskioldMedia\LaravelFormArchitect\Concerns\HasFields;
use BernskioldMedia\LaravelFormArchitect\Concerns\Makeable;
use BernskioldMedia\LaravelFormArchitect\Concerns\Metable;
use BernskioldMedia\LaravelFormArchitect\Concerns\SupportsHelpText;
use BernskioldMedia\LaravelFormArchitect\Concerns\SupportsLabel;
use BernskioldMedia\LaravelFormArchitect\Contracts\ViewComponentable;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Traits\Conditionable;
use Illuminate\Support\Traits\Macroable;
use Illuminate\Support\Traits\Tappable;
use Illuminate\View\ComponentAttributeBag;
use function array_merge;
use function collect;
use function config;

/**
 * @method static Fieldset make(string $label, array $fields = [])
 */
class Fieldset implements Arrayable, ViewComponentable
{
    use Makeable,
        Tappable,
        Conditionable,
        Dumpable,
        Macroable,
        Metable,
        SupportsHelpText,
        HasFields,
        SupportsLabel;

    public int $columns = 1;

    public function __construct(
        string $label,
        array  $fields = [],
    )
    {
    }

    protected function getViewComponent(): string
    {
        return config('form-architect.components.fieldset', 'form.fieldset');
    }

    protected function fieldsetData(): array
    {
        return array_merge($this->meta(), [
            'label' => $this->label,
            'helpText' => $this->helpText,
            'columns' => $this->columns,
        ]);
    }

    public function toViewComponentAttributes(): ComponentAttributeBag
    {
        return new ComponentAttributeBag($this->fieldsetData());
    }

    public function toArray()
    {
        return array_merge($this->fieldsetData(), [
            'fields' => collect($this->fields)->toArray(),
        ]);
    }

    public function columns(int $columns = 1): static
    {
        $this->columns = $columns;

        return $this;
    }
}