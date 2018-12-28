{{-- Campos de upload de foto --}}
{!! Form::file(isset($name) ? $name : 'file', isset($extraAttrs) ? $extraAttrs : null) !!}

@if (isset($comCropper))

    <button type="button" class="btn btn-lg btn-warning" id="btnStartCrop">Cortar Imagem</button>
    <button type="button" class="btn btn-lg btn-success" id="btnConfirmCrop" style="display:none;">Confirmar</button>
    <button type="button" class="btn btn-lg btn-danger" id="btnCancelCrop" style="display:none;">Cancelar</button>

    <input type="hidden" value="{{$aspectRatio}}" name="aspectRatio" id="aspectRatio"/>
    <input type="hidden" value="{{$formID}}" name="formID" id="formID"/>
    <input type="hidden" value="{{$previewID}}" name="previewID" id="previewID"/>

@endif


