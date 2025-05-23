@extends('partials.layout')

@section('content')
    <h1 class="text-3xl font-bold text-center my-6">
        Posts Tagged: <span class="text-primary">#{{ $tag->name }}</span>
    </h1>

    <div class="flex justify-center mb-6">
        {{ $posts->links() }}
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        @foreach ($posts as $post)
            <div class="card bg-base-100 shadow-md hover:shadow-lg transition-shadow min-h-full">
                @if ($post->image)
                    <figure><img src="{{ $post->image }}" alt="{{ $post->title }}" /></figure>
                @endif

                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p>{{ $post->snippet }}</p>

                    <div class="text-sm text-neutral-content">
                        <div class="tooltip" data-tip="{{ $post->created_at }}">
                            <p>{{ $post->created_at->diffForHumans() }}</p>
                        </div>
                        @if ($post->created_at != $post->updated_at)
                            <div class="tooltip" data-tip="{{ $post->updated_at }}">
                                <p>Edited</p>
                            </div>
                        @endif
                        <p>By {{ $post->user->name }}</p>
                        <p>Comments: {{ $post->comments_count }}</p>
                    </div>

                    <div class="flex flex-wrap gap-1 mt-2">
                        @foreach ($post->tags as $tag)
                            <div class="badge badge-outline badge-primary">{{ $tag->name }}</div>
                        @endforeach
                    </div>

                    <div class="card-actions justify-end mt-4">
                        <a href="{{ route('post', $post) }}" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="flex justify-center mt-6">
        {{ $posts->links() }}
    </div>
@endsection
