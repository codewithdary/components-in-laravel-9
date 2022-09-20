@props([
    'type' => 'text', 'name', 'placeholder'
])

<input 
    type={{ $type }} 
    name={{ $name }}
    placeholder={{ $placeholder }} 
    {{ $attributes->merge(['class' => 'pl-4 placeholder:italic bg-neutral-700 rounded-mdt text-white shadow-xl mb-10']) }}
/>
