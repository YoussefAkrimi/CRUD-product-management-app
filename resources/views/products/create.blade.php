<x-layout>

    <x-page-heading>New Product</x-page-heading>

    <x-forms.form method="POST" action="/products">
        <x-forms.input label="Name" name="name" placeholder="Android" />
        <x-forms.input label="Price" name="price" placeholder="$60" />

        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted" />
        <x-forms.input label="Tags (comma seperated)" name="tags" placeholder="android, iphone, tablet" />

        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />
        <x-forms.divider />
        <x-forms.button>Publish</x-forms.button>

    </x-forms.form>
</x-layout>
