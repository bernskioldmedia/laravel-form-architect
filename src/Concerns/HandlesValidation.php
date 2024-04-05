<?php

namespace BernskioldMedia\LaravelFormArchitect\Concerns;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Validation\Rule;
use function count;
use function explode;
use function func_get_args;
use function is_string;

trait HandlesValidation
{

    public array $rules = [];

    public function rules(Rule|ValidationRule|string|array $rules): static
    {
        $parameters = func_get_args();

        $this->rules = (
            $rules instanceof Rule ||
            $rules instanceof ValidationRule ||
            is_string($rules) ||
            count($parameters) > 1
        ) ? $parameters : $rules;

        return $this;
    }
}