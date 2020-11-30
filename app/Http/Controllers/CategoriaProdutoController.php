<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoriaProdutoRequest;
use App\Http\Requests\UpdateCategoriaProdutoRequest;
use App\Repositories\CategoriaProdutoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\CategoriaProduto;
use Flash;
use Response;

class CategoriaProdutoController extends AppBaseController
{
    /** @var  CategoriaProdutoRepository */
    private $categoriaProdutoRepository;

    public function __construct(CategoriaProdutoRepository $categoriaProdutoRepo)
    {
        $this->categoriaProdutoRepository = $categoriaProdutoRepo;
    }

    /**
     * Display a listing of the CategoriaProduto.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $categoriaProduto = $this->categoriaProdutoRepository->all();

        return view('categoria_produto.index')
            ->with('categoriaProduto', $categoriaProduto);
    }

    /**
     * Show the form for creating a new CategoriaProduto.
     *
     * @return Response
     */
    public function create()
    {
        return view('categoria_produto.create');
    }

    /**
     * Store a newly created CategoriaProduto in storage.
     *
     * @param CreateCategoriaProdutoRequest $request
     *
     * @return Response
     */
    public function store(CreateCategoriaProdutoRequest $request)
    {
        $input = $request->all();

        $categoriaProduto = $this->categoriaProdutoRepository->create($input);

        Flash::success('Categoria salva com sucesso.');

        return redirect(route('categoriaProduto.index'));
    }

    /**
     * Display the specified CategoriaProduto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        
        $categoriaProduto = CategoriaProduto::where('id_categoria_planejamento', $id)->first();

        if (empty($categoriaProduto)) {
            Flash::error('Categoria não encontrada.');

            return redirect(route('categoriaProduto.index'));
        }

        return view('categoria_produto.show')->with('categoriaProduto', $categoriaProduto);
    }

    /**
     * Show the form for editing the specified CategoriaProduto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $categoriaProduto = CategoriaProduto::where('id_categoria_planejamento', $id)->first();

        if (empty($categoriaProduto)) {
            Flash::error('Categoria não encontrada.');

            return redirect(route('categoriaProduto.index'));
        }

        return view('categoria_produto.edit')->with('categoriaProduto', $categoriaProduto);
    }

    /**
     * Update the specified CategoriaProduto in storage.
     *
     * @param int $id
     * @param UpdateCategoriaProdutoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategoriaProdutoRequest $request)
    {
        $categoriaProduto = CategoriaProduto::where('id_categoria_planejamento', $id)->first();

        if (empty($categoriaProduto)) {
            Flash::error('Categoria não encontrada.');

            return redirect(route('categoriaProduto.index'));
        }

        $categoriaProduto = $this->categoriaProdutoRepository->update($request->all(), $id);

        Flash::success('Categoria atualizada com sucesso.');

        return redirect(route('categoriaProduto.index'));
    }

    /**
     * Remove the specified CategoriaProduto from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $categoriaProduto = CategoriaProduto::where('id_categoria_planejamento', $id)->first();

        if (empty($categoriaProduto)) {
            Flash::error('Categoria não encontrada.');

            return redirect(route('categoriaProduto.index'));
        }

        CategoriaProduto::where('id_categoria_planejamento', $id)->delete($id);

        Flash::success('Categoria deletada com sucesso.');

        return redirect(route('categoriaProduto.index'));
    }
}
