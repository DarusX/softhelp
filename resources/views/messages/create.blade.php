<div class="media-list">
    <div class="media-left">
        <a href="#">
            <img src="{{asset('rsc/media-left.svg')}}" alt="" style="height: 20px; width: 20px">
        </a>
    </div>
    <div class="media-body">
        <h4 class="media-heading">{{$message->user->name}}</h4>
        <p>{{$message->message}}</p>
        <p class="text-muted">{{$message->created_at->diffForHumans()}}</p>
        @if($status != 'Finalizado')
        <form action="{{route('messages.store')}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="user_id" class="form-control" value="{{Auth::id()}}">
            <input type="hidden" name="message_id" class="form-control" value="{{$message->id}}">
            <div class="input-group input-sm" style="padding-left: 0px">
                <input type="text" class="form-control input-sm" name="message" placeholder="Responde a {{$message->user->name}}">
                <span class="input-group-btn">
                    <button class="btn btn-sm btn-primary" type="submit"><i class="fas fa-chevron-right"></i></button>
                </span>
            </div>
        </form>
        @endif
        <hr>
        @if($message->has('messages'))
        @foreach($message->messages as $message)
        @component('messages.create', ['message' => $message, 'status' => $status])
        @endcomponent
        @endforeach
        @endif
    </div>
</div>