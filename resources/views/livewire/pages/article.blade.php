<div class="py-12 space-y-3">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow rounded overflow-hidden ">
            <article class="mx-auto prose text-gray-500">
                <h1 class="text-gray-800">
                    {{ $article?->title }}
                </h1>
                
                <img class="rounded-sm" src="/storage/{{ $article->image?->path }}" alt="">
                {{ $article->image?->caption }}
                {!! $article?->content !!}
            </article>
        </div>
    </div>

     <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
        <div class="p-10 bg-white shadow rounded overflow-hidden text-gray-800">
          <livewire:comments :model="$article" :emojis="['👍', '❤️', '😂', '🎉', '😢', '😡']" />
        </div>
    </div>

</div>