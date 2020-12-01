<!-- Nome Produto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome_produto', 'Nome Produto:') !!}
    {!! Form::text('nome_produto', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Produto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_produto', 'Valor Produto:') !!}
    {!! Form::text('valor_produto', null, ['class' => 'form-control']) !!}
</div>

<!-- Categoria Field -->
<div class="form-group col-sm-6" >
    {!! Form::label('id_categoria_produto', 'Categoria:') !!}
    {!! Form::select('id_categoria_produto', $categorias, null, ['placeholder' => 'Escolha uma categoria', 'class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('produtos.index') }}" class="btn btn-default">Cancelar</a>
</div>
