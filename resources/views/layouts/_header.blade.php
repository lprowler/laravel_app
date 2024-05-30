<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">weibo app</a>
        <ul class="navbar-nav justify-content-end">
            @if(\Illuminate\Support\Facades\Auth::check())
                <li class="nav-item"><a href="{{route('users.index')}}" class="nav-link">用户列表</a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{\Illuminate\Support\Facades\Auth::user()->name}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('users.show',\Illuminate\Support\Facades\Auth::user())}}">个人中心</a>
                        <a class="dropdown-item" href="{{route('users.edit',\Illuminate\Support\Facades\Auth::user())}}">编辑资料</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" id="logout" href="#">
                            <form action="{{route('logout')}}" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                            </form>
                        </a>
                    </div>
                </li>
            @else
                <li class="nav-item"><a class="nav-link" href="{{route('about')}}">about</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">contact</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('login')}}">login</a></li>
            @endif
        </ul>
    </div>
</nav>


