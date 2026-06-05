@props(['color' => 'primary'])

@php
    $classes = match ($color) {
        'secondary' => 'badge bg-secondary',
        'success' => 'badge bg-success',
        'danger' => 'badge bg-danger',
        'warning' => 'badge bg-warning text-dark',
        'info' => 'badge bg-info text-dark',
        default => 'badge bg-' . $color,
    };
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</span>
