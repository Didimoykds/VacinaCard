<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Vaccine;
use App\Schedule;
use App\Http\Controllers\Controller;
use Redirect;

class SiteDelete extends Controller
{
    public function deleteProcess(Request $request)
    {
        $form = $request->input();
        if($form['form_type'] == "deleteSchedule"){
            $vaccine = Schedule::find($form['id']);
            $vaccine->delete();
            return Redirect::back()->with('scheduleDeleteOrder', true);
        }
    }
}
