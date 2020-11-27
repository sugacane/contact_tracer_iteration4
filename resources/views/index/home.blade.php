@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="row">
    <div class="col-sm-4">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Register</h5>
            <p class="card-text">New users can register.</p>
            <a href="person/create" class="btn btn-primary">Register</a>
        </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Record Location</h5>
            <p class="card-text">Enter Anonymous ID to record person's location</p>
            <a href="person/log" class="btn btn-primary">Record Location</a>
        </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Admin Control Area</h5>
            <p class="card-text">Admin STUFF PLEASE HELP ME FILL HERE</p>
            <a href="/admin" class="btn btn-primary">Admin Thingy</a>
        </div>
        </div>
    </div>
    </div>
@endsection