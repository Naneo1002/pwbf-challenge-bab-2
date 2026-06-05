@props(['type' => 'info', 'message' => null, 'dismissible' => true])

@php
    $variant = in_array($type, ['success', 'danger', 'warning', 'info'], true) ? $type : 'info';
    $icons = [
        'success' => '✅',
        'danger' => '❌',
        'warning' => '⚠️',
        'info' => '💡',
    ];
@endphp

<div {{ $attributes->merge(['class' => 'alert alert-' . $variant . ' alert-dismissible fade show']) }} role="alert">
    <span class="me-2">{{ $icons[$variant] }}</span>
    @if (!empty($message))
        {{ $message }}
    @else
        {{ $slot }}
    @endif

    @if ($dismissible)
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    @endif
</div>
