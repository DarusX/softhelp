@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>En espera</h1>
            <div class="row bg-info" style="padding-top: 10px; padding-bottom: 10px">
                <div class="col-xs-12">
                    @foreach($reports->filter(function($report, $i){ return $report->status == 'En espera'; }) as $report)
                    <a href="{{route('reports.show', $report)}}" class="media-item">
                        <div class="media-list">
                            <div class="media-left">
                                <img class="media-object" src="{{asset('rsc/media-left-circle.svg')}}" alt="..." style="height: 20px; width: 20px;">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">{{$report->report}}</h4>
                                <p>{{$report->priority}}</p>
                                <p class="text-muted">{{$report->created_at->format('Y-m-d H:i')}}</p>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection