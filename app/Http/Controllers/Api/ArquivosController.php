<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Arquivos;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArquivosRequest;
use App\Http\Resources\ArquivosResource;

class ArquivosController extends Controller
{
    public function index()
    {
        $Arquivos = Arquivos::all();
        return ArquivosResource::collection($Arquivos);
    }

    public function store(StoreArquivosRequest $request)
    {
        $Arquivo = Arquivos::create($request->validated());
        return new ArquivosResource($Arquivo);
    }

    public function update(StoreArquivosRequest $request, $id)
    {
        $Arquivo = Arquivos::find($id);
        $Arquivo->update($request->validated());
        return new ArquivosResource($Arquivo);
    }

    public function destroy($id)
    {
        $Arquivo = Arquivos::find($id);
        $Arquivo->delete();
        return response(null, 204);
    }
}
