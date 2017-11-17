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

    private function getSchedules()
    {
        return Schedule::where([
            ['fk_user','=', Auth::user()->id],
            ['status', '=', 'concluida']
        ])->get()->toArray();
    }

    protected function createVacineCard($schedules)
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

    public function index ()
    {
        $array = Schedule::where([
            ['fk_user','=', Auth::user()->id],
            ['status', '=', 'concluida']
        ])->get();

        return View::make('app\menu', array(
             'vacinaCards' => $this->createVacineCard($this->getSchedules()),
             'vaccines' => $this->getVaccines()
        ));
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

    public function registerProcess(Request $request)
    {
        $form = $request->input();
        if($form['form_name'] == 'vacinaTomada'){
            $schedule = $this->createDoneSchedule($form);
            $schedule->save();
            return Redirect::back()->with('saveOrder', true);
            // View::make('app\menu', array(
            //      'vacinaCards' => $this->createVacineCard($this->getSchedules()),
            //      'vaccines' => $this->getVaccines(),
            //      'saveOrder' => true
            // ));

        } elseif ($form['form_name' == 'cadastroVacina']){

        }
    }

}
