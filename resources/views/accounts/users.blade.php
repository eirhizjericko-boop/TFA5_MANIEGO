@extends('layouts.app', ['title' => 'Counterboard POS | Users'])

@section('content')
<section class="page-heading compact-heading">
    <p class="eyebrow">ACCOUNT DIRECTORY / STAFF</p>
    <h1>User accounts</h1>
    <p>User records are retrieved through the <code>User</code> Eloquent model and displayed with a Blade foreach loop.</p>
</section>

<div class="account-table">
    <div class="table-row table-head"><span>Username</span><span>Full name</span></div>
    @foreach ($staffAccounts as $staff)
        <div class="table-row">
            <span class="person-name">{{ $staff->username }}</span>
            <span>{{ $staff->full_name }}</span>
        </div>
    @endforeach
</div>
@endsection
