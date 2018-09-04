@extends ('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="{{route('departments.update', $department)}}" method="post">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <input type="text" name="department" value="{{$department->department}}">
            <button type="submit">Guardar</button>
        </form>
    </div>
</div>
@endsection