@props(['active'])

@php
$classes = ($active ?? false)
            ? 'item-menu'
            : 'item-menu active';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
