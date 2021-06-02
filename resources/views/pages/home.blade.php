@extends('layouts.main-layout')
@section('contain')

    <div>
        <h1>Matches:</h1> 

        <ul>
            @foreach ($matches  as $match)
                <li>
                    <a href="{{route('show', $match -> id)}}"> 
                        {{$match -> team1}} - {{$match -> team2}}
                    </a>
                </li>
            @endforeach
        </ul>

    </div>
    <div class="btn_create">
        <a class="btn_create_primary" href="{{route('create')}}">
            Create New Match
        </a>

    </div>

@endsection