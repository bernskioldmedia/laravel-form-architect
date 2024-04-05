@php use BernskioldMedia\LaravelFormArchitect\Forms\Fieldset; @endphp
@props(['form'])
<x-dynamic-component :component="config('form-architect.components.form')"
                     :attributes="$form->toViewComponentAttributes()">
    @foreach($form->fields as $field)
        <x-form-architect::form-field :field="$field"/>
    @endforeach
</x-dynamic-component>
