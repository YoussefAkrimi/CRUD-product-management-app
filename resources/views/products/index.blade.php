<x-layout>

    <div class="space-y-10">

        <section class="text-center pt-6">
            <h1 class="font-bold text-2xl mb-2">Looking for Something?</h1>

            <x-forms.form action="/search" class="mt6">
<x-forms.input :label="false" name="q" placeholder="Android..." class="max-w-md mx-auto" />

            </x-forms.form>
        </section>

        <section class="pt-10">
            <x-section-heading>Featured Products</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredProducts as $product)
                    <x-product-card :$product />
                @endforeach
            </div>

        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">

                @foreach ($tags as $tag)
                    <x-tag :$tag />
                @endforeach

            </div>
        </section>
        <section>
            <x-section-heading>Rescent Products</x-section-heading>

            <div class="mt-6 space-y-6">
                @foreach ($products as $product)
                    <x-product-card-wide :$product />
                @endforeach
            </div>
        </section>
    </div>

</x-layout>
