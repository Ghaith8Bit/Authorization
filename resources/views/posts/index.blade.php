<x-posts.post>
    @foreach ($posts as $post)
        <div class="py-1 pt-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <a href="{{ Route('post.edit', ['post' => $post]) }}">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <span
                                style="float: right;margin-right: 10px;font-weight: bold;">{{ $post->user->name }}</span>
                            <h3 style="font-size: 1.2rem">{{ $post->title }}</h3>
                            <p>{{ $post->content }}</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    @endforeach
</x-posts.post>
