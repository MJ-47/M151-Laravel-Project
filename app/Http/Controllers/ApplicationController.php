<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function store() {
        request()->validate([
            'first_name' => 'required',
            'last_name' => 'required|max:255',
            'email' => 'required|max:255|email',
            'answer' => ''
        ]);
    }

    public function create($id){
        $request = request();

        $application = new Application();

        $application->fill([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'answer' => $request->get('answer'),
        ]);

        //$application->first_name = $request->get('first_name');
        //$application->last_name = $request->get('last_name');
        //$application->email = $request->get('email');
        //$application->answer = $request->get('answer');
        $application->session_id = session()->getId();
        $application->event_id = session()->getId();
        $application->save();

        return redirect('/event');
    }

    public function list($id) {


        $applications = Application::where('event_id', $id)->where('where', 'yes')->get();
        $declinedApplications = Application::where('event_id', $id)->where('answer', 'no')->count();

        return view('application', [

            'declinedApplications' => $declinedApplications,
            'applications' => $applications,
        ]);
    }
}
