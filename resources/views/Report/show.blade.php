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
                <a href="" class="btn btn-sm btn-success">Finalizar</a>
                <hr class="my-4">
                <p>{{($report -> description)}}</p>
            </div>
        </div>
        <div class="col-md-3">
            <form action="{{route('messages.store')}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="report_id" class="form-control" value="{{$report->id}}">
                <input type="hidden" name="user_id" class="form-control" value="{{Auth::id()}}">
                <div class="input-group">
                    <input type="text" class="form-control" name="message">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit"><i class="far fa-envelope"></i></button>
                    </span>
                </div>
            </form>
        </div>
        <div class="container-fluid">
            <div class="col-md-12">
                @foreach($report->messages as $message)
                <div class="media">
                    <div class="media-body">
                        <h4 class="media-heading">{{$message->user->name}}</h4>
                        <p>{{$message->message}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection