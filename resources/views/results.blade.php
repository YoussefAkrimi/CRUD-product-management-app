<x-layout>

<x-page-heading>Results</x-page-heading>

<div class="space-y-6">
                @foreach ($products as $product)
                    <x-product-card-wide :$product />
                @endforeach
            </div>

</x-layout>