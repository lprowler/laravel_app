<div class="list-group-item">
    <img src="{{$user->gravatar()}}" alt="{{$user->name}}" width="32" class="mr-3">
    <a href="{{route('users.show',$user)}}">{{$user->name}}</a>
    @can('destroy',$user)
        <form class="float-right" action="{{route('users.destroy',$user->id)}}" method="post">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button class="btn btn-sm btn-danger delete-btn" type="submit">delete</button>
        </form>
    @endcan
</div>
