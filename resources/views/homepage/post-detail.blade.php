@extends('layouts.inner-page')

@section('title')
    {{ $post->title }}
@endsection

@section('description')
    {{ $post->description }}
@endsection

@section('content')
    <!-- Breadcrumb:Start -->
    {{ Breadcrumbs::render('homepage_post', $post->title) }}
    <!-- Breadcrumb:end -->
    <div class="row">
        <!-- Post Content Column:start -->
        <div class="col-lg-8">
            <h1>
                {{ $post->title }}
            </h1>
            <!-- thumbnail:start -->
            @if (file_exists(public_path($post->thumbnail)))
                <!-- true -->
                <img class="card-img-top" src="{{ asset($post->thumbnail) }}" alt="{{ $post->title }}">
            @else
                <!-- else -->
                <img class="img-fluid rounded" src="http://placehold.it/750x300" alt="{{ $post->title }}">
            @endif
            <!-- thumbnail:end -->
            <hr>
            <!-- Post Content:start -->
            <div>

                {!! $post->content !!}
            </div>
            <!-- Post Content:end -->
            <hr>
        </div>

        <!-- Sidebar Widgets Column:start -->
        <div class="col-md-4">
            <!-- Categories Widget -->
            <div class="card mb-3">
                <h5 class="card-header">
                    {{ trans('homepage.widget.categories') }}
                </h5>
                <div class="card-body">
                    <!-- category list:start -->
                    @foreach ($post->categories as $category)
                        <div class="pt-2">
                            <a href="{{ route('homepage.post-category', ['slug' => $category->slug]) }}"
                                class="badge badge-primary py-2 px-4 pt-2">
                                {{ $category->title }}
                            </a>
                        </div>
                    @endforeach


                    <!-- category list:end -->
                </div>
            </div>

            <!-- Side Widget tags:start -->
            <div class="card mb-3 pt-3">
                <h5 class="card-header">
                    {{ trans('homepage.widget.tags') }}
                </h5>
                <div class="card-body">
                    @foreach ($post->tags as $tag)
                        <a href="{{ route('homepage.posts.tag', ['slug' => $tag->slug]) }}"
                            class="badge badge-info py-2 px-4 my-1">
                            {{ $tag->title }}
                        </a>
                    @endforeach
                    <!-- tag list:start -->

                    <!-- tag list:end -->
                </div>
            </div>
            <!-- Side Widget tags:start -->
        </div>
        <!-- Sidebar Widgets Column:end -->
    </div>
@endsection
