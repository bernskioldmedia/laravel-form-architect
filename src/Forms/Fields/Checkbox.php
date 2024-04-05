<?php

namespace BernskioldMedia\LaravelFormArchitect\Forms\Fields;

use BernskioldMedia\LaravelFormArchitect\Forms\Field;

/**
 * @method static Checkbox make(string $name, string $label = '')
 */
class Checkbox extends HtmlFormField
{

    public function viewComponent(): string
    {
        return config('form-architect.components.checkbox', 'form.checkbox');
    }

}