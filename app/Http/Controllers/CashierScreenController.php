<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

class CashierScreenController extends Controller
{
    public function index($session)
    {
        return inertia('Cashier/Idle', [
            'session' => $session
        ]);
    }

    public function order($session)
    {
        return inertia('Cashier/Order', [
            'session' => $session,
            'products' => Items::all()
        ]);
    }
}
