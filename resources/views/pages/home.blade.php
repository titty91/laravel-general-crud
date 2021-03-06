@extends('layouts.main-layout')
@section('contain')

    <div class="box">
        <h1>Matches:</h1> 

        <ul class="elenco_match">
            @foreach ($matches  as $match)
                <li>
                    <a href="{{route('show', $match -> id)}}"> 
                        {{$match -> team1}} - {{$match -> team2}}
                    </a>
                    <a href="{{route('edit', $match -> id)}}">                    	
                    &#9997;
                    </a>
                    </a>
                    <a href="{{route('delite', $match -> id)}}">                    	
                    &#128500;
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