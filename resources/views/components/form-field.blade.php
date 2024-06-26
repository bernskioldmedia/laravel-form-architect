@php use BernskioldMedia\LaravelFormArchitect\Forms\Fieldset; @endphp
@props(['field'])
@if($field instanceof Fieldset)
    <x-dynamic-component :component="config('form-architect.components.fieldset')"
                         :attributes="$field->toViewComponentAttributes()">
        @foreach($field->fields as $field)
            <x-form-architect::form-field :field="$field"/>
        @endforeach
    </x-dynamic-component>
@else
    <x-dynamic-component :component="config('form-architect.components.field')"
                         :attributes="$field->toWrapperViewComponentAttributes()">
        <x-dynamic-component :component="$field->viewComponent()"
                             :attributes="$field->toViewComponentAttributes()"/>
    </x-dynamic-component>
@endif