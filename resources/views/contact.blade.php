<x-layout>
    <x-page-heading>Contact Us</x-page-heading>


     @if(session('success'))
        <x-alert type="success">
            {{ session('success') }}
        </x-alert>
    @endif

    
    <x-forms.form method="POST" action="/contact">
        <x-forms.input label="Name" name="name" />
        <x-forms.input label="Email" name="email" type="email" />
        
        <x-forms.textarea label="Message" name="message" rows="5" />

        <x-forms.button>Send Message</x-forms.button>
    </x-forms.form>
</x-layout>
