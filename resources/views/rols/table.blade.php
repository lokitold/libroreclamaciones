<table class="table table-responsive" id="rols-table">
    <thead>
        <th>Name</th>
        <th>Status</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($rols as $rol)
        <tr>
            <td>{!! $rol->name !!}</td>
            <td>{!! $rol->status !!}</td>
            <td>{!! $rol->created_at !!}</td>
            <td>{!! $rol->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['rols.destroy', $rol->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('rols.show', [$rol->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('rols.edit', [$rol->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>