<?php

class Checkbox extends HtmlFormField
{

    public function viewComponent(): string
    {
        return config('form-architect.components.checkbox', 'form.checkbox');
    }

}