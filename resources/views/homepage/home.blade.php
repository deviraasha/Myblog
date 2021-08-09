@extends('layouts.landing')

@section('title')
    {{ trans('homepage.title.home') }}
@endsection

@section('content')

    <div class="row pt-3">
        <div class="col-lg-8">
            <!-- Post list:start -->
            @forelse ($posts as $post)
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- thumbnail:start -->
                                @if (file_exists(public_path($post->thumbnail)))
                                    <!-- true -->
                                    <img class="card-img-top" height="200" src="{{ asset($post->thumbnail) }}"
                                        alt="{{ $post->title }}">
                                @else
                                    <!-- else -->
                                    <img class="img-fluid rounded" height="200" src="http://placehold.it/750x300"
                                        alt="{{ $post->title }}">
                                @endif
                                <!-- thumbnail:end -->
                            </div>
                            <div class="col-lg-6">
                                <h2 class="card-title text-center">{{ $post->title }}</h2>
                                <p class="card-text justify-content-between">{{ $post->description }}</p>
                                <a href="{{ route('homepage.posts.detail', ['slug' => $post->slug]) }}"
                                    class="btn btn-primary">
                                    {{ trans('homepage.button.read_more.value') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty

            @endforelse
            <!-- Post list:end -->
        </div>
        <div class="col-md-4">
            <!-- Categories list:start -->
            <div class="card">
                <h5 class="card-header">
                    {{ trans('homepage.widget.categories') }}
                </h5>
                @forelse ($categories as $category)
                    <a href="{{ route('homepage.post-category', ['slug' => $category->slug]) }}"
                        class="btn btn-primary btn-link">
                        {{ $category->title }}
                    </a>
                @empty
                    <!-- empty -->
                    <h3 class="text-center">
                        {{ trans('homepage.no_data.posts') }}
                    </h3>
                @endforelse
            </div>
            <!-- Categories list:end -->
            <div class="sharing-area text-center">
                <div class="row justify-content-center">
                    <h3>Follow us on social media!</h3>
                </div>
                <a id="twitter" class="btn btn-raised btn-twitter" href="#" rel="nofollow">
                    <i class="fa fa-twitter"></i>
                    Tweet
                </a>
                <a id="facebook" class="btn btn-raised btn-facebook" href="#" rel="nofollow">
                    <i class="fa fa-facebook-square"></i>
                    Facebook
                </a>
                <a id="instagram" class="btn btn-raised btn-instagram" href="#" rel="nofollow">
                    <i class="fa fa-instagram"></i>
                    Instagram
                </a>
                <a id="github" href="#" target="_blank" class="btn btn-raised btn-github" rel="nofollow">
                    <i class="fa fa-github"></i>
                    Star
                </a>
            </div>

            <!-- Tags list -->
            <div class="card pt-5 ml-auto">
                <h5 class="card-header">
                    <a href="{{ route('homepage.tags') }}">{{ trans('homepage.widget.tags') }}</a>

                </h5>
                <div class="content">
                    <div class="row">
                        <div class="pt-lg-0 ml-5 mr-3">
                            @forelse ($tags as $tag)
                                <!-- true -->
                                <a href="{{ route('homepage.posts.tag', ['slug' => $tag->slug]) }}"
                                    class="btn btn-outline-primary ml-auto">{{ $tag->title }}</a>
                            @empty
                                <!-- false -->
                                <h3 class="text-center">
                                    {{ trans('homepage.no_data.tags') }}
                                </h3>
                            @endforelse
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- pagination:start -->
    @if ($posts->hasPages())
        <div class="row pt-5">
            <div class="col pagination pagination-primary justify-content-center">
                {{ $posts->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    @endif
    <!-- pagination:end -->
@endsection
