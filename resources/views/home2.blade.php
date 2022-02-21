@extends('layouts.base');

@section('page_title')
    Trains    
@endsection

@section('content')
<div class="container">
    <div class="row">
        <h1 class="col-12">
            Mi piacciono i treni
        </h1>
    </div>
    <div class="row">
        @foreach($trains as $train)
        <div class="col-3 p-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">{{$train->agency}}</h5>
                    <div class="mb-3">
                        <small class="text-muted">Partenza: </small><span>{{$train->start_station}} <br></span>
                        <small class="text-muted">Ora: </small><span>{{$train->departure_time}}</span>
                    </div>
                    <div class="mb-3">
                        <small class="text-muted">arrivo: </small><span>{{$train->stop_station}} <br></span>
                        <small class="text-muted">Ora: </small><span>{{$train->arrival_time}}</span>
                    </div>
                    @if ($train->erased)
                        <h6 class="text-danger">Il treno &eacute; stato cancellato</h6>
                    @elseif ($train->delay)
                        <h6 class="text-warning">Il treno partir&aacute; in ritardo</h6>
                    @endif
                  <a href="#" class="btn btn-primary">Maggiori dettagli</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@endsection