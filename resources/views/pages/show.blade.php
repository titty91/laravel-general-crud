@extends('layouts.main-layout')
@section('contain')

    <div class="contain box">
        <h1>
            Match:
            <a class="btn" href="{{route('edit', $match -> id)}}">                    	
                &#128398;
            </a>
            <a  class="btn" href="{{route('delite', $match -> id)}}">                    	
                &#128500;
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