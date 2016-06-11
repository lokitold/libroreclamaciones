<table class="table table-responsive" id="books-table">
    <thead>
        
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($books as $book)
        <tr>
            
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