{{-- Blade para modal simples --}}
{{-- pode receber 'modal-id', 'modal-title', 'modal-body' e modal-footer --}}

<div id="{{ isset($modalId) ? $modalId : 'modal'}}" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">{{ isset($modalTitle) ? $modalTitle : ''}}</h4>
            </div>
            <div class="modal-body" style="min-height:200px; height:100%">
                {!! isset($modalBody) ? $modalBody : '' !!}
            </div>
            <div class="modal-footer">
                {!! isset($modalFooter) ? $modalFooter : '' !!}
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
