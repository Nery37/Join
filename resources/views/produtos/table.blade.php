<div class="table-responsive">
    <table class="table" id="produtos-table">
        <thead>
            <tr>
                <th>Data Cadastro</th>
        <th>Nome Produto</th>
        <th>Valor Produto</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($produtos as $produto)
            <tr>
            <td>{{ $produto->data_cadastro->format('d/m/Y H:i:s') }}</td>
            <td>{{ $produto->nome_produto }}</td>
            <td>R$ {{ number_format($produto->valor_produto, 2, ',', '.') }}</td>
                <td>
                    {!! Form::open(['route' => ['produtos.destroy', $produto->id_produto], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('produtos.show', [$produto->id_produto]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('produtos.edit', [$produto->id_produto]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
