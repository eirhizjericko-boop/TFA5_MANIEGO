@extends('layouts.app', ['title' => 'Counterboard POS | Users'])

@section('content')
<section class="page-heading compact-heading">
    <p class="eyebrow">ACCOUNT DIRECTORY / STAFF</p>
    <h1>User accounts</h1>
    <p>These five temporary staff records demonstrate a second controller-to-view data flow in the application.</p>
</section>

<div class="account-table">
    <div class="table-row table-head"><span>Name</span><span>Role</span><span>Shift</span></div>
    @foreach ($staffAccounts as $staff)
        <div class="table-row">
            <span class="person-name">{{ $staff['name'] }}</span>
            <span>{{ $staff['role'] }}</span>
            <span><em class="shift">{{ $staff['shift'] }}</em></span>
        </div>
    @endforeach
</div>
@endsection
