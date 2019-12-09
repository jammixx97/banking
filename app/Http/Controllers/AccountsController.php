<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accounts;

class AccountsController extends Controller
{
    public function index()
    {
        $accounts = Accounts::all();
        return view('accounts.index', compact('accounts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            ''
        ])
    }
}
