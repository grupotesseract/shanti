{{-- Campos de upload de foto --}}
{!! Form::label(isset($name) ? $name : 'file', isset($label) ? $label : 'Foto para listagem:') !!}
{!! Form::file(isset($name) ? $name : 'file', isset($extraAttrs) ? $extraAttrs : null) !!}
