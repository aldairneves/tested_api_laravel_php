<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Senhas;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSenhasRequest;
use App\Http\Resources\SenhasResource;

class SenhasController extends Controller
{
    public function index()
    {
        $Senhas = Senhas::all();
        return SenhasResource::collection($Senhas);
    }

    public function store(StoreSenhasRequest $request)
    {
        $senha = Senhas::create($request->validated());
        return new SenhasResource($senha);
    }

    public function update(StoreSenhasRequest $request, $id)
    {

        $senha = Senhas::find($id);
        $senha->update($request->validated());
        return new SenhasResource($senha);
    }

    public function destroy($id)
    {
        $senha = Senhas::find($id);
        $senha->delete();
        return response(null, 204);
    }
}