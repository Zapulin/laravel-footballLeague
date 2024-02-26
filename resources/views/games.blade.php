@extends('layout')

@section('content')

@if(isset($updated))
  @if($updated)
  <div class="message succes">
    <p>game updated correctly</p>
  </div>
  @else
  <div class="message error">
    <p>Something went wrong</p>
  </div>
  @endif
@endif

@if(isset($deleted))
  @if($deleted)
  <div class="message succes">
    <p>game deleted correctly</p>
  </div>
  @else
  <div class="message error">
    <p>Something went wrong</p>
  </div>
  @endif
@endif

@if(isset($created))
  @if($created)
  <div class="message succes">
    <p>game created correctly</p>
  </div>
  @else
  <div class="message error">
    <p>Something went wrong</p>
  </div>
  @endif
@endif

<div class="create">
  <a href="{{ route('add') }}?season_id={{ request()->get('season_id') }}" class="btn btn-create">Añadir un nuevo partido</a>
</div>


<table>
  <tr>
    <th>ID</th>
    <th>EQUIPO LOCAL</th>
    <th>EQUIPO VISITANTE</th>
    <th>GOLES LOCAL</th>
    <th>GOLES VISITANTE</th>
    <th>FECHA Y HORA PARTIDO</th>
    <th></th>
  </tr>
  @foreach($games as $game)
  <tr>
    <td>{{ $game->id }}</td>
    <td>{{ $game->local_team }}</td>
    <td>{{ $game->visitor_team }}</td>
    <td>{{ $game->local_goals }}</td>
    <td>{{ $game->visitor_goals }}</td>
    <td>{{ $game->date }}</td>
    <td><a href="{{ route('show') }}?game_id={{ $game->id }}" class="btn btn-edit">Editar</a><a href="{{ route('delete') }}?game_id={{ $game->id }}" class="btn btn-delete">X</a></td>
  </tr>
  @endforeach
</table>

@endsection