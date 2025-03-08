<div class="bg-purple-700 text-purple-50 mb-6">
        <div class="max-w-7xl m-auto flex justify-between items-center h-10">
            <div class="font-bold text-lg">TucTuc</div>
            <ul class="flex gap-x-4">
                @foreach($menu as $label => $url)
                    <li class="hover:font-semibold hover:text-white"><a href="{{$url}}">{{$label}}</a></li>
                @endforeach
            </ul>
            <div class="bg-purple-50 text-purple-500 p-1 rounded-sm px-2">
                @if(auth()->user() != null)
                    <a href="{{ route('admin.dashboard') }}">{{ auth()->user()->name }} </a>
                @else
                    <a href="{{route('login')}}">Log in</a>
                @endif
            </div>
        </div>
</div>