@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">User Administration Panel</h4>
                    <div class="card-text">
                    @if(session()->has('message'))
                        {{ session()->get('message') }}
                    @endif     
                    </div>
                    <ul class="list-group">
                       <li class="list-group-item"><a href="{{ url('/listUsers') }}">Look at users</a></li>
                       <li class="list-group-item"><a href="{{ url('/createUsers') }}">Create users</a></li>
                       <li class="list-group-item"><a href="{{ url('/updateUsers') }}">Update users</a></li>
                       <li class="list-group-item"><a href="{{ url('/deleteUsers') }}">Delete users</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  