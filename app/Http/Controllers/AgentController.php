<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class AgentController extends Controller
{
    public function index()
    {
        $agent = new Agent();
        return view('agent.index', compact('agent'));
    }
}
