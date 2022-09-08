<x-posts.post>
    <div class="py-1 pt-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ Route('post.update', ['post' => $post->id]) }}">
                        @csrf
                        @method('PUT')
                        <!-- Title -->
                        <div>
                            <x-input-label for="title" :value="__('title')" />

                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" required
                                :value="$post->title" autofocus />
                        </div>

                        <!-- Content -->
                        <div class="mt-4">
                            <x-input-label for="content" :value="__('content')" />
                            <textarea
                                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                name="content" id="content" cols="30" rows="10" required>{{ $post->content }}</textarea>
                        </div>

                        <div class="flex items-center justify-end mt-4 float-right">
                            <a href="{{ Route('post.destroy', ['post' => $post->id]) }}"
                                onclick="event.preventDefault();document.getElementById('logoutform').submit();">
                                <x-primary-button class="ml-3">
                                    {{ __('Delete') }}
                                </x-primary-button>
                            </a>
                            <x-primary-button class="ml-3">
                                {{ __('Edit') }}
                            </x-primary-button>

                        </div>
                    </form>
                    <form action="{{ route('post.destroy', ['post' => $post->id]) }}" method="POST" name="logoutform"
                        id="logoutform" hidden>
                        @csrf
                        @method('DELETE')
                    </form>
                    <a href="{{ Route('post.index') }}">
                        <x-primary-button class="mt-4 ml-3">
                            {{ __('Back') }}
                        </x-primary-button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-posts.post>
