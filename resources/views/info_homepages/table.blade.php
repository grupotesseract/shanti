<table class="table table-responsive" id="infoHomepages-table">
    <thead>
        <tr>
            
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($infoHomepages as $infoHomepage)
        <tr>
            
            <td>
                {!! Form::open(['route' => ['infoHomepages.destroy', $infoHomepage->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('infoHomepages.show', [$infoHomepage->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('infoHomepages.edit', [$infoHomepage->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>