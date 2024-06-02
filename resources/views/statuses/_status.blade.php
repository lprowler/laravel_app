<li class="d-flex mt-4 mb-4">
    <a href="{{route('users.show',$user->id)}}" class="flex-shrink-0">
        <img class="me-1 gravatar" src="{{$user->gravatar()}}" alt="{{$user->name}}">
    </a>
    <div class="flex-grow-1 ms-3 ml-4">
        <h5 class="mt-0 mb-1">
            {{$user->name}}
            <small>/ {{$status->created_at->diffForHumans()}}</small>
        </h5>
        {{$status->content}}
    </div>
    @can('destroy',$status)
        <form action="{{route('statuses.destroy',$status->id)}}" method="post" onsubmit="return confirm('您确定要删除本条列表吗？')">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" class="btn btn-sm btn-danger status-delete-btn">删除</button>
        </form>
    @endcan
</li>
