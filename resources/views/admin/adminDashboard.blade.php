@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Administrator Panel</h4>
                    <div class="card-text">
                    @if(session()->has('message'))
                        {{ session()->get('message') }}
                    @endif     
                    </div>
                    <ul class="list-group">
                       <li class="list-group-item"><a href="{{ url('/users') }}">Administer users</a></li>
                       <li class="list-group-item"><a href="{{ url('/tasks') }}">Administer tasks</a></li>
                       <li class="list-group-item"><a href="{{ url('/reports') }}">Administer reports</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  