@extends('layouts.app')



@section('content')
<div class="row">
                <div class="col-md-12">
                <form action="{{route('departments.store')}}" method="post">




                    {{csrf_field()}}
                    <input type="text" name="department">
                    <button type="submit">Guardar</button>
                </form>
                </div>
            </div>
@endsection