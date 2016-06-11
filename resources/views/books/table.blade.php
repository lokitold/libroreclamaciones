<table class="table table-responsive" id="books-table">
    <thead>
        <th>Codigo</th>
        <th>Data</th>
        <th>Status</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Office Id</th>
        <th>Client Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($books as $book)
        <tr>
            <td>{!! $book->codigo !!}</td>
            <td>{!! $book->data !!}</td>
            <td>{!! $book->status !!}</td>
            <td>{!! $book->created_at !!}</td>
            <td>{!! $book->updated_at !!}</td>
            <td>{!! $book->office_id !!}</td>
            <td>{!! $book->client_id !!}</td>
            <td>
                {!! Form::open(['route' => ['books.destroy', $book->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('books.show', [$book->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('books.edit', [$book->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>