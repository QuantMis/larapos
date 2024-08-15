<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PosController extends Controller
{
    public function cashierDisplayIndex() {
        return Inertia::render('CashierDisplay', [
            'items' => Items::paginate(5)
        ]);
    }

    public function customerDisplayIndex() {
       return "Not Implemented";
    }
}
