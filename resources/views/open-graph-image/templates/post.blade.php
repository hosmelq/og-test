<x-open-graph-image-layout>
    <div class="flex h-screen items-center justify-center bg-gradient-to-br from-blue-500 to-purple-600">
        <div class="mx-auto max-w-4xl p-12 text-center">
            <h1 class="mb-4 text-6xl font-bold text-white">
                {{ $title }}
            </h1>
            <p class="text-2xl text-white/90">
                By {{ $author }} • {{ $date }}
            </p>
        </div>
    </div>
</x-open-graph-image-layout>
