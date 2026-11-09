<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customerAccounts = [
            ['name' => 'Mia Santos', 'email' => 'mia.santos@example.test', 'status' => 'Active'],
            ['name' => 'Eli Navarro', 'email' => 'eli.navarro@example.test', 'status' => 'Active'],
            ['name' => 'Cora Mendoza', 'email' => 'cora.mendoza@example.test', 'status' => 'Pending'],
            ['name' => 'Jules Rivera', 'email' => 'jules.rivera@example.test', 'status' => 'Active'],
            ['name' => 'Noah Villanueva', 'email' => 'noah.villanueva@example.test', 'status' => 'Inactive'],
        ];

        return view('accounts.customers', compact('customerAccounts'));
    }
}
