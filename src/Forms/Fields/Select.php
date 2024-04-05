<?php

use BernskioldMedia\LaravelFormArchitect\Concerns\SupportsOptions;

class Select extends HtmlFormField
{
    use SupportsOptions;

    public bool $multiple = false;

    protected function fieldData(): array
    {
        return array_merge(parent::fieldData(), [
            'options' => $this->options,
            'grouped' => $this->isOptionsGrouped,
        ]);
    }

    protected function getViewComponent(): string
    {
        if ($this->multiple) {
            return config('form-architect.components.multiselect', 'form.multiselect');
        }

        return config('form-architect.components.select', 'form.select');
    }

    public function multiple(bool $multiple = true): static
    {
        $this->multiple = $multiple;

        return $this;
    }
}