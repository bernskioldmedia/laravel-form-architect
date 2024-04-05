<?php

namespace BernskioldMedia\LaravelFormArchitect\Forms\Fields;

use BernskioldMedia\LaravelFormArchitect\Concerns\SupportsPlaceholder;
use BernskioldMedia\LaravelFormArchitect\Concerns\SupportsPrefix;
use BernskioldMedia\LaravelFormArchitect\Concerns\SupportsSuffix;
use BernskioldMedia\LaravelFormArchitect\Enums\InputType;
use BernskioldMedia\LaravelFormArchitect\Exceptions\InvalidFormFieldConfigurationException;

/**
 * @method static Input make(string $name, string $label = '')
 */
class Input extends HtmlFormField
{
    use SupportsSuffix,
        SupportsPrefix,
        SupportsPlaceholder;

    public InputType $type = InputType::Text;

    public ?int $min = null;

    public ?int $max = null;

    public ?int $step = null;

    protected function fieldData(): array
    {
        $data = [
            'type' => $this->type,
            'prefix' => $this->prefix,
            'suffix' => $this->suffix,
            'placeholder' => $this->placeholder,
        ];

        if ($this->type === InputType::Number) {
            $data['min'] = $this->min;
            $data['max'] = $this->max;
            $data['step'] = $this->step;
        }

        return array_merge(parent::fieldData(), $data);
    }

    public function viewComponent(): string
    {
        return config('form-architect.components.input', 'form.input');
    }

    public function type(InputType $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function text(): self
    {
        return $this->type(InputType::Text);
    }

    public function search(): self
    {
        return $this->type(InputType::Search);
    }

    public function email(): self
    {
        return $this->type(InputType::Email);
    }

    public function password(): self
    {
        return $this->type(InputType::Password);
    }

    public function tel(): self
    {
        return $this->type(InputType::Tel);
    }

    public function url(): self
    {
        return $this->type(InputType::Url);
    }

    public function number(): self
    {
        return $this->type(InputType::Number);
    }

    /**
     * @throws InvalidFormFieldConfigurationException
     */
    public function min(int $min): self
    {
        if ($this->type !== InputType::Number) {
            throw new InvalidFormFieldConfigurationException('Step can only be set on number inputs.');
        }

        $this->min = $min;

        return $this;
    }

    /**
     * @throws InvalidFormFieldConfigurationException
     */
    public function max(int $max): self
    {
        if ($this->type !== InputType::Number) {
            throw new InvalidFormFieldConfigurationException('Step can only be set on number inputs.');
        }

        $this->max = $max;

        return $this;
    }

    /**
     * @throws InvalidFormFieldConfigurationException
     */
    public function step(int $step): self
    {
        if ($this->type !== InputType::Number) {
            throw new InvalidFormFieldConfigurationException('Step can only be set on number inputs.');
        }

        $this->step = $step;

        return $this;
    }
}