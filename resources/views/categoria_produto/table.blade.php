<div class="table-responsive">
    <table class="table" id="categoriaProduto-table">
        <thead>
            <tr>
                <th>Nome Categoria</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categoriaProduto as $categoriaProduto)
            <tr>
                <td>{{ $categoriaProduto->nome_categoria }}</td>
                <td>
                    {!! Form::open(['route' => ['categoriaProduto.destroy', $categoriaProduto->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('categoriaProduto.show', [$categoriaProduto->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('categoriaProduto.edit', [$categoriaProduto->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
