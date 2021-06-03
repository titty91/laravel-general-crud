@extends('layouts.main-layout')
@section('contain')

    <div class="contain">
        <h1>New Match:</h1> 
    
        <form action="{{route('update', $match -> id)}}" method="post">

            @csrf
            @method('POST')

            <div>
                <p>Cambia i nomi alle squadre:</p>

                <label for="team1">Team1</label>
                <input id='team1' type="text" name='team1' value='{{ $match -> team1}}' placeholder="new team1">
            </div>
            <div>
                <label for="team2">Team2</label>
                <input id='team2' type="text" name='team2' value='{{$match -> team2}}' placeholder="new team2">
            </div>
            <div>
                <p>Riassegna i punteggi alle squadre:</p>

                <label for="point1">Point1</label>
                <input id='point1' type="number" name='point1' value='{{ $match -> point1}}'placeholder="new point1">
            </div>
            <div>
                <label for="point2">Point2</label>
                <input id='point1' type="number" name='point1' value='{{ $match -> point1}}' placeholder="new point2">
            </div>
            
            <div>
                <p>Assegna il risultato:</p>

                <label for="result">Result</label>
                <select id='result' type="number" name='result' value='{{ $match -> result}}' placeholder="new result"> 
                    <option value="0"
                    @if ($match -> result == 0)
                        selected
                    @endif
                    >Team 1</option>
                    <option value="1"
                    @if ($match -> result == 1)
                        selected
                    @endif
                    >Team 2</option>
                </select>
            </div>


            <div>
                <input type="submit" value='modifica'>
            </div>
        </form>
    </div>


@endsection