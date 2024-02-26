@extends('layout')

@section('content')

@if($errors->any())    
    @foreach($errors->all() as $err)
    <div class="message error">
        <p>{{$err}}</p>
    </div>
    @endforeach
@endif

<form method="POST" action="{{route('store') }}?season_id={{ request()->get('season_id') }}">

    @csrf

    <div class="field">
        <label>Equipo Local</label>
        <input type="text" name="local_team" value=""></input>
    </div>

    <div class="field">
        <label>Equipo visitante</label>
        <input type="text" name="visitor_team" value=""></input>
    </div>

    <div class="field">
        <label>Goles Local</label>
        <input type="text" name="local_goals" value=""></input>
    </div>

    <div class="field">
        <label>Goles visitante</label>
        <input type="text" name="visitor_goals" value=""></input>
    </div>

    <div class="field">
        <label>Fecha partido</label>
        <input type="datetime-local" name="date" value=""></input>
    </div>

    <input type="submit" class="btn btn-save" value="Guardar">

</form>

@endsection