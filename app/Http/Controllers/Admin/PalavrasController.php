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
        return view('admin.palavras.index');
    }
}
