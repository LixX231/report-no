@props(['type'])

@php
    $classes = match ($type) {
        1 => 'text-blue-600',
        2 => 'text-green-600',
        3 => 'text-red-600',
    };
@endphp
<div>
    <p class="ml-8 mr-8 mb-8">
        Статус заказа:
        <span {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</span>
    </p>
</div>