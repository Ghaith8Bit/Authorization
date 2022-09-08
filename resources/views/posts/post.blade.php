<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2> --}}
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('post.index')" :active="request()->routeIs('post.index')">
                {{ __('All Posts') }}
            </x-nav-link>
            <x-nav-link :href="route('post.create')" :active="request()->routeIs('post.create')">
                {{ __('Create Post') }}
            </x-nav-link>
    </x-slot>
        {{ $slot }}
</x-app-layout>
