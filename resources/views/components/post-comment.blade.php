@props(['comment'])
<x-panel class="bg-gray-50">

    <article class="flex space-x-4">

        <div class="flex-shrink-0">
            <img src="https://i.pravatar.cc/60?u={{ $comment->user_id }}" alt="" width="60" height="60"
                class="rounded-xl">
        </div>
        <div>
            <header class="mb-4">
                <h2 class="font-bold">{{ $comment->author->username }}</h2>
                <p class="text-xs">Posted <time>{{ $comment->created_at->format('F j, Y, g:i a') }}</time> </p>
            </header>
            <p> {{ $comment->body }}
                @error('body')
                    <span class="text-red-500 text-xs mt-1">{{ $message }} </span>
                @enderror
            </p>
        </div>
    </article>

</x-panel>
