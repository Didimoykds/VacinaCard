<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vaccine;

class VaccineController extends Controller
{
    public function create(Request $request)
    {
        return response(['message' => "OI!"], 200);
        $validator = Vaccine::validate($request->vaccine);
        if($validator->fails()){       
            return response($validator->errors(), 400);
        }
        $vaccine = Vaccine::create($request->vaccine);
        return response($vaccine, 201);
    }

    public function update(Request $request, $id)
    {
        $validator = Vaccine::validate($request->vaccine);
        if($validator->fails()){
            return response($validator->errors(), 400);
        }
        $vaccine = Vaccine::find($id);
        $vaccine->fill($request->vaccine);
        $vaccine->save();
        return response($vaccine, 200);

    }

    public function delete($id)
    {
        $vaccine = Vaccine::find($id);
        if($vaccine->schedules()->exists()){
          return response(['message' => 'Erro ao Deletar, usuários já possuem cadastro com essa Vacina.'], 406);
        }
        $vaccine->delete();
        return response(['message' =>'Vacina '.$vaccine->nome.' deletada com sucesso!'], 200);
    }
}
