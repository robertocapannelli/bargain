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
                                <a href="{{route('profile.show', $user)}}">Profile</a>
                            </li>

                            <li>
                                <a href="{{route('watches.index')}}">Watches</a>
                            </li>
                            <li>
                                <a href="{{route('watches.create')}}">Add new watch</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
