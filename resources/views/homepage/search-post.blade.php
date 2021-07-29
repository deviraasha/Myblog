@extends('layouts.inner-page')
@section('title')
    {{ request()->get('keyword') }}
@endsection

@section('content')
    <!-- page title -->
    <h2 class="my-3">
        {{ trans('homepage.title.search', ['keyword' => request()->get('keyword')]) }}
    </h2>
    <!-- Breadcrumb:start -->
    {{ Breadcrumbs::render('homepage_search', request()->get('keyword')) }}
    <!-- Breadcrumb:end -->

    <div class="row">
        <div class="col">
            <!-- Post list:start -->
            @forelse ($posts as $post)
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- thumbnail:start -->
                                @if (file_exists(public_path($post->thumbnail)))
                                    <!-- true -->
                                    <img class="card-img-top" src="{{ asset($post->thumbnail) }}"
                                        alt="{{ $post->title }}">
                                @else
                                    <!-- else -->
                                    <img class="img-fluid rounded" src="http://placehold.it/750x300"
                                        alt="{{ $post->title }}">
                                @endif
                                <!-- thumbnail:end -->
                            </div>
                            <div class="col-lg-6">
                                <h2 class="card-title">{{ $post->title }}</h2>
                                <p class="card-text">{{ $post->description }}n</p>
                                <a href="{{ route('homepage.posts.detail', ['slug' => $post->slug]) }}"
                                    class="btn btn-primary">
                                    {{ trans('homepage.button.read_more.value') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <!-- empty -->
                <h3 class="text-center">
                    {{ trans('homepage.no_data.search_posts') }}
                </h3>
            @endforelse



            <!-- Post list:end -->
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
