<?php

class Radio extends HtmlFormField
{
    protected function getViewComponent(): string
    {
        return config('form-architect.components.radio', 'forms.radio');
    }
}