<article class="seconddescription pt-6 mt-10 text-base bg-white rounded-lg dark:bg-gray-900">
    <footer class="flex justify-between items-center mb-2">
        <div class="flex items-center">
            <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 mr-2">
            <!-- Added mr-2 to add margin-right to the checkbox -->
            <p class="inline-flex items-center text-sm text-gray-900 dark:text-white font-semibold">{{ $todoIdea->title }}</p>
        </div>

        <div class="items-center">
            <p class="text-sm text-gray-600 dark:text-gray-400">{{ $todoIdea->created_at }}</p>
        </div>
    </footer>
    <p class="text-gray-500 dark:text-gray-400">
        {{ $todoIdea->content }}
    </p>
    <img src="{{ asset($todoIdea->image) }}" alt="image" class="w-100  rounded-md" />

{{-- Display images from public directory --}}
{{-- <div class="flex items-center mt-4 space-x-4">
    @foreach(Storage::files('public') as $file)
    <img class="h-50 w-50 rounded-lg" src="{{ Storage::url($file) }}" alt="{{ basename($file) }}">
@endforeach
</div> --}}




    <div class="flex items-center mt-4 space-x-4">
        <form method="POST" action="{{ route('todos.destroy', $todoIdea->id) }}">
            @csrf
            @method('DELETE')
            <button class="inline-flex items-center px-4 py-2 bg-red-600 transition ease-in-out delay-75 hover:bg-red-700 text-white text-sm font-medium rounded-md hover:-translate-y-1 hover:scale-110">
                <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                </svg>
                Delete
            </button>
        </form>
    </div>
</article>
