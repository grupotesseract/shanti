
{{-- Campos de upload de foto --}}
{!! Form::label('file', isset($label) ? $label : 'Foto para listagem:') !!}
{!! Form::file('file', isset($extraAttrs) ? $extraAttrs : null) !!}
