<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customerAccounts = Customer::orderBy('full_name')->get();

        return view('accounts.customers', compact('customerAccounts'));
    }
}
