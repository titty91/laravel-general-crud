@extends('layouts.main-layout')
@section('contain')

    <div class="contain box">
        <h1>New Match:</h1> 
    
        <form action="{{route('store')}}" method="post">

            @csrf
            @method('POST')

            <div>
                <p>Assegna i nomi alle squadre:</p>

                <label for="team1">Team1</label>
                <input type="text" name='team1' placeholder="new team1">
            </div>
            <div>
                <label for="team2">Team2</label>
                <input type="text" name='team2' placeholder="new team2">
            </div>
            <div>
                <p>Assegna i punteggi alle squadre:</p>

                <label for="point1">Point1</label>
                <input type="number" name='point1' placeholder="new point1">
            </div>
            <div>
                <label for="point2">Point2</label>
                <input type="number" name='point2' placeholder="new point2">
            </div>
            
            <div>
                <p>Assegna il risultato:</p>

                <label for="result">Result</label>
                <select type="number" name='result' placeholder="new result"> 
                    <option value="0">Team 1</option>
                    <option value="1">Team 2</option>
                </select>
            </div>


            <div>
                <input type="submit" value='CREATE'>
            </div>
        </form>
    </div>


@endsection