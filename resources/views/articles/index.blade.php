<x-ohio-layout>
    @foreach($articles as $article)
        <a href="{{ route('articles.show', $article) }}" class="group block bg-cover bg-center h-64 relative rounded-lg overflow-hidden" style="background-image: url({{ $article->pictures->first()->path }});">
            <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity"></div>
            <div class="absolute bottom-0 left-0 p-4">
                <h2 class="text-white font-bold text-lg">{{ $article->title }}</h2>
                <p class="text-white text-sm">Tags coming</p>
            </div>
        </a>
    @endforeach
</x-ohio-layout>
