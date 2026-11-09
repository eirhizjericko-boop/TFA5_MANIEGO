@extends('layouts.app', ['title' => 'Counterboard POS | Customers'])

@section('content')
<section class="page-heading compact-heading">
    <p class="eyebrow">ACCOUNT DIRECTORY / CUSTOMERS</p>
    <h1>Customer accounts</h1>
    <p>A temporary PHP array is passed from <code>CustomerController</code> and displayed with a Blade foreach loop.</p>
</section>

<div class="account-table">
    <div class="table-row table-head"><span>Name</span><span>Email</span><span>Status</span></div>
    @foreach ($customerAccounts as $account)
        <div class="table-row">
            <span class="person-name">{{ $account['name'] }}</span>
            <span>{{ $account['email'] }}</span>
            <span><em class="status {{ strtolower($account['status']) }}">{{ $account['status'] }}</em></span>
        </div>
    @endforeach
</div>
@endsection
