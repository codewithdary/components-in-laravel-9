@extends('layouts.app')

@section('content')
<div class="space-y-2 pt-6 md:space-y-5">
    <x-header title="Contact" />

    <x-subheader class="pb-10">
        Fill in the form to get in touch
    </x-subheader>

    <div>
        <x-forms.form action="{{ route('contact') }}">
            <x-forms.text-input 
                class="w-full sm:w-3/6 h-12"
                name="name"
                placeholder="Name..." 
            />

            <x-forms.text-input 
                class="w-full sm:w-3/6 h-12"
                name="email"
                type="email"
                placeholder="Email..." 
            />

            <x-forms.text-input 
                class="w-full sm:w-3/6 h-12"
                name="subject"
                placeholder="Subject..." 
            />
            
            <x-forms.textarea />

            <x-forms.primary-button class="mx-auto block" type="button">
                Submit Message
            </x-forms.primary-button>
        </x-form>
    </div>
</div>
@endsection