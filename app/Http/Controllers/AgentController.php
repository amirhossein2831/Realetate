<?php

namespace App\Http\Controllers;


class AgentController extends Controller
{
    public function dashboard()
    {
        return view('agent.dashboard');

    }
}
