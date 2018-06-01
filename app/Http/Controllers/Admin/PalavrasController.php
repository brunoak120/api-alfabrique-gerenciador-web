<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\PalavraRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PalavrasController extends Controller
{
    protected $palavraRepository;

    public function __construct(PalavraRepository $palavraRepository)
    {
        $this->palavraRepository = $palavraRepository;
    }

    public function index()
    {
        $palavras = $this->palavraRepository->all();
        return view('admin.palavras.index', compact('palavras'));
    }

    public function create()
    {
        return view('admin.palavras.create');
    }

    public function show(Request $request)
    {
        $palavra = $this->palavraRepository->find($request->id);
        return view('admin.palavras.show', compact('palavra'));
    }
}
