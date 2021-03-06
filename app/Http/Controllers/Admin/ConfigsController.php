<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConfigsUpdateRequest;
use App\Repositories\ConfigRepository;
use Illuminate\Http\Request;

class ConfigsController extends Controller
{
    protected $configRepository;

    public function __construct(ConfigRepository $configRepository)
    {
        $this->configRepository = $configRepository;
    }

    public function index()
    {
        $configs = $this->configRepository->paginate(15);

        return view('admin.configs.index', compact('configs'));
    }

    public function show($id)
    {
        $config = $this->configRepository->find($id);

        return view('admin.configs.show', compact('config'));
    }

    public function update(ConfigsUpdateRequest $request, $id)
    {
        $this->configRepository->update(['valor' => $request->valor], $id);

        flash('Configuração atualizada com sucesso.')->success();
        return redirect()->back();
    }
}
