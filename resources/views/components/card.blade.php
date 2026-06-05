@props(['title' => null, 'footer' => null])

<div {{ $attributes->merge(['class' => 'card shadow-sm border-0 h-100']) }}>
    <div class="card-body">
        @if (!empty($title))
            <h5 class="card-title mb-3">{{ $title }}</h5>
        @endif

        {{ $slot }}
    </div>

    @if (!empty($footer))
        <div class="card-footer bg-transparent border-0">
            {{ $footer }}
        </div>
    @endif
</div>
