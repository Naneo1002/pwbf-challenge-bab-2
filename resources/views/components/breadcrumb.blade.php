@props(['items' => []])

<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        @foreach ($items as $index => $item)
            @php
                $isLast = $index === count($items) - 1;
            @endphp

            <li class="breadcrumb-item {{ $isLast ? 'active' : '' }}" @if ($isLast) aria-current="page" @endif>
                @if ($isLast || empty($item['url']))
                    {{ $item['label'] ?? '' }}
                @else
                    <a href="{{ $item['url'] }}">{{ $item['label'] ?? '' }}</a>
                @endif
            </li>
        @endforeach
    </ol>
</nav>
