@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">{{($report -> report)}}</h1>
                <span class="badge badge-primary">{{$report->priority}}</span>
                <span class="badge badge-primary">{{$report->status}}</span>
                <span class="badge badge-primary">{{$report->user->name}}</span>
                <span class="badge badge-primary">{{$report->department->departmente}}</span>
                <br>
                <br>
                @if($report->status == 'En espera')
                <a href="{{route('reports.working', $report)}}" class="btn btn-sm btn-warning"><i class="fas fa-check"></i> Trabajar en reporte</a>
                @endif
                @if($report->status == 'Trabajando')
                <a href="{{route('reports.finish', $report)}}" class="btn btn-sm btn-success"><i class="fas fa-check"></i> Finalizar</a>
                @endif
                <hr class="my-4">
                <p>{{($report -> description)}}</p>
            </div>
        </div>
        <div class="col-md-12">
            @foreach($report->messages as $message)
            @component('messages.create', ['message' => $message, 'status' => $report->status])
            @endcomponent
            @endforeach
            @if($report->status != 'Finalizado')
            <form action="{{route('messages.store')}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="report_id" class="form-control" value="{{$report->id}}">
                <input type="hidden" name="user_id" class="form-control" value="{{Auth::id()}}">
                <div class="input-group input-sm">
                    <input type="text" class="form-control input-sm" name="message">
                    <span class="input-group-btn">
                        <button class="btn btn-sm btn-primary" type="submit"><i class="far fa-envelope"></i></button>
                    </span>
                </div>
            </form>
            @endif
        </div>
    </div>
</div>
@endsection