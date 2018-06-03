<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\CategoriaRepository;
use App\Repositories\PalavraRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PalavrasController extends Controller
{
    protected $palavraRepository;

    protected $categoriaRepository;

    public function __construct(PalavraRepository $palavraRepository, CategoriaRepository $categoriaRepository)
    {
        $this->palavraRepository = $palavraRepository;
        $this->categoriaRepository = $categoriaRepository;
    }

    public function index()
    {
        $palavras = $this->palavraRepository->all();
        return view('admin.palavras.index', compact('palavras'));
    }

    public function create()
    {
        $categorias = $this->categoriaRepository->all();
        return view('admin.palavras.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $upload = $this->adicionaImagem($request);
        $request->request->add(['imagem' => $upload]);

        $this->palavraRepository->create($request->all());

        return redirect()->back()->with('sucess', 'Palavra inserida com sucesso');
    }

    public function show($id)
    {
        $palavra = $this->palavraRepository->find($id);
        $categorias = $this->categoriaRepository->all();

        return view('admin.palavras.show', compact('palavra', 'categorias'));
    }

    public function update(Request $request, $id)
    {
        $upload = $this->adicionaImagem($request);
        $request->request->add(['imagem' => $upload]);

        $this->palavraRepository->update($request->all(), $id);

        return redirect()->back()->with('sucess', 'Palavra atualizada com sucesso');
    }

    public function destroy(Request $request)
    {
        try {

            $removido = $this->palavraRepository->delete($request->id);

            return response()->json($removido);
        } catch (\Exception $e) {

            echo $e->getMessage();

            exit;
        }
    }

    public function adicionaImagem(Request $request)
    {
        $nomeImagem = null;

        if ($request->hasFile('imagem_palavra') && $request->file('imagem_palavra')->isValid())
        {

            $nome = uniqid(date('HisYmd'));

            $extensao = $request->imagem_palavra->extension();

            $nomeImagem = "{$nome}.{$extensao}";

            $upload = $request->imagem_palavra->storeAs('storage/imagens-palavras', $nomeImagem);


            if ( !$upload )
            {
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload da imagem.');
            }

        }

        if (empty($upload)){
            return null;
        }

        return $upload;
    }
}
