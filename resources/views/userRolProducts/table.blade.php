<table class="table table-responsive" id="userRolProducts-table">
    <thead>
        <th>Created At</th>
        <th>Updated At</th>
        <th>User Id</th>
        <th>Rol Id</th>
        <th>Product Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($userRolProducts as $userRolProduct)
        <tr>
            <td>{!! $userRolProduct->created_at !!}</td>
            <td>{!! $userRolProduct->updated_at !!}</td>
            <td>{!! $userRolProduct->user_id !!}</td>
            <td>{!! $userRolProduct->rol_id !!}</td>
            <td>{!! $userRolProduct->product_id !!}</td>
            <td>
                {!! Form::open(['route' => ['userRolProducts.destroy', $userRolProduct->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('userRolProducts.show', [$userRolProduct->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('userRolProducts.edit', [$userRolProduct->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>