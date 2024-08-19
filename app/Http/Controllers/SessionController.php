<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateDrawerSessionRequest;
use App\Models\Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SessionController extends Controller
{
    public function index()
    {
        $sessions = Session::orderBy('session_start', 'desc')->get();
        return Inertia::render('Drawer/Index', [
            "sessions" => $sessions,
        ]);
    }

    public function store()
    {
        if (Session::activeSessionExist()) {
            return redirect()->back()->with("error", "There are still opened session");
        }

        Session::create([
            "session_start" => Carbon::now(),
            "open" => 1
        ]);

        return to_route('session.index')->with("success", "New session opened");
    }

    public function update(UpdateDrawerSessionRequest $request, Session $session)
    {
        $request->validated();
        $session->update(["open" => $request->open, "session_end" => Carbon::now()]);
        return redirect()->back()->with("success", "Session closed successfully");
    }
}
