@props([
    'action', 'method' => 'POST'
])

<form 
    method="{{ $method }}"
    action="{{ $action }}" 
    class="text-center mx-auto pt-10">
    @csrf
    {{ $slot }}
</form>