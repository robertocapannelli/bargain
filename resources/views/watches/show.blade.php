@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            {{$watch->brand}} {{$watch->name}}
        </div>
    </div>
@endsection
