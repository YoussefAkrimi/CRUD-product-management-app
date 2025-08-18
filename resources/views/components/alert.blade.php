@props(['type' => 'info'])

@php
    $colors = [
        'success' => 'bg-green-100 text-green-700 border-green-300',
        'error'   => 'bg-red-100 text-red-700 border-red-300',
        'warning' => 'bg-yellow-100 text-yellow-700 border-yellow-300',
        'info'    => 'bg-blue-100 text-blue-700 border-blue-300',
    ];
@endphp

<div {{ $attributes->merge([
    'class' => "p-4 mb-4 border rounded " . ($colors[$type] ?? $colors['info'])
]) }}>
    {{ $slot }}
</div>
