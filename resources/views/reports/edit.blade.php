@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="{{route('reports.update', $report)}}" method="post">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="form-group">
                        <label for="">Reporte</label>
                        <input type="text" name="report" class="form-control" value="{{$report -> report}}">
                </div>
                <div class="form-group">
                        <label for="">Descripción</label>
                        <input type="text" name="description" class="form-control" value="{{($report -> description)}}">
                </div>
                <div class="form-group">
                        <label for="">Prioridad</label>
                        <input type="enum" name="priority" class="form-control" value="{{$report -> priority}}">
                </div>
                <div class="form-group">
                        <label for="">Estado</label>
                        <input type="enum" name="status" class="form-control" value="{{$report -> status}}">
                </div>
                <div class="form-group">
                        <label for="">Departamento</label>
                        <select name="department_id" id="" class="form-control">
                            @foreach($departments as $department)
                            <option value="{{$department->id}}" {{($department == $report->department)?'selected':''}}>{{$department->department}}</option>
                            @endforeach
                        </select>
                </div>
                <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                                <i class="far fa-save"></i> Guardar
                        </button>
                </div>
            </form>
        </div>
    </div>
    @if(Session::has('errors'))
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <p>{{$error}}</p>
        @endforeach
    </div>
    @endif
</div>
@endsection