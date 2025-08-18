<x-layout>

    <x-page-heading>Edit Product {{ $product->name }}</x-page-heading>

<x-forms.form method="PATCH" action="/products/{{ $product->id }}">

        <x-forms.input label="Name" name="name" :value="$product->name" placeholder="Shift Leader" />

        <!-- Description input -->
        <x-forms.input label="Price" name="price" :value="$product->price" placeholder="$50,000 Per Year" />

        <div class="mt-6 flex items-center gap-x-4">
            <x-forms.button type="submit">Update</x-forms.button>

            <x-forms.button form="delete-form" variant="danger">Delete</x-forms.button>

            <a href="/products/{{ $product->id }}" class="text-gray-700 underline">Cancel</a>
        </div>
    </x-forms.form>


      <!-- Hidden delete form -->
<form method="POST" action="/products/{{ $product->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
