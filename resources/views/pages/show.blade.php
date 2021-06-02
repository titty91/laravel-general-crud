@extends('layouts.main-layout')
@section('contain')

    <div class="contain">
        <h1>Match:</h1> 

        <h2>        
                
            {{$match -> team1}} -  {{$match -> team2}}

            
             {{$match -> team1}}  -  {{$match -> team2}}

            
        </h2>

        <p>
            {{$match -> point1}} - {{$match -> point2}}
        </p>

    </div>


@endsection