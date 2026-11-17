@extends('layouts.app', ['title' => 'Counterboard POS | Customers'])

@section('content')
<section class="page-heading compact-heading">
    <p class="eyebrow">ACCOUNT DIRECTORY / CUSTOMERS</p>
    <h1>Customer accounts</h1>
    <p>Customer records are retrieved through the <code>Customer</code> Eloquent model and displayed with a Blade foreach loop.</p>
</section>

<div class="account-table">
    <div class="table-row table-head"><span>Full name</span><span>Email</span><span>Phone</span></div>
    @foreach ($customerAccounts as $account)
        <div class="table-row">
            <span class="person-name">{{ $account->full_name }}</span>
            <span>{{ $account->email }}</span>
            <span><em class="phone">{{ $account->phone }}</em></span>
        </div>
    @endforeach
</div>
@endsection
