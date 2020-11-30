<!-- Data Cadastro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_cadastro', 'Data Cadastro:') !!}
    {!! Form::date('data_cadastro', null, ['class' => 'form-control','id'=>'data_cadastro']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#data_cadastro').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

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

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('produtos.index') }}" class="btn btn-default">Cancel</a>
</div>
