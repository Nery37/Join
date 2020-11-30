<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProdutoRequest;
use App\Http\Requests\UpdateProdutoRequest;
use App\Repositories\ProdutoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Produto;
use Flash;
use Response;

class ProdutoController extends AppBaseController
{
    /** @var  ProdutoRepository */
    private $produtoRepository;

    public function __construct(ProdutoRepository $produtoRepo)
    {
        $this->produtoRepository = $produtoRepo;
    }

    /**
     * Display a listing of the Produto.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $produtos = $this->produtoRepository->all();

        return view('produtos.index')
            ->with('produtos', $produtos);
    }

    /**
     * Show the form for creating a new Produto.
     *
     * @return Response
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created Produto in storage.
     *
     * @param CreateProdutoRequest $request
     *
     * @return Response
     */
    public function store(CreateProdutoRequest $request)
    {
        $input = $request->all();

        $input['id_categoria_produto'] = 1;
        $input['valor_produto'] = str_replace(".", "", $input['valor_produto']);
        $input['valor_produto'] = str_replace(",", ".", $input['valor_produto']);

        $produto = $this->produtoRepository->create($input);

        Flash::success('Produto salvo com sucesso.');

        return redirect(route('produtos.index'));
    }

    /**
     * Display the specified Produto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $produto = Produto::where('id_produto', $id)->first();

        if (empty($produto)) {
            Flash::error('Produto não encontrado');

            return redirect(route('produtos.index'));
        }

        return view('produtos.show')->with('produto', $produto);
    }

    /**
     * Show the form for editing the specified Produto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $produto = Produto::where('id_produto', $id)->first();

        if (empty($produto)) {
            Flash::error('Produto não encontrado');

            return redirect(route('produtos.index'));
        }

        return view('produtos.edit')->with('produto', $produto);
    }

    /**
     * Update the specified Produto in storage.
     *
     * @param int $id
     * @param UpdateProdutoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProdutoRequest $request)
    {
        $produto = Produto::where('id_produto', $id)->first();

        if (empty($produto)) {
            Flash::error('Produto não encontrado');

            return redirect(route('produtos.index'));
        }

        $produto = $this->produtoRepository->update($request->all(), $id);

        Flash::success('Produto atualizado com sucesso.');

        return redirect(route('produtos.index'));
    }

    /**
     * Remove the specified Produto from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $produto = Produto::where('id_produto', $id)->first();

        if (empty($produto)) {
            Flash::error('Produto não encontrado');

            return redirect(route('produtos.index'));
        }

        Produto::where('id_produto', $id)->delete($id);

        Flash::success('Produto deletado com sucesso');

        return redirect(route('produtos.index'));
    }
}
