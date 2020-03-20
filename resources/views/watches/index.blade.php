@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @foreach($watches as $watch)
                <article class="col-4">
                    <header>
                        <h2>{{$watch->brand}} {{$watch->name}}</h2>
                    </header>
                    <div class="entry-summary">
                        <ul>
                            <li>
                                Reference: {{$watch->reference}}
                            </li>
                            <li>
                                Year: {{$watch->year}}
                            </li>
                        </ul>
                    </div>

                    <footer>
                        <a href="/watches/{{$watch->id}}/edit">Edit</a>
                    </footer>
                </article>
            @endforeach
        </div>
    </div>
@endsection
