@extends ('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="{{route('reports.update', $report)}}" method="post">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <input type="string" name="report" value="{{$report -> report}}">
            <input type="text" name="report" value="{{($report -> description)}}">
            <input type="enum" name="report" value="{{$report -> priority}}">
            <input type="enum" name="report" value="{{$report -> status}}">
            <input type="unsignedInteger" name="report" value="{{$report -> department -> department}}">
            <input type="unsignedInteger" name="report" value="{{$report -> user -> name}}">
            <button type="submit">Guardar</button>
        </form>
    </div>
</div>
@endsection