<table class="table table-responsive" id="permissionRoles-table">
    <thead>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Rol Id</th>
        <th>Permission Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($permissionRoles as $permissionRole)
        <tr>
            <td>{!! $permissionRole->created_at !!}</td>
            <td>{!! $permissionRole->updated_at !!}</td>
            <td>{!! $permissionRole->rol_id !!}</td>
            <td>{!! $permissionRole->permission_id !!}</td>
            <td>
                {!! Form::open(['route' => ['permissionRoles.destroy', $permissionRole->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('permissionRoles.show', [$permissionRole->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('permissionRoles.edit', [$permissionRole->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>