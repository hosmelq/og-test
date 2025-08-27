{{-- resources/views/open-graph-image/templates/event.blade.php --}}
<x-open-graph-image-layout>
    <div class="flex h-screen flex-col bg-gradient-to-b from-indigo-600 to-purple-700 p-16 text-white">
        <div class="mb-auto">
            <img class="size-12 rounded-full" src="@embedImage(public_path('images/event.jpg'))">
        </div>

        <div class="space-y-6">
            <h1 class="text-6xl font-bold">{{ $title }}</h1>

            <div class="flex items-center space-x-8 text-2xl">
                <span>📅 {{ $date }}</span>
                <span>📍 {{ $location }}</span>
            </div>

            @if($speakers ?? [])
                <div class="mt-8">
                    <p class="mb-4 text-xl opacity-90">Featured Speakers:</p>
                    <div class="flex space-x-4">
                        @foreach($speakers as $speaker)
                            <div class="rounded-full bg-white/20 px-4 py-2">
                                {{ $speaker }}
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-open-graph-image-layout>
