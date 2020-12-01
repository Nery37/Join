<div class="table-responsive">
    <table class="table" id="categoriaProduto-table">
        <thead>
            <tr>
                <th>Nome Categoria</th>
                <th colspan="3">Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categoriaProduto as $categoriaProduto)
            <tr>
                <td>{{ $categoriaProduto->nome_categoria }}</td>
                <td>
                    {!! Form::open(['route' => ['categoriaProduto.destroy', $categoriaProduto->id_categoria_planejamento], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('categoriaProduto.show', [$categoriaProduto->id_categoria_planejamento]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('categoriaProduto.edit', [$categoriaProduto->id_categoria_planejamento]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Você tem certeza?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
