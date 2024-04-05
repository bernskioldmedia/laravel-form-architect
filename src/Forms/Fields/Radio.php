<?php

namespace BernskioldMedia\LaravelFormArchitect\Forms\Fields;

/**
 * @method static Radio make(string $name, string $label = '')
 */
class Radio extends HtmlFormField
{
    public function viewComponent(): string
    {
        return config('form-architect.components.radio', 'form.radio');
    }
}