@extends('layouts.base')

@section('page_title')
    Trains    
@endsection

@section('content')
<h1>Ecco i treni che partono da oggi in poi<small>({{date('d/m/Y')}})</small>:</h1>
<ul>
    @foreach ($trains as $train)
        <li>
            <h2><small>compagnia: </small>{{$train->agency}}</h2>
            <h2><small>data: </small>{{$train->date}}</h2>
            <h3><small>orario di partenza: </small>{{$train->departure_time}}</h3>
            <h3><small>stazione di partenza: </small>{{$train->start_station}}</h3>
            <h3><small>orario di arrivo: </small>{{$train->arrival_time}}</h3>
            <h3><small>stazione di arrivo: </small>{{$train->stop_station}}</h3>
            @if ($train->delay)
                <h4>Il treno partir&aacute; in ritardo</h4>
            @endif
            @if ($train->erased)
                <h4>Il treno &eacute; stato cancellato</h4>
            @endif
        </li>
    @endforeach
</ul>
@endsection