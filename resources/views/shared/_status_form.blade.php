<form action="{{route('statuses.store')}}" method="post">
    @include('shared._errors')
    {{csrf_field()}}
    <textarea class="form-control" placeholder="聊聊新鲜事儿..." name="content" id="content" cols="30"
              rows="3">{{old('content')}}</textarea>
    <div class="text-right mt-4">
        <button type="submit" class="btn btn-primary">发布</button>
    </div>
</form>

