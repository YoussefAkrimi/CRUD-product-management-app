@props(['product'])
<x-panel class="flex flex-col text-center">

    <div class="self-start text-sm">{{ $product->company->name }}</div>

    <div class="py-8">
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">
            <a href="{{ $product->url }}" target="_blank">{{ $product->name }}</a>
        </h3>
        <p class="text-sm mt-4">{{ $product->price }}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($product->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>

        <x-company-logo :width="42" />
    </div>

</x-panel>
