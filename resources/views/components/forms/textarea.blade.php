@props(['label', 'name', 'rows' => 4])

<div class="mb-4">
    <label for="{{ $name }}" class="block font-medium mb-1">
        {{ $label }}
    </label>

    <textarea 
        name="{{ $name }}" 
        id="{{ $name }}" 
        rows="{{ $rows }}"
        {{ $attributes->merge(['class' => 'w-full border rounded p-2 text-black']) }}
    >{{ old($name) }}</textarea>

    @error($name)
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>
