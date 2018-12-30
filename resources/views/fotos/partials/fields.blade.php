{{-- Campos de upload de foto --}}

@if (isset($comCropper))

    <div class="controles-cropper">
        {!! Form::file(isset($name) ? $name : 'file', isset($extraAttrs) ? $extraAttrs : null) !!}

        <button 
            type="button" 
            data-aspectratio="{{$aspectRatio}}" 
            data-formid="{{$formID}}" 
            data-previewid="{{$previewID}}" 
            class="btn btn-lg btn-warning btnStartCrop">Cortar Imagem</button>

        <button
            type="button"
            data-aspectratio="{{$aspectRatio}}"
            data-formid="{{$formID}}"
            data-previewid="{{$previewID}}"
            class="btn btn-lg btn-success btnConfirmCrop" style="display:none;">Confirmar</button>

        <button
            type="button"
            data-aspectratio="{{$aspectRatio}}"
            data-formid="{{$formID}}"
            data-previewid="{{$previewID}}"
            class="btn btn-lg btn-danger btnCancelCrop" style="display:none;">Cancelar</button>

    </div>
@else
    {!! Form::file(isset($name) ? $name : 'file', isset($extraAttrs) ? $extraAttrs : null) !!}
@endif



