@props(['company', 'width' => 90])

@php
$logo = $company->logo;

// If it’s not a full URL, assume it’s stored locally
if (!preg_match('/^https?:\/\//', $logo)) {
    $logo = asset('storage/' . $logo);
}
@endphp

<img src="{{ $logo }}" alt="{{ $company->name }} Logo" class="rounded-xl" width="{{ $width }}">
