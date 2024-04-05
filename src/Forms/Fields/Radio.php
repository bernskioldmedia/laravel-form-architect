<?php

namespace BernskioldMedia\LaravelFormArchitect\Forms\Fields;

class Radio extends HtmlFormField
{
    public function viewComponent(): string
    {
        return config('form-architect.components.radio', 'form.radio');
    }
}