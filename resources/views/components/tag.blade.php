@props(['tag', 'size' => 'base'])

@php
    $classes = "bg-white/10 hover:bg-white/25 rounded-xl font-bold transition-colors duration-300 inline-block";

    if ($size === 'base') {
        $classes .= " px-3 py-1 text-xs";   // slightly smaller, more compact
    }

    if ($size === 'small') {
        $classes .= " px-2 py-0.5 text-2xs"; // very small
    }
@endphp

<a href="/tags/{{ strtolower($tag->name) }}"
    class="{{ $classes }}">{{ $tag->name }}</a>
