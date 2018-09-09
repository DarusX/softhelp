@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        @if ($reports->isNotEmpty())
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Reportes</th>
                </tr>
            </thead>
            <tbody>
            @foreach($reports as $report)
                <tr>
                <th scope="row"><a href="{{route('reports.show', $report)}}">{{$report->id}}</a></th>
                <td>{{$report->report}}</td>
                <td>
                    <a href="{{ route('reports.show', $report->id) }}" class="btn btn-info">
                        Ver
                    </a>
                    <a href="{{ route('reports.edit', $report->id) }}" class="btn btn-primary">
                        Editar
                    </a>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
            @else 
                <p> No hay reportes registrados</p>
            @endif   
    </div>
</div>
@endsection