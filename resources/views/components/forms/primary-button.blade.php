<button {{ 
    $attributes->merge([
        'class' => 'bg-green-400 uppercase text-white rounded-md font-bold py-4 px-6 transition-all hover:bg-green-600',
        'type' => 'submit'
        ]) 
    }}>
    {{ $slot }}
</button>