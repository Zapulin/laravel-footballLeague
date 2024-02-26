@extends('layout')

@section('content')

<table>
  <tr>
    <th>ID</th>
    <th>AÑO INICIO</th>
    <th>AÑO FIN</th>
    <th>PARTIDOS</th>
  </tr>
  @foreach($seasons as $season)
  <tr>
    <td>{{ $season->id }}</td>
    <td>{{ $season->year_start }}</td>
    <td>{{ $season->year_end }}</td>
    <td><a href="{{ route('games') }}?season_id={{ $season->id }}" class="btn btn-view">Ver</a></td>
  </tr>
  @endforeach
</table>

@endsection