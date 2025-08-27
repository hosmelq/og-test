{{-- resources/views/open-graph-image/templates/product.blade.php --}}
<x-open-graph-image-layout>
    <div class="flex h-screen bg-gray-50">
        <div class="flex w-1/2 items-center justify-center">
            <img
                class="h-96 w-96 object-cover"
                src="@embedImage(public_path('images/product.jpg'))"
            >
        </div>
        <div class="flex w-1/2 flex-col justify-center p-12">
            <h2 class="mb-4 text-4xl font-bold">{{ $name }}</h2>
            <p class="mb-8 text-2xl text-gray-600">${{ $price }}</p>
            <p class="text-lg text-gray-500">{{ $description }}</p>
        </div>
    </div>
</x-open-graph-image-layout>
