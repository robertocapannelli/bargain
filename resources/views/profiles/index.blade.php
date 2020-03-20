@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$user->profile->name}}'s profile</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{$user->name}} You are logged in!<br>

                        Name: {{$user->profile->name}}<br>
                        Last name: {{$user->profile->last_name}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
