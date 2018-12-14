-@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <tbody>
                    <tr>
                        <th>Reporte</th>
                        <th>Descripcion</th>
                        <th>Prioridad</th>
                        <th>Estado</th>
                        <th>Usuario</th>
                        <th>Departamento</th>
                    </tr>
                    <tr>
                        <td scope="row">{{($report -> report)}}</td>
                        <td> {{($report -> description)}}</td>
                        <td> {{($report -> priority)}}</td>
                        <td> {{($report -> status)}}</td>
                        <td> {{($report -> user -> name)}}</td>
                        <td> {{($report -> department -> department)}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-3">
            <form action="{{route('messages.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="">Message</label>
                    <input name="message" rows="10" class="form-control">
                </div>

                <div class="form-group">
                    <input type="hidden" name="report_id" class="form-control" value="{{$report->id}}">
                </div>

                <div class="form-group">
                    <input type="hidden" name="user_id" class="form-control" value="{{Auth::id()}}">
                </div>

                <div class="form-group">
                    <input type="hidden" name="message_id" class="form-control" value="">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                            <i class="far fa-envelope"></i> Enviar
                    </button>
                </div>
            </form>
        </div>

        <div class="container-fluid">
            <div class="col-md-12">
                @foreach($report->messages as $message)
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <!-- ¬¬  khaaa?-->
                            <img src="{{asset('rsc/user.png')}}" alt="" width="50" height="50">
                        </a>
                    </div>
                    <div class="media-body">
                        <p>
                            {{($message -> message)}}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection