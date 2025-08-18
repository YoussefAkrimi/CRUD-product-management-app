@props(['method' => 'GET', 'action', 'class' => 'max-w-2xl mx-auto space-y-6'])

<form 
    action="{{ $action }}" 
    method="{{ in_array(strtoupper($method), ['GET', 'POST']) ? $method : 'POST' }}" 
    {{ $attributes->merge(['class' => $class])->except('method', 'action') }}
>
    @csrf
    @if(!in_array(strtoupper($method), ['GET', 'POST']))
        @method($method)
    @endif

    {{ $slot }}
</form>
