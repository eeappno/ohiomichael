<x-ohio-layout>
    <div class="py-12">
        <div class="container mx-auto">
            <!-- Title Section -->
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold">{{ $article->title }}</h2>
                <p class="text-gray-600">{{ $article->published_at->format('m d, Y') }}</p>
            </div>

            <!-- Images Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach ($article->pictures as $picture)
                    <div>
                        <a href="{{ $picture->path }}" class="block" target="_blank">
                            <img src="{{ $picture->path }}" alt="Image" class="w-full rounded-lg shadow-lg hover:shadow-xl transition">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-ohio-layout>
