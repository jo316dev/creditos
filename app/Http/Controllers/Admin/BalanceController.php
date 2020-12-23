<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Balance;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    public function index()
    {


        $balance = auth()->user()->balance;
        $amount = $balance ? $balance->amount : 0;

        // dd($amount);

        return view('admin.balance.index', compact('amount'));
    }

    public function deposit()
    {
        return view('admin.balance.deposit');
    }

    public function store(Request $request, Balance $balance)
    {

        $balance = auth()->user()->balance()->firstOrCreate([]);

        $balance->deposit($request->value);

        


    }
}
