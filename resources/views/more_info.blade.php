@extends('layouts.base')

@section('page_title')
     {{$train->train_code}}
@endsection

@section('content')
<div class="container" style="height: 100vh;">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-4">
            <div class="card">
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
                    @else
                        <h6 class="text-success">Il treno partir&aacute; in orario</h6>
                    @endif
                  <a href="{{route('home')}}" class="btn btn-primary">Torna alla home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection