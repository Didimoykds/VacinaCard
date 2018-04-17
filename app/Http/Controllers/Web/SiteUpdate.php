<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vaccine;
use App\Schedule;
use Redirect;

class SiteUpdate extends Controller
{
    public function updateProccess(Request $request)
    {
        $form = $request->input();
        if($form['form_type'] == "updateSchedule"){
            $vaccine = Schedule::find($form['id']);
            $vaccine->update(['status' => 'concluida', 'diaVacina' => date('Y-m-d')]);
            return Redirect::back()->with('scheduleUpdateOrder', true);
        }
    }
}
