<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SessionController extends Controller
{
    public function index()
    {
        $sessions = Session::orderBy('session_start','desc')->get();
        return Inertia::render('Drawer/Index', [
            "sessions" => $sessions,
        ]);
    }

    public function store()
    {
        Session::create([
            "session_start" => Carbon::now(),
            "open" => 1

        ]);
        return to_route('session.index');
    }
}
