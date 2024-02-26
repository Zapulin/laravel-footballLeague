@extends('layout')

@section('content')

@if($errors->any())    
    @foreach($errors->all() as $err)
    <div class="message error">
        <p>{{$err}}</p>
    </div>
    @endforeach
@endif

<form method="POST" action="{{route('update') }}?game_id={{ $game->id }}">

    @csrf

    <div class="field">
        <label>Equipo Local</label>
        <input type="text" name="local_team" value="{{$game->local_team}}"></input>
    </div>

    <div class="field">
        <label>Equipo visitante</label>
        <input type="text" name="visitor_team" value="{{$game->visitor_team}}"></input>
    </div>

    <div class="field">
        <label>Goles Local</label>
        <input type="text" name="local_goals" value="{{$game->local_goals}}"></input>
    </div>

    <div class="field">
        <label>Goles visitante</label>
        <input type="text" name="visitor_goals" value="{{$game->visitor_goals}}"></input>
    </div>

    <div class="field">
        <label>Fecha partido</label>
        <input type="datetime-local" name="date" value="{{ date('Y-m-d\Th:m:s',  strtotime($game->date)) }}"></input>
    </div>

    <input type="submit" class="btn btn-save" value="Guardar">

</form>

@endsection