<?php

namespace BernskioldMedia\LaravelFormArchitect\Forms\Fields;

use BernskioldMedia\LaravelFormArchitect\Concerns\SupportsMaxLength;
use BernskioldMedia\LaravelFormArchitect\Concerns\SupportsPlaceholder;

/**
 * @method static Textarea make(string $name, string $label = '')
 */
class Textarea extends HtmlFormField
{
    use SupportsPlaceholder,
        SupportsMaxLength;

    public int $rows = 3;

    protected function fieldData(): array
    {
        return array_merge(parent::fieldData(), [
            'placeholder' => $this->placeholder,
            'rows' => $this->rows,
            'maxlength' => $this->maxlength,
        ]);
    }

    public function viewComponent(): string
    {
        return config('form-architect.components.textarea', 'form.textarea');
    }

    public function rows(int $rows): self
    {
        $this->rows = $rows;

        return $this;
    }
}