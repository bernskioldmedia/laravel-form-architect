<?php

class Checkbox extends HtmlFormField
{

    protected function getViewComponent(): string
    {
        return config('form-architect.components.checkbox', 'form.checkbox');
    }

}