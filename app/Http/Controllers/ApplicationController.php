<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Event;
use Illuminate\Http\Request;

class ApplicationController extends Controller {


    public function create($id) {
        $request = request();

        $application = new Application();

        $application->first_name = $request->get('first_name');
        $application->last_name = $request->get('last_name');
        $application->email = $request->get('email');
        $application->answer = $request->get('answer');
        $application->session_id = session()->getId();
        $application->event_id = $id;
        $application->save();

        return redirect('/event/' . $id);
    }

    public function list($id) {

        $applications = Application::where('event_id', $id)->where('answer', 'yes')->get();
        $declinedApplications = Application::where('event_id', $id)->where('answer', 'no')->count();

        $event = Event::findOrFail($id);

        return view('application', [
            'event' => $event,
            'event_id' => $id,
            'declinedApplications' => $declinedApplications,
            'applications' => $applications,
        ]);
    }
}
