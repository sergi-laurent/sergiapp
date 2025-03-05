<form action="{{$action}}" method="post" class="border-2 border-purple-500 p-2">

    @csrf

    @if ($method == 'put')
        @method("put")
    @endif

    <div class="font-bold text-2xl text-purple-500 uppercase mb-8 mt-4">{{$title}}</div>

    {{$slot}}

    <div class="flex justify-end gap-4">
        <a href="{{$cancelurl}}" class="bg-purple-100 text-purple-500 uppercase p-2 hover:font-semibold rounded-sm">Cancel</a>
        <button type="submit" class="bg-purple-500 text-purple-50 uppercase p-2 hover:font-semibold rounded-sm">{{$submittext}}</button>
    </div>

</form> 