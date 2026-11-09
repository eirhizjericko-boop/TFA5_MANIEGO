<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $staffAccounts = [
            ['name' => 'Ari Cruz', 'role' => 'Cashier', 'shift' => 'Morning'],
            ['name' => 'Bea Lim', 'role' => 'Supervisor', 'shift' => 'Morning'],
            ['name' => 'Ken Flores', 'role' => 'Cashier', 'shift' => 'Afternoon'],
            ['name' => 'Lia Ramos', 'role' => 'Inventory Clerk', 'shift' => 'Afternoon'],
            ['name' => 'Sam Dizon', 'role' => 'Manager', 'shift' => 'Full day'],
        ];

        return view('accounts.users', compact('staffAccounts'));
    }
}
