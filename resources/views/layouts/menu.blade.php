<li class="{{ Request::is('produtos*') ? 'active' : '' }}">
    <a href="{{ route('produtos.index') }}"><i class="fa fa-edit"></i><span>Produtos</span></a>
</li>

<li class="{{ Request::is('categoriaProduto*') ? 'active' : '' }}">
    <a href="{{ route('categoriaProduto.index') }}"><i class="fa fa-edit"></i><span>Categoria Produto</span></a>
</li>

