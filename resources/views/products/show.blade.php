<x-layout>

    <x-page-heading>Product Details</x-page-heading>

    <h2 class="font-bold text-lg text-blue-600">{{ $product->name }}</h2>

    <p>This product was made by <strong>{{ $product->company->name }}</strong> and it costs <strong>{{ $product->price }}</p>

  @can('edit', $product)
       <a href="/products/{{ $product->id }}/edit"
   class="rounded bg-blue-500 text-white px-4 py-2 inline-block">
    Edit Product
</a>

    @endcan
</x-layout>
