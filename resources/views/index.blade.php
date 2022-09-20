@extends('layouts.app')

@section('content')
<div class="space-y-2 pt-6 pb-8 md:space-y-5">
    <x-header title="Latest Articles" />

    <x-subheader class="pb-10">
        Learn more about Laravel and Tailwind CSS
    </x-subheader>

    <div class="divide-y divide-gray-200 dark:divide-gray-700">
        @foreach ($posts as $post)
            <x-blog.blog-item :post="$post" />
        @endforeach
    </div>
</div>
@endsection