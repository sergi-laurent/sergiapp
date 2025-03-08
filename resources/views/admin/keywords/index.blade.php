<x-site-layout>

    <h1 class="font-bold text-4xl">Keywords</h1>

    <div class="text-right">
        <a href="{{route('admin.keywords.create')}}" class="bg-purple-500 text-purple-50 uppercase p-2 hover:font-semibold rounded-sm">Create Keyword</a> 
    </div>
	
	<ul class="list-disc pl-4">
	    @foreach($keywords as $keyword)
            <li class="mb-6">
                <div class="flex justify-start gap-4">
                    {{$keyword->title}}
                    
                    <a href="{{route('admin.keywords.edit', $keyword)}}" 
                    class="ml-2 hover:font-semibold hover:text-purple-500 rounded-sm">
                        Edit
                    </a>
                    <form action="{{route('admin.keywords.destroy', $keyword)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="ml-4 hover:font-semibold hover:text-red-500 rounded-sm">Delete</button>
                    </form>
                </div>
				
			</li>
	    @endforeach
	</ul>
    
</x-site-layout>