<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vaccine;

class VaccineController extends Controller
{

    public function create(Request $request)
    {
        $validator = Vaccine::validate($request->vaccine);
        if($validator->fails()){
            $errorMessage = '';
            foreach($validator->errors()->messages()as $error){
                $errorMessage = $errorMessage.'\n'.$error[0];
            }
            return back()->with('message', $errorMessage);
        }
        Vaccine::create($request->vaccine);
        return back()->with('message', 'Vacina Cadastrada com Sucesso!');
    }

    public function update(Request $request, $id)
    {
        $validator = Vaccine::validate($request->vaccine);
        if($validator->fails()){
            $errorMessage = '';
            foreach($validator->errors()->messages()as $error){
                $errorMessage = $errorMessage.'\n'.$error[0];
            }
            return back()->with('message', $errorMessage);
        }
        $vaccine = Vaccine::find($id);
        $vaccine->fill($request->vaccine);
        $vaccine->save();
        return back()->with('message', 'Vacina Atualizada com Sucesso!');

    }

    public function delete($id)
    {
        $vaccine = Vaccine::find($id);
        if($vaccine->schedules()->exists()){
          return back()->with('message', 'Erro ao Deletar, usuários já possuem cadastro com essa Vacina.');
        }
        $vaccine->delete();
        return back()->with('message', 'Vacina '.$vaccine->nome.' deletada com sucesso!');
    }

}
