<?php

use BernskioldMedia\LaravelFormArchitect\Concerns\SupportsDisabled;
use BernskioldMedia\LaravelFormArchitect\Concerns\SupportsHelpText;
use BernskioldMedia\LaravelFormArchitect\Concerns\SupportsPlaceholder;
use BernskioldMedia\LaravelFormArchitect\Concerns\SupportsRequired;
use BernskioldMedia\LaravelFormArchitect\Forms\Field;

abstract class HtmlFormField extends Field
{
    use SupportsDisabled,
        SupportsRequired,
        SupportsPlaceholder,
        SupportsHelpText;

    protected function fieldData(): array
    {
        return array_merge(parent::fieldData(), [
            'disabled' => $this->disabled,
            'helpText' => $this->helpText,
            'showOptionalLabel' => $this->showOptionalLabel,
            'required' => $this->required,
        ]);
    }
}