<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PosController extends Controller
{
    public function cashierDisplayIndex() {
        return Inertia::render('CashierDisplay');
    }

    public function customerDisplayIndex() {
       return "Not Implemented";
    }
}
