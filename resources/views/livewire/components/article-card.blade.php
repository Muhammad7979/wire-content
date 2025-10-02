<a class="group relative"
   wire:navigate
   href="{{ route('article.show', $article) }}">
    <div class="aspect-w-16 aspect-h-11">
        <img
            class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80"
            src="/storage/{{ $article?->image?->path }}"
            alt="{{  $article?->image?->alt_text }}"/>
        <h3 class="tetext-sm text-gray-700">
            {{ $article->name }}
        </h3>
        @if ($article->content)
            <p class="mt-1 text-sm text-gray-500">
                {{ Str::limit($article->content,100) }}
            </p>
        @endif
    </div>
    <h5 class="text-sm font-medium text-gray-900">
    </h5>
</a>