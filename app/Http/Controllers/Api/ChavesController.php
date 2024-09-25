<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Chaves;
use Illuminate\Http\Request;
use App\Http\Requests\StoreChavesRequest;
use App\Http\Resources\ChavesResource;

class ChavesController extends Controller
{
    public function index()
    {
        $Chaves = Chaves::all();
        return ChavesResource::collection($Chaves);
    }

    public function store(StoreChavesRequest $request)
    {
        $chave = Chaves::create($request->validated());
        return new ChavesResource($chave);
    }

    public function update(StoreChavesRequest $request, $id)
    {

        $chave = Chaves::find($id);
        $chave->update($request->validated());
        return new ChavesResource($chave);
    }

    public function destroy($id)
    {
        $chave = Chaves::find($id);
        $chave->delete();
        return response(null, 204);
    }
}