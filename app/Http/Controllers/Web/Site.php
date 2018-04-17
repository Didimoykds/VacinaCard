<?php

namespace App\Http\Controllers\Web;

use View;
use Auth;
use Redirect;
use App\Vaccine;
use App\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class Site extends Controller
{
    private function getVaccines()
    {
        return Vaccine::get()->toArray();
    }

    private function getDoneSchedules()
    {
        return Schedule::where([
            ['fk_user','=', Auth::user()->id],
            ['status', '=', 'concluida']
        ])->get()->toArray();
    }

    private function getSchedules()
    {
        return Schedule::where([
            ['fk_user','=', Auth::user()->id],
            ['status', '=', 'nao_concluida']
        ])->get()->toArray();
    }

    protected function createViewVaccineCard($schedules)
    {
        foreach($schedules as $schedule){
            $vaccine = Vaccine::where('id', '=', $schedule['fk_vaccine'])->get()->toArray();

            $vacinaCards[] = [
                'id' => $schedule['id'],
                'diaVacina' => $schedule['diaVacina'],
                'observacao' => $schedule['observacao'],
                'local' => $schedule['local'],
                'lote' => $schedule['lote'],
                'nome_vacina' => $vaccine[0]['nome'],
                'recorrencia' => $vaccine[0]['recorrencia']
            ];
        }
        if(isset($vacinaCards)){
            return $vacinaCards;
        }
    }

    protected function createViewScheduleCard(array $datas)
    {
        foreach($datas as $data){
            $vaccine = Vaccine::where('id', '=', $data['fk_vaccine'])->get()->toArray();

            $scheduleCard[] = [
                'id' => $data['id'],
                'dataMarcada' => $data['dataMarcada'],
                'nome_vacina' => $vaccine[0]['nome'],
                'local' => $data['local'],
                'observacao' => $data['observacao']
            ];
        }

        if(isset($scheduleCard)){
            return $scheduleCard;
        }
    }

    private function createDoneSchedule(array $data)
    {
        return Schedule::make([
            'fk_user' => $data['user_id'],
            'fk_vaccine' => $data['fk_vaccine'],
            'diaVacina' => $data['diaVacina'],
            'local' => $data['local'],
            'lote' => $data['lote'],
            'observacao' => $data['observacao'],
            'status' => "concluida"
        ]);
    }

    private function createVaccineSchedule(array $data)
    {
        return Schedule::make([
            'fk_user' => $data['user_id'],
            'fk_vaccine' => $data['fk_vaccine'],
            'dataMarcada' => $data['dataMarcada'],
            'local' => $data['local'],
            'observacao' => $data['observacao'],
            'status' => "nao_concluida"
        ]);
    }

    private function createVaccine(array $data)
    {
        return Vaccine::make([
            'nome' => $data['nome'],
            'descricao' => $data['descricao'],
            'recorrencia' => $data['recorrencia']
        ]);
    }

    public function registerProcess(Request $request)
    {
        $form = $request->input();
        if($form['form_name'] == 'vacinaTomada'){
            $schedule = $this->createDoneSchedule($form);
            $schedule->save();
            return Redirect::back()->with('saveOrderCartao', true);
        }
        if ($form['form_name'] == 'agendarVacina'){
            $schedule = $this->createVaccineSchedule($form);
            $schedule->save();
            return Redirect::back()->with('saveOrderAgenda', true);
        }
        if ($form['form_name'] == 'cadastrarVacina') {
            $vaccine = $this->createVaccine($form);
            $vaccine->save();
            return Redirect::back()->with('saveOrderVacina', true);
        }
    }

    public function destroyProccess($id)
    {
        return Vaccine::delete($id);
    }

    public function index ()
    {
        return View::make('app/menu', array(
             'vacinaCards' => $this->createViewVaccineCard($this->getDoneSchedules()),
             'scheduleCards' => $this->createViewScheduleCard($this->getSchedules()),
             'vaccines' => $this->getVaccines()
        ));
    }

}
