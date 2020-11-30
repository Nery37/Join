<!-- Nome Categoria Field -->
<div class="form-group">
    {!! Form::label('nome_categoria', 'Nome Categoria:') !!}
    <p>{{ $categoriaProduto->nome_categoria }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $categoriaProduto->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $categoriaProduto->updated_at }}</p>
</div>

