<?php

namespace BernskioldMedia\LaravelFormArchitect\Forms;

use BernskioldMedia\LaravelFormArchitect\Concerns\Dumpable;
use BernskioldMedia\LaravelFormArchitect\Concerns\HasFields;
use BernskioldMedia\LaravelFormArchitect\Concerns\Makeable;
use BernskioldMedia\LaravelFormArchitect\Concerns\Metable;
use BernskioldMedia\LaravelFormArchitect\Contracts\ViewComponentable;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Traits\Conditionable;
use Illuminate\Support\Traits\Macroable;
use Illuminate\Support\Traits\Tappable;
use Illuminate\View\ComponentAttributeBag;
use function array_merge;
use function config;

class Form implements Arrayable, ViewComponentable
{
    use Makeable,
        Tappable,
        Conditionable,
        Dumpable,
        Macroable,
        Metable,
        HasFields;

    public function __construct(
        array $fields = [],
    )
    {
    }

    protected function getViewComponent(): string
    {
        return config('form-architect.components.form', 'form.index');
    }

    protected function formData(): array
    {
        return array_merge($this->meta(), [

        ]);
    }

    public function toViewComponentAttributes(): ComponentAttributeBag
    {
        return new ComponentAttributeBag($this->formData());
    }

    public function toArray(): array
    {
        return array_merge($this->formData(), [
            'fields' => collect($this->fields)->toArray(),
        ]);
    }
}