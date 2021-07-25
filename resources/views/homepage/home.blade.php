@extends('layouts.homepage')

@section('title')
    {{ trans('homepage.title.home') }}
@endsection

@section('content')
    <!-- page title -->
    <h2 class="my-3">
        {{ trans('homepage.title.home') }}
    </h2>
    <!-- Breadcrumbs:start -->
    {{ Breadcrumbs::render('homepage_home') }}
    <!-- Breadcrumbs:end -->

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
                                <a href="" class="btn btn-primary">
                                    {{ trans('homepage.button.read_more.value') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <!-- empty -->
                <h3 class="text-center">
                    {{ trans('homepage.no_data.posts') }}
                </h3>
            @endforelse



            <!-- Post list:end -->
        </div>
    </div>

    <!-- pagination:start -->
    @if ($posts->hasPages())
        <div class="row">
            <div class="col">
                {{ $posts->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    @endif
    <!-- pagination:end -->
@endsection
