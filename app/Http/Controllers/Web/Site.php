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
                'vaccination_day' => $schedule['vaccination_day'],
                'local' => $schedule['local'],
                'batch' => $schedule['batch'],
                'vaccine_name' => $vaccine[0]['name'],
                'recurrence' => $vaccine[0]['recurrence']
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
                'schedule_date' => $data['schedule_date'],
                'vaccine_name' => $vaccine[0]['name'],
                'local' => $data['local'],
                'observation' => $data['observation']
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
            'vaccination_day' => $data['vaccination_day'],
            'local' => $data['local'],
            'batch' => $data['batch'],
            'observation' => $data['observation'],
            'status' => "concluida"
        ]);
    }

    private function createVaccineSchedule(array $data)
    {
        return Schedule::make([
            'fk_user' => $data['user_id'],
            'fk_vaccine' => $data['fk_vaccine'],
            'schedule_date' => $data['schedule_date'],
            'local' => $data['local'],
            'observation' => $data['observation'],
            'status' => "nao_concluida"
        ]);
    }


    public function registerProcess(Request $request)
    {
        $form = $request->input();
        if($form['form_name'] == 'vacinaTomada'){
            $schedule = $this->createDoneSchedule($form);
            $schedule->save();
            return Redirect::back()->with('saveOrderCartao', true);
        } elseif ($form['form_name'] == 'agendarVacina'){
            $schedule = $this->createVacineSchedule($form);
            $schedule->save();
            return Redirect::back()->with('saveOrderAgenda', true);
        }
    }

    public function index ()
    {
        return View::make('app\menu', array(
             'vacinaCards' => $this->createViewVaccineCard($this->getDoneSchedules()),
             'scheduleCards' => $this->createViewScheduleCard($this->getSchedules()),
             'vaccines' => $this->getVaccines()
        ));
    }

}
