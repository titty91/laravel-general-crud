@extends('layouts.main-layout')
@section('contain')

    <div class="contain">
        <h1>
            Match:
            <a href="{{route('edit', $match -> id)}}">                    	
                &#128398;
                </a>
        
        </h1> 

        <h2>        
            @if ($match -> result)

            {{$match -> team1}} -  <u>{{$match -> team2}}</u>
             
            @else

            <u>{{$match -> team1}}</u>  -  {{$match -> team2}}

            @endif
            
        </h2>

        <p>
            {{$match -> point1}} - {{$match -> point2}}
        </p>

    </div>


@endsection