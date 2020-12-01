<!-- Nome Categoria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome_categoria', 'Nome Categoria:') !!}
    {!! Form::text('nome_categoria', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('categoriaProduto.index') }}" class="btn btn-default">Cancelar</a>
</div>
