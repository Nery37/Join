<li class="{{ Request::is('clientes*') ? 'active' : '' }}">
    <a href="{{ route('clientes.index') }}"><i class="fa fa-edit"></i><span>Clientes</span></a>
</li>

<li class="{{ Request::is('produtos*') ? 'active' : '' }}">
    <a href="{{ route('produtos.index') }}"><i class="fa fa-edit"></i><span>Produtos</span></a>
</li>

<li class="{{ Request::is('categoriaProdutos*') ? 'active' : '' }}">
    <a href="{{ route('categoriaProdutos.index') }}"><i class="fa fa-edit"></i><span>Categoria Produtos</span></a>
</li>

