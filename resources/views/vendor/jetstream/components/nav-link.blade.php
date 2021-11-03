@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-white inline-flex items-center px-1 pt-1 border-b-2  text-sm font-medium leading-5  focus:outline-none focus:border-gray-700 transition'
            : 'text-white inline-flex items-center px-1 pt-1 text-sm font-medium leading-5  transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
