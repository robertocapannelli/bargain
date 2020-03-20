@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Dashboard
                    </div>

                    <div class="card-body">
                        <ul>
                            <li>
                                <a href="/profile/{{$user->id}}">Profile</a>
                            </li>

                            <li>
                                <a href="/watches">Watches</a>
                            </li>
                            <li>
                                <a href="/watches/create">Add new watch</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
