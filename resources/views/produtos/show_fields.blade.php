<!-- Data Cadastro Field -->
<div class="form-group">
    {!! Form::label('data_cadastro', 'Data Cadastro:') !!}
    <p>{{ $produto->data_cadastro }}</p>
</div>

<!-- Nome Produto Field -->
<div class="form-group">
    {!! Form::label('nome_produto', 'Nome Produto:') !!}
    <p>{{ $produto->nome_produto }}</p>
</div>

<!-- Valor Produto Field -->
<div class="form-group">
    {!! Form::label('valor_produto', 'Valor Produto:') !!}
    <p>{{ $produto->valor_produto }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $produto->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $produto->updated_at }}</p>
</div>

