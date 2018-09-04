<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use Auth;

class ScheduleController extends Controller
{
    public function completeSchedule(Request $request)
    {
        $form = $request->input();
        if($form['form_type'] == "updateSchedule"){
            $vaccine = Schedule::find($form['id']);
            $vaccine->update(['status' => 'concluida', 'diaVacina' => date('Y-m-d')]);
            return back()->with('message', 'Agendamento salvo como completo.');
        }
        return back()->with('message', 'Ocorreu algum erro.');
    }

    public function create(Request $request)
    {
        $schedule = $request->schedule;
        $schedule['fk_user'] = Auth::user()->id;
        $schedule['status'] = 'nao_concluida';
        $validator = Schedule::validate($schedule);
        if($validator->fails()){
            $errorMessage = '';
            foreach($validator->errors()->messages()as $error){
                $errorMessage = $errorMessage.'\n'.$error[0];
            }
            return back()->with('message', $errorMessage);
        }
        Schedule::create($schedule);
        return back()->with('message', 'Agendamento Cadastrado com Sucesso!');
    }

    public function update(Request $request, $id)
    {
        $validator = Schedule::validate($request->schedule);
        if($validator->fails()){
            $errorMessage = '';
            foreach($validator->errors()->messages()as $error){
                $errorMessage = $errorMessage.'\n'.$error[0];
            }
            return back()->with('message', $errorMessage);
        }
        $schedule = Schedule::find($id);
        $schedule->fill($request->schedule);
        $schedule->save();
        return back()->with('message', 'Agendamento Atualizado com Sucesso!');

    }

    public function delete($id)
    {
        $schedule = Schedule::find($id);
        $schedule->delete();
        return back()->with('message', 'Agendamento '.$schedule->nome.' deletado com sucesso!');
    }

}
