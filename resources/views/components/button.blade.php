@props(['variant' => 'primary', 'type' => 'button'])

@php
    $classes = match ($variant) {
        'secondary' => 'btn btn-secondary',
        'outline' => 'btn btn-outline-primary',
        default => 'btn btn-primary',
    };
@endphp

<button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
