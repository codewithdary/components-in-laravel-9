@props(['active', 'url', 'title'])

@php
    $classes = ($active ?? false)
        ? 'p-1 font-medium text-gray-900 sm:p-4'
        : 'p-1 font-medium text-green-900 sm:p-4'
@endphp

<li>
    <a 
        href="{{ $url }}" 
        class="p-1 font-medium text-gray-900 dark:text-gray-100 sm:p-4" aria-current="page">
        {{ $title }}
    </a>
</li>  