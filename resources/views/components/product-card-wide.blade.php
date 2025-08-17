
@props(['product'])

<x-panel class="flex gap-x-6">
    <div>
        <x-company-logo />
    </div>
    <div class="flex-1 flex flex-col">
        <a href="" class="self-start text-sm text-gray-400">{{ $product->company->name }}</a>

        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800 transition-colors duration-300">
            
            <a href="{{ $product->url }}" target="_blank">{{ $product->name }}</a>
            
           </h3>
        <p class="text-sm text-gray-400 mt-auto">{{ $product->price }}</p>
    </div>

    <div>
        @foreach ($product->tags as $tag)
            <x-tag :$tag/>
        @endforeach
    </div>

</x-panel>
